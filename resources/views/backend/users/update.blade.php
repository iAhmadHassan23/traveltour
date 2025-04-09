@extends('adminlte::page')

@section('content')
    @php
        if (isset($row->id)){
            $action = route('users.update', $row->id);
        }else{
            $action = route('users.store');
        }
    @endphp

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">user</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    @if(session()->has('error-message'))
        <div class="alert alert-danger">
            {{ session()->get('error-message') }}
        </div>
    @endif



    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <a href="{{route('category.index')}}" class="btn btn-primary mb-2">Back</a>
            <div class="row">
                <div class="col-lg-12">

                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Add user</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{$action}}" method="post">
                                @csrf
                                @isset($row->id)
                                    @method('put')
                                @endisset
                                <div class="row">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" value="{{ $row->name ?? old('name') }}" placeholder="Enter user Name..." >
                                            @error('name')
                                            <div class="error text-danger">{{ $errors->first('name') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" value="{{ $row->email ?? old('email')}}" class="form-control" placeholder="Enter user email..." >
                                            @error('email')
                                            <div class="error text-danger">{{ $errors->first('email') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name="password" value="" type="password" placeholder="Enter password">
                                            @error('password')
                                            <div class="error text-danger">{{ $errors->first('password') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Password Confirmation</label>
                                            <input class="form-control" name="password_confirmation" value="" type="password_confirmation" placeholder="Enter Password Confirmation">
                                            @error('password_confirmation')
                                            <div class="error text-danger">{{ $errors->first('password_confirmation') }}</div>
                                            @enderror
                                        </div>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select name="role" id="role" class="form-control">
                                                <option value="">Select one</option>
                                                @forelse($roles as $role)
                                                    <option value="{{ $role->name }}" {{ isset($row->id) && isset($row->roles[0]->name) ? ( $row->roles[0]->name == $role->name ? 'selected' : null) : null }}>{{$role->name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                            @error('role')
                                            <div class="error text-danger">{{ $errors->first('role') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <button type="sumbit" class="btn btn-primary btn-user btn-block">
                                    Save
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
