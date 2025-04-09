<div class="card card-primary card-outline mb-5">
    <div class="card-header">
        <h3 class="card-title">Compose New Message From ({{ Auth::user()->default_email }})</h3>
    </div>
    @php
        $to = [];
        if(isset($message_details)){
            if ($message_details->getReplyTo() ){
                foreach($message_details->getReplyTo()->toArray() as $key => $reply){
                $to[] = $reply->mail;
                }
            }else{
                $to[] = $message_details->getFrom()[0]->mail;
            }
        }
        $to = implode(',', $to);
    @endphp
    <form action="{{ route('admin.mailbox.message_send') }}" method="post" enctype="multipart/form-data">
        <div class="card-body">

            @csrf
            <input type="hidden" name="folder_name" value="{{ request('folderName') }}">
            <input type="hidden" name="message_id" value="{{ request('message_id') }}">
            <input type="hidden" value="{{ Auth::user()->default_email }}" name="from">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <label for="to">To:</label>
                    </div>
                    <div class="col-md-10">
                        <div class="input-group mb-3">
                            <input class="form-control" id="to" required name="to" placeholder="To:"
                                   value="{{ old('to') ?? $to }}">
                            <div class="input-group-prepend">
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    +
                                </button>
                                <div class="dropdown-menu p-2" style="">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input checked-check" value="cc" name="cc" id="Cc">
                                        <label class="form-check-label" for="Cc">Cc</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input checked-check" value="bcc" id="Bcc">
                                        <label class="form-check-label" for="Bcc">Bcc</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" value="reply-to" class="form-check-input checked-check" id="reply-to">
                                        <label class="form-check-label" for="reply-to">Reply-To</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input checked-check" value="followup-to" id="Followup-To">
                                        <label class="form-check-label" for="Followup-To">Followup-To</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="form-group cc" style="display: {{ old('cc') ? 'block' : 'none'}}">
                <div class="row">
                    <div class="col-md-2">
                        <label for="subject">Cc:</label>
                    </div>
                    <div class="col-md-10">
                        <input type="email" class="form-control"  name="cc" value="{{ old('cc')}}"
                               placeholder="Cc:">
                    </div>
                </div>
            </div>
            <div class="form-group bcc" style="display: {{ old('bcc') ? 'block' : 'none'}}">
                <div class="row">
                    <div class="col-md-2">
                        <label for="subject">Bcc:</label>
                    </div>
                    <div class="col-md-10">
                        <input class="form-control" type="email"  name="bcc" value="{{ old('bcc')}}"
                               placeholder="Bcc:">
                    </div>
                </div>
            </div>
            <div class="form-group reply-to" style="display: {{ old('reply_to') ? 'block' : 'none'}}">
                <div class="row">
                    <div class="col-md-2">
                        <label for="subject">Reply-To:</label>
                    </div>
                    <div class="col-md-10">
                        <input class="form-control" type="email" name="reply_to" value="{{ old('reply_to')}}"
                               placeholder="Reply-To:">
                    </div>
                </div>
            </div>
            <div class="form-group followup-to" style="display: {{ old('followup_to') ? 'block' : 'none'}}">
                <div class="row">
                    <div class="col-md-2">
                        <label for="subject">Followup-to:</label>
                    </div>
                    <div class="col-md-10">
                        <input class="form-control" type="email" name="followup_to" value="{{ old('followup_to')}}"
                               placeholder="Followup-to:">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <label for="subject">Subject:</label>
                    </div>
                    <div class="col-md-10">
                        <input class="form-control" id="subject" required name="subject" value="{{ old('subject') ?? request('subject') }}"
                               placeholder="Subject:">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="mailbox-read-message" >
                            @isset($message_details)
                            <iframe srcdoc="@if($message_details->hasHTMLBody()) {{ $message_details->getHTMLBody() }}  @else {{  nl2br($message_details->getTextBody()) }}  @endif"></iframe>
                        @endisset
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="message_body">Message:</label>
                <textarea name="message_body" required class="form-control summernote" id="message_body" cols="30"
                          rows="10">{{ old('message_body') }}</textarea>
            </div>
            <div class="form-group">
                <div class="btn btn-default btn-file">
                    <i class="fas fa-paperclip"></i> Attachment
                    <input type="file" name="attachment">
                </div>
                <p class="help-block">Max. 2MB</p>
            </div>
            <div class="signature-scroll">
            @isset($signatures)
                @forelse($signatures as $key => $signature)
                    @php
                        $signature->content = json_decode($signature->content);
                    @endphp
                    <div class="d-flex justify-content-start">
                        <div class="form-check align-self-center checkbox-xl m-3">
                            <input type="checkbox" class="form-check-input checkbox-signature" name="signature" value="{{ $signature->id }}" id="signCheck{{$key}}">
                            <label class="form-check-label" for="signCheck{{$key}}"></label>
                        </div>
                        <div class="border p-2 mb-2">
                            @include('backend.mailbox.email.signature', ['signature' => $signature])
                         </div>
                    </div>
                @empty
                @endforelse
            @endisset
            </div>
            <div class="card-footer">
                <div class="float-right">
                    {{--            <button type="button" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Draft</button>--}}
                    <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
                </div>
                <a href="{{ route('admin.mailbox.index') }}" class="btn btn-default"><i class="fas fa-times"></i>
                    Discard</a>
            </div>
        </div>
    </form>
</div>
