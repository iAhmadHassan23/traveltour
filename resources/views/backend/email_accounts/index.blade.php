@extends('adminlte::page')

@section('title', 'Email Accounts')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Email Accounts</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Email Accounts</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@stop



@section('content')

    <!-- Main content -->
    <div class="content">
        <div class="mb-5">
            <a href="{{route('email-accounts.create')}}" class="btn btn-primary">Add Email Account</a>
        </div>
        @if(Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error') }}
            </div>
        @endif
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Email Accounts</h5>
                        </div>

                        <div class="card-body">

                            <table id="example" class="display dataTable" style="width:100%" aria-describedby="example_info">
                                <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>host</th>
                                    <th>port</th>
                                    <th>encryption</th>
                                    <th>protocol</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead> 
                                <tbody>
                                @foreach($email_accounts as $key=> $email_account)
                                    <tr>
                                        <td>{{$email_account->email_account}}</td>
                                        <td>{{$email_account->host}}</td>
                                        <td>{{$email_account->port}}</td>
                                        <td>{{$email_account->encryption}}</td>
                                        <td>{{$email_account->protocol}}</td>
                                        <td>
                                            @if($email_account->status == 1)
                                                <span class="badge badge-success bdg-status" id="{{$email_account->id}}">Active</span>
                                            @else
                                                <span class="badge badge-danger bdg-status" id="{{$email_account->id}}">De-Active</span>
                                            @endif
                                        </td>
                                        <td>
                                               <a href="{{ route('email-accounts.edit',[$email_account->id]) }}"
                                                   class="btn btn-primary btn-sm  ">
                                                    <i class="fas fa-edit ml-1"></i>
                                                </a> 
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
        $('#example').DataTable();

        console.log('Hi!'); </script>
@stop


