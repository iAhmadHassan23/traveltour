@if (session()->has('success'))
    <div class="alert alert-dismissable alert-success">

        <strong>
            {!! session()->get('success') !!}
        </strong>
    </div>
@endif
@if (session()->has('error-message') || session()->has('error'))
    <div class="alert alert-dismissible alert-danger fade show" role="alert">

        <strong>
            {!! session()->get('error-message') ??  session()->get('error') !!}
        </strong>
    </div>
@endif

@if(count($errors) > 0 )
    <div class="alert alert-danger alert-dismissible fade show" role="alert">

        <ul class="p-0 m-0" style="list-style: none;">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
