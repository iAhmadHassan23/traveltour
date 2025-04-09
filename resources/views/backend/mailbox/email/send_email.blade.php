{!! $message_body !!}

@isset($signature->content)
    @include('backend.mailbox.email.signature', ['signature' => $signature])
@endisset


@isset($reply_body)
<blockquote style="
    border-left: 1px solid #c5c5c5;
    margin: 20px;
    padding: 0 15px;
">
    {!! $reply_body !!}
</blockquote>
@endisset

