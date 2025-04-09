@extends('adminlte::page')

@section('content')
            <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add section</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Add section</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    @include('backend.component.flash-messages')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Add Section</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('section.create.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 mt-4 image_section">
                                        <div class="form-group">
                                            <label for="section name">Section name</label>
                                            <input type="text" class="form-control" name="section_name">
                                        </div>
                                        <div class="form-group">
                                            <input type="file" class="form-control" id="image" name="image">
                                        </div>


                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Backend Section content</label>
                                            <textarea name="backend_section_content" id="backend_section_content" class="form-control"
                                                      cols="10" rows="10"
                                                      placeholder="Backend content">{{ old('backend_section_content')}}</textarea>
                                            @error('backend_section_content')
                                            <div
                                                    class="error text-danger">{{ $errors->first('backend_section_content') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Frontend section content</label>
                                            <textarea name="frontend_section_content" id="frontend_section_content" class="form-control"
                                                      cols="10" rows="10"
                                                      placeholder="Frontend content">{{ old('frontend_section_content')}}</textarea>
                                            @error('frontend_section_content')
                                            <div
                                                    class="error text-danger">{{ $errors->first('frontend_section_content') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Css</label>
                                            <textarea name="section_css" id="section_css" class="form-control"
                                                      cols="10" rows="10"
                                                      placeholder="Section css">{{ old('section_css')}}</textarea>
                                            @error('section_css')
                                            <div
                                                    class="error text-danger">{{ $errors->first('section_css') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
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
@section('css')
@stop
@section('js')

@endsection

