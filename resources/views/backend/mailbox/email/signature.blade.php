<table align="center" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
    <tr>
        @isset($signature->image)
            <td align="left" valign="top" style="width: 220px;padding:0 16px;">
                <img src="{{ asset('upload/signature/'. $signature->image) }}" style="width:220px;height:auto">
            </td>
        @endisset
        <td valign="top" align="left" style="font-weight: 500;color: #333;font-size: 14px;">
            @isset($signature->name)
                <p style="margin:0;"><span>name:</span><span>{!! $signature->name !!}</span></p>
            @endisset
 
            @isset($signature->content->phone)
                <p style="margin:0;"><span>phone:</span><span>{!! $signature->content->phone !!}</span></p>
            @endisset
            @isset($signature->content->website)
                <p style="margin:0;"><span>website:</span><span>{!! $signature->content->website !!}</span></p>
            @endisset
            @isset($signature->content->email)
                <p style="margin:0;"><span>email:</span><a href="mailto:{{$signature->content->email}}"
                                                           style="color: #333;">{!! $signature->content->email !!}</a>
                </p>
            @endisset
            @isset($signature->content->address)
                <p style="margin:0;"><span>address:</span><span>{!! $signature->content->address !!}</span></p>
            @endisset

            <p style="margin:10px 0 0;">
                @isset($signature->content->facebook)
                    <a href="{{$signature->content->facebook}}" style="margin-right:5px;display:inline-block;width: 30px;"><img
                                src="{{asset('web/images/fb-icon.png')}}" width="30"></a>
                @endisset
                @isset($signature->content->instagram)
                    <a href="{{$signature->content->instagram}}" style="margin-right:5px;display:inline-block;width: 30px;"><img src="{{asset('web/images/insta.png')}}"
                                                                                                width="30"></a>
                @endisset
                @isset($signature->content->linkedin)
                    <a href="{{$signature->content->linkedin}}" style="margin-right:5px;display:inline-block;width: 30px;"><img
                                src="{{asset('web/images/linked-in.png')}}" width="30"></a>

                @endisset
                @isset($signature->content->twitter)
                    <a href="{{$signature->content->twitter}}" style="margin-right:5px;display:inline-block;width: 30px;"><img src="{{asset('web/images/twitter.png')}}"
                                                                                                width="30"></a>
                @endisset

            </p>
        </td>
    </tr>
    </tbody>
</table>
