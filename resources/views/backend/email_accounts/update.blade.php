@extends('adminlte::page')
@section('title', 'Add Product')
@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Update Email</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Update Email</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@stop
@php
    if (isset($row->id)){
        $action = route('email-accounts.update', $row->id);
    }else{
        $action = route('email-accounts.store');
    }

@endphp

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
                            @if(Session::has('error'))
                                <div class="alert alert-danger">{{ Session::get('error') }}</div>
                            @endif
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{ $action }}" method="post">
                                        @csrf
                                        @isset($row->id)
                                            @method('put')
                                        @endisset
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="email_account">Email Account (username)</label>
                                                    <input {{ isset($row->id) ? 'readonly' : null }} type="text" class="form-control  @error('email_account') is-invalid @enderror"
                                                           id="name" aria-describedby="email_account" name="email_account"
                                                           placeholder="Enter Email account" value="{{ isset($row->email_account) ? $row->email_account : old('email_account') }}" required autocomplete="email_account"
                                                           autofocus>
                                                    @error('email_account')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="password">password</label>
                                                    <input type="password" class="form-control    @error('password') is-invalid @enderror"
                                                           id="password" aria-describedby="password" name="password"
                                                           placeholder="****" value="{{ isset($row->password) ? $row->password : old('password') }}" required autocomplete="password"
                                                           autofocus>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="host">Host</label>
                                                    <input type="text" class="form-control   @error('host') is-invalid @enderror"
                                                           id="host" aria-describedby="host" name="host"
                                                           placeholder="Host name" value="{{ isset($row->host) ? $row->host : old('host') }}" required autocomplete="host"
                                                           autofocus>
                                                    @error('host')
                                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="port">port</label>
                                                    <input type="text" class="form-control  @error('port') is-invalid @enderror"
                                                           id="name" aria-describedby="port" name="port"
                                                           placeholder="Port" value="{{ isset($row->port) ? $row->port : old('port') }}" required autocomplete="port"
                                                           autofocus>
                                                    @error('port')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="encryption">encryption</label>
                                                    <select name="encryption" id="encryption" class="form-control @error('encryption') is-invalid @enderror">
                                                        <option value="ssl" {{ isset($row->encryption) ? ($row->encryption == 'ssl' ? 'selected' : null ) :null }}>ssl</option>
                                                        <option value="tls"  {{ isset($row->encryption) ? ($row->encryption == 'tls' ? 'selected' : null ) :null }}>tls</option>
                                                        <option value="starttls"  {{ isset($row->encryption) ? ($row->encryption == 'starttls' ? 'selected' : null ) :null }}>starttls</option>
                                                        <option value="notls"  {{ isset($row->encryption) ? ($row->encryption == 'notls' ? 'selected' : null ) :null }}>notls</option>
                                                        <option value="false"  {{ isset($row->encryption) ? ($row->encryption == 'false' ? 'selected' : null ) :null }}>false</option>
                                                    </select>
                                                    @error('encryption')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="validateCert">validateCert</label>
                                                    <select name="validateCert" id="validateCert" class="form-control @error('validateCert') is-invalid @enderror">
                                                        <option value="1" {{ isset($row->validateCert) ? ($row->validateCert == '1' ? 'selected' : null ) :null }}>true</option>
                                                        <option value="0" {{ isset($row->validateCert) ? ($row->validateCert == '0' ? 'selected' : null ) :null }}>false</option>
                                                    </select>
                                                    @error('validateCert')
                                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="protocol">protocol</label>
                                                    <select name="protocol" id="protocol" class="form-control @error('protocol') is-invalid @enderror">
                                                        <option value="imap" {{ isset($row->protocol) ? ($row->protocol == 'imap' ? 'selected' : null ) :null }}>imap</option>
                                                        <option value="pop3" {{ isset($row->protocol) ? ($row->protocol == 'pop3' ? 'selected' : null ) :null }}>pop3</option>
                                                        <option value="nntp" {{ isset($row->protocol) ? ($row->protocol == 'nntp' ? 'selected' : null ) :null }}>nntp</option>
                                                    </select>
                                                    @error('protocol')
                                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="status">status</label>
                                                    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                                        <option value="1" {{ isset($row->status) ? ($row->status == '1' ? 'selected' : null ) :null }}>Active</option>
                                                        <option value="0" {{ isset($row->status) ? ($row->status == '0' ? 'selected' : null ) :null }}>De-active</option>
                                                    </select>
                                                    @error('status')
                                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
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