@extends('adminlte::page')

@section('content')
    @php
        if (isset($row->id)){
            $action = route('tour-category.update', $row->id);
        }else{
            $action = route('tour-category.store');
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
                        <li class="breadcrumb-item active">Tour Category</li>
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
            <a href="{{route('tour-category.index')}}" class="btn btn-primary mb-2">Back</a>
            <div class="row">
                <div class="col-lg-12">

                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Add Tour Category</h5>
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
                                            <input type="text" name="title" class="form-control" value="{{ $row->title ?? old('title') }}" placeholder="Enter Category Name..." >
                                            @error('title')
                                            <div class="error text-danger">{{ $errors->first('title') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Slug</label>
                                            <input type="text" name="slug" value="{{ $row->slug ?? old('slug')}}" class="form-control" placeholder="Enter Category slug..." >
                                            @error('slug')
                                            <div class="error text-danger">{{ $errors->first('slug') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Meta Title</label>
                                            <input class="form-control" name="meta_title" value="{{ $row->meta_title ?? old('meta_title')}}" type="text" placeholder="Enter meta title">
                                            @error('meta_title')
                                            <div class="error text-danger">{{ $errors->first('meta_title') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Meta Description</label>
                                            <textarea name="meta_description" id="meta_description" class="form-control" cols="30" rows="10" placeholder="Enter meta description">{{ $row->meta_description ?? old('meta_description')}}</textarea>
                                            @error('meta_description')
                                            <div class="error text-danger">{{ $errors->first('meta_description') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <fieldset class="form-group row">
                                    <legend class="col-form-legend col-sm-2">Index Status</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input radio-inline" type="radio" name="index_status" value="1" {{ isset($row) ? $row->index_status == 1 ? 'checked' : '' : '' }}>
                                                Index</label>
                                            <label class="form-check-label ml-4">
                                                <input class="form-check-input radio-inline" type="radio" name="index_status" value="0" {{ isset($row) ? $row->index_status == 0 ? 'checked' : '' : '' }} >
                                                No Index</label>
                                        </div>

                                </fieldset>

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
