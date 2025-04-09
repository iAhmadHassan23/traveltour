<div class="card card-primary card-outline">
    <div class="card-header">
        <h3 class="card-title">{{ ucfirst(strtolower($folder)) }}</h3>
        <div class="card-tools">
            <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Search Mail">
                <div class="input-group-append">
                    <div class="btn btn-primary">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body p-0">
        <div class="mailbox-controls">

            {{--            <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>--}}
            {{--            </button>--}}
            <div class="btn-group">
                {{--                <button type="button" data-url="{{ route('admin.mailbox.delete.message') }}"  class="delete-messages btn btn-default btn-sm">--}}
                {{--                    <i class="far fa-trash-alt"></i>--}}
                {{--                </button>--}}
                {{--                <button type="button" class="btn btn-default btn-sm">--}}
                {{--                    <i class="fas fa-reply"></i>--}}
                {{--                </button>--}}
                {{--                <button type="button" class="btn btn-default btn-sm">--}}
                {{--                    <i class="fas fa-share"></i>--}}
                {{--                </button>--}}
            </div> 
            <a href="{{ request()->url() }}" class="refresh btn btn-default btn-sm">
                <i class="fas fa-sync-alt"></i>
            </a>
            <div class="float-right">
                {{$messages['From']}}-{{$messages['To']}}/{{$messages['Count']}}
                <div class="btn-group">
                    <a href="{{ $messages['previous_page']  }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="{{ $messages['next_page'] }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>

        </div>
        <div class="table-responsive mailbox-messages position-relative">
            <table class="table table-hover table-striped">
                <tbody>
                @forelse($messages['Data'] as $key => $message)
                    <tr class="{{ $message->seen == 0 ? 'inbox-highlight' : '' }}">
                        <td class="mailbox-star align-middle">
                            @if($message->seen == 0)
                                <span
                                    class="badge badge-danger">Unseen
                                </span>
                            @endif
                            @if( $message->seen && Str::contains($message->subject,['Re:']))
                                    <span>
                                        <i class="fa-regular fa-circle-check text-success" style="font-size: 22px"></i>
                                    </span>
                            @endif
                        </td>
                        <td class="mailbox-name" style="width: 110px; overflow: hidden"><a href="{{ route('admin.mailbox.message.detail',['folder' => $folder , 'message_id' =>$message->uid ]) }}">{{ Str::limit($message->from, 50, '...') }}</a></td>
                        <td class="mailbox-subject"><div style="width: 110px; overflow: hidden">{{ Str::limit($message->subject, 50, $end='...') }}</div></td>
                        {{--                    <td class="mailbox-attachment"> <i class="fas fa-paperclip"></i>  </td>--}}
                        <td class="mailbox-date">{{ isset($message->date) ? date('D, d M Y H:i', strtotime($message->date)) : (isset($message->udate) ? date('D, d M Y H:i', strtotime($message->udate)) : null ) }}</td>
                        <td>
                            <div class="btn-group">
                                @if(request()->segment(3) == 'INBOX.Trash')

                                    <form action="{{ route('admin.mailbox.delete.single_message' , ['message_id' => $message->uid , 'folder' => 'Trash']) }}" method="post">
                                @else
                                    <form action="{{ route('admin.message.move_to_trashed' , ['message_id' => $message->uid , 'folder' => $folder]) }}" method="post">
                                @endif

                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');" title="Delete"><i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                                <a href="{{ route('admin.mailbox.compose', ['folderName' => str_replace('INBOX.', '', $folder) , 'message_id' => $message->uid, 'subject' => $message->subject ] ) }}" class="btn btn-primary btn-sm" title="Reply">
                                    <i class="fas fa-reply"></i>
                                </a>
                            </div>

                        </td>
                    </tr>
                @empty
                @endforelse
                </tbody>
            </table>

        </div>

    </div>

    <div class="card-footer p-0">
        <div class="mailbox-controls">

            {{--            <button type="button" class="btn btn-default btn-sm checkbox-toggle">--}}
            {{--                <i class="far fa-square"></i>--}}
            {{--            </button>--}}
            <div class="btn-group">
                {{--                <button type="button" data-url="{{ route('admin.mailbox.delete.message') }}"  class="delete-messages btn btn-default btn-sm">--}}
                {{--                    <i class="far fa-trash-alt"></i>--}}
                {{--                </button>--}}
                {{--                <button type="button" class="btn btn-default btn-sm">--}}
                {{--                    <i class="fas fa-reply"></i>--}}
                {{--                </button>--}}
                {{--                <button type="button" class="btn btn-default btn-sm">--}}
                {{--                    <i class="fas fa-share"></i>--}}
                {{--                </button>--}}
            </div>

            <a href="{{ request()->url() }}" class="refresh btn btn-default btn-sm">
                <i class="fas fa-sync-alt"></i>
            </a>
            <div class="float-right">
                {{$messages['From']}}-{{$messages['To']}}/{{$messages['Count']}}
                <div class="btn-group">
                    <a href="{{ $messages['previous_page']  }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="{{ $messages['next_page'] }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>
