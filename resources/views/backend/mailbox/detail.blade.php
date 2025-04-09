<div class="card card-primary card-outline mb-4">
    <div class="card-header">
        <h3 class="card-title h4">Read Mail ( {{ Request::segment(3)  }} )</h3>

    </div>

    <div class="card-body p-0">
        <div class="mailbox-read-info">
            <h5>{{ $message->getSubject() }}</h5>
            <h6>From: {{ $message->getReplyTo() ? $message->getReplyTo()[0]->mail : $message->getFrom()[0]->mail }}
                <span class="mailbox-read-time float-right">{{ date('d M. Y H:i A', strtotime($message->getDate()[0])) }}</span>
            </h6>
        </div>
        <div class="mailbox-controls with-border text-center">
            <div class="btn-group">
                @if(Request::segment(3) != 'Trash')
                    <form action="{{ route('admin.message.move_to_trashed' , ['message_id' => $message->getUid() , 'folder' => $message->getFolderPath()]) }}"
                          method="post">
                        @csrf
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');"
                                class="btn btn-danger btn-sm" data-container="body"
                                title="Delete">
                            <i class="far fa-trash-alt"></i> Delete
                        </button>
                    </form>
                @endif
                <a href="{{ route('admin.mailbox.compose', [
                        'folderName' => str_replace('INBOX.', '', $message->getFolderPath()) ,
                        'message_id' => $message->getUid(),
                         'subject' => $message->getSubject()[0]
                         ]) }}" class="btn btn-info btn-sm"><i class="fas fa-reply"></i> Reply</a>
{{--                <button type="button" class="btn btn-info btn-sm"><i class="fas fa-share"></i> Forward</button>--}}
            </div>


            {{--                <button type="button" class="btn btn-default btn-sm" data-container="body"--}}
            {{--                        title="Reply">--}}
            {{--                    <i class="fas fa-reply"></i>--}}
            {{--                </button>--}}
            {{--                <button type="button" class="btn btn-default btn-sm" data-container="body"--}}
            {{--                        title="Forward">--}}
            {{--                    <i class="fas fa-share"></i>--}}
            {{--                </button>--}}


        </div>

        <div class="mailbox-read-message" >
            <iframe height="500" srcdoc="@if($message->hasHTMLBody()) {{ $message->getHTMLBody() }}  @else {{  nl2br($message->getTextBody()) }}  @endif"></iframe>

        </div>

    </div>
    @if($message->hasAttachments())
        <div class="card-footer bg-white">
            <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                @foreach($files as $file)
                    @if($file['type'] == 'text')
                        <li>
                            <span class="mailbox-attachment-icon"><i class="far fa-file-word"></i></span>
                            <div class="mailbox-attachment-info">
                                <a href="{{ $file['url'] }}" download class="mailbox-attachment-name"><i
                                            class="fas fa-paperclip"></i>
                                    {{ $file['filename'] }}</a>
                                <span class="mailbox-attachment-size clearfix mt-1">
                                                <span>{{ $file['size'] }} MB</span>
                                                <a href="{{ $file['url'] }}" download
                                                   class="btn btn-default btn-sm float-right"><i
                                                            class="fas fa-cloud-download-alt"></i></a>
                                                </span>
                            </div>
                        </li>
                    @else
                        <li>
                            <span class="mailbox-attachment-icon has-img"><img src="{{ $file['url'] }}"></span>
                            <div class="mailbox-attachment-info">
                                <a href="{{ $file['url'] }}" download class="mailbox-attachment-name"><i
                                            class="fas fa-camera"></i>
                                    {{ $file['filename'] }}</a>
                                <span class="mailbox-attachment-size clearfix mt-1">
                                                <span>{{ $file['size'] }} MB</span>
                                                <a href="{{ $file['url'] }}" download
                                                   class="btn btn-default btn-sm float-right"><i
                                                            class="fas fa-cloud-download-alt"></i></a>
                                                </span>
                            </div>
                        </li>
                    @endif

                @endforeach


            </ul>
        </div>
    @endif

</div>


