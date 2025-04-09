@extends('adminlte::page')

@section('content')
    @php
        if (isset($row->id)){
            $action = route('roles.update', $row->id);
        }else{
            $action = route('roles.store');
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
                        <li class="breadcrumb-item active">Role</li>
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
            <a href="{{route('roles.index')}}" class="btn btn-primary mb-2">Back</a>
            <div class="row">
                <div class="col-lg-12">

                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Add Role</h5>
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
                                            <input type="text" name="name" class="form-control" value="{{ $row->name ?? old('name') }}" placeholder="Enter Role Name..." >
                                            @error('name')
                                            <div class="error text-danger">{{ $errors->first('name') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    @foreach($permissions as $key  => $permission)
                                    <div class="col-md-3">
                                        <div class="form-group clearfix">

                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" {{ isset($row->id) ? str_replace('selected', 'checked', multipleSelect($row->permissions , $permission->id)) : null }} id="checkboxPrimary{{$key}}"  >
                                                <label for="checkboxPrimary{{$key}}">
                                                    {{ $permission->name }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

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
