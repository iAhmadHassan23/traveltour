@extends('adminlte::page')
@section('title', 'change password')
@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Change password</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Change password</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@stop
@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- /.col-md-6 -->
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">General Form</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{ route(('change.password')) }}" method="post">
                                        @csrf
                                        @isset($row->id)
                                            @method('put')
                                        @endisset
                                        <div class="row">
                                            <div class="col-md-12">
                                                @if(session()->has('message'))
                                                    <div class="alert alert-success">{{ session()->get('message') }}</div>
                                                @endif
                                                @if(session()->has('error'))
                                                    <div class="alert alert-danger">{{ session()->get('error') }}</div>
                                                @endif
                                                @foreach ($errors->all() as $error)
                                                    <p class="text-danger">{{ $error }}</p>
                                                @endforeach

                                                <div class="form-group row">
                                                    <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>

                                                    <div class="col-md-6">
                                                        <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>

                                                    <div class="col-md-6">
                                                        <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm Password</label>

                                                    <div class="col-md-6">
                                                        <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-0">
                                                    <div class="col-md-8 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            Update Password
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
@stop

@section('css')
@stop

@section('js')
@stop