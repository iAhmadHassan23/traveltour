@extends('adminlte::page')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
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
        <div class="row">
        <div class="col-md-7">
        <form action="{{ route('profile.update') }}" method="post">
            @csrf
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" name="name" class="form-control"
                                                   value="{{ auth()->user()->name ?? old('name') }}"
                                                   placeholder="Enter First Name...">
                                            @error('name')
                                            <div class="error text-danger">{{ $errors->first('title') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" name="last_name" value="{{ auth()->user()->last_name ?? old('last_name')}}"
                                                   class="form-control" placeholder="Enter Last Name...">
                                            @error('last_name')
                                            <div class="error text-danger">{{ $errors->first('last_name') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control"
                                                   value="{{ auth()->user()->email }}"
                                                   placeholder="Enter Your Email..." disabled>
                                            @error('email')
                                            <div class="error text-danger">{{ $errors->first('email') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" name="phone_number" value="{{ auth()->user()->phone_number ?? old('phone_number')}}"
                                                   class="form-control" placeholder="Enter Phone Number..." >
                                            @error('phone_number')
                                            <div class="error text-danger">{{ $errors->first('phone_number') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input type="text" name="country" class="form-control"
                                                   value=""
                                                   placeholder="Enter Country..." >
                                            @error('country')
                                            <div class="error text-danger">{{ $errors->first('country') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" name="city" value=""
                                                   class="form-control" placeholder="Confirm City...">
                                            @error('city')
                                            <div class="error text-danger">{{ $errors->first('city') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->

        </form>
        </div>
        <div class="col-md-5">
        <form action="{{ route('update.password') }}" method="post">
            @csrf
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="password" name="old_password" class="form-control"
                                                   value="{{old('old_password')}}"
                                                   placeholder="Enter Old Password..." >
                                            @error('old_password')
                                            <div class="error text-danger">{{ $errors->first('old_password') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" name="new_password" value="{{old('new_password')}}"
                                                   class="form-control" placeholder="Enter New Password...">
                                            @error('new_password')
                                            <div class="error text-danger">{{ $errors->first('new_password') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" name="confirm_password" value="{{old('confirm_password')}}"
                                                   class="form-control" placeholder="Confirm Password...">
                                            @error('confirm_password')
                                            <div class="error text-danger">{{ $errors->first('confirm_password') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->

        </form>
        </div>
        </div>
    </div>
    <!-- /.content -->
@endsection

@section('css')

@stop
@section('js')

@endsection
