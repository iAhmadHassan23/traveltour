@extends('adminlte::page')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Theme details</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Theme Details</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @include('backend.component.flash-messages')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Theme Details</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('settings.store', 'theme') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4 image_section mt-3">
                                        <label for="about_section_image">Header Logo</label>
                                        <div class="input-group-prepend">
                                            <button type="button" class="btn btn-primary text-nowrap gallery_model_btn"
                                                    data-id="0" data-toggle="modal" data-target=".gallery_images">Choose
                                                logo
                                            </button>
                                            <input type="text" name="settings[header_logo_alt]" class="form-control"
                                                   placeholder="Image alt"
                                                   value="{{ isset($setting['header_logo_alt']) ? $setting['header_logo_alt'] : '' }}">
                                            <input type="hidden" name="settings[header_logo]"
                                                   class="form-control full_image"
                                                   value="{{ $setting['header_logo'] ?? '' }}">
                                        </div>
                                        <div class="image-preview">
                                            @isset($setting['header_logo'])
                                                <img src="{{ '/media/'.$setting['header_logo'] }}"
                                                     class="img-thumbnail" alt="">
                                            @endisset
                                        </div>
                                    </div>
                                    <div class="col-md-2">&nbsp;</div>

                                    <div class="col-md-4 image_section mt-3">
                                        <label for="about_section_image">Footer logo</label>
                                        <div class="input-group-prepend">
                                            <button type="button" class="btn btn-primary text-nowrap gallery_model_btn"
                                                    data-id="1" data-toggle="modal" data-target=".gallery_images">Choose
                                                logo
                                            </button>
                                            <input type="text" name="settings[footer_logo_alt]" class="form-control"
                                                   placeholder="Image alt"
                                                   value="{{ isset($setting['footer_logo_alt']) ? $setting['footer_logo_alt'] : '' }}">
                                            <input type="hidden" name="settings[footer_logo]"
                                                   class="form-control full_image"
                                                   value="{{ $setting['footer_logo'] ?? '' }}">
                                        </div>
                                        <div class="image-preview">
                                            @isset($setting['footer_logo'])
                                                <img src="{{ '/media/'.$setting['footer_logo'] }}"
                                                     class="img-thumbnail" alt="">
                                            @endisset
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="footer_description">Footer description</label>
                                            <textarea name="settings[footer_description]" class="@error('settings.footer_description') is-invalid @enderror form-control" id="" cols="30" rows="10">{{ isset($setting['footer_description']) ? $setting['footer_description'] : old('settings.footer_description') }}</textarea>

                                            @error('settings.footer_description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="footer_description">Copyright</label>
                                             <input type="text" class="@error('settings.copyright') is-invalid @enderror form-control" name="settings[copyright]" value="{{ isset($setting['copyright']) ? $setting['copyright'] : old('settings.copyright') }}">
                                            @error('settings.copyright')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('backend.component.gallery')
@endsection
@section('css')
    <link rel="stylesheet" href="/css/custom.css">
@stop
@section('js')
    <script src="/js/gallery.js"></script>
@stop
