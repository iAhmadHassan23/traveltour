@extends('adminlte::page')

@section('title', 'Error')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Error</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Error</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@stop
@section('content')
    <div class="container-fluid">
        @include('backend.component.flash-messages')
        <section class="content">
            <div class="row">
                <div class="col-md-3">
                    <select name="email_account" id="email_account" class="form-control mb-5">
                        @forelse($email_accounts as $email_account)
                            <option value="">Select one</option>
                            <option
                                value="{{ $email_account->email_account }}" {{ request('email_account') == $email_account->email_account ? 'selected' : null }}>{{ $email_account->email_account }}</option>
                        @empty
                        @endforelse
                    </select>
                </div>

            </div>

        </section>
    </div>
@endsection

@section('style')

@endsection
@section('js')
    <script>
        $('#email_account').on('change', function () {
            window.location.href = window.location.href.split('?')[0] + "?mailbox_email=" + $('#email_account').find(":selected").val();
        });
    </script>
@endsection

