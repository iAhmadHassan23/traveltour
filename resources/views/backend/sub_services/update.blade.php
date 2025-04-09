@extends('adminlte::page')

@section('content')
    @php
        if (isset($row->id)){
            $action = route('sub_services.update', $row->id);
        }else{
            $action = route('sub_services.store');
        }
    @endphp

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $row->page ?? 'sub services'  }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">{{ $row->page ?? 'sub services' }}</li>
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
                            <h5 class="m-0">Add/Update sub services</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ $action }}" method="post">
                                @csrf
                                @isset($row->id)
                                    @method('put')
                                @endisset

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Select Service</label>
                                            <select name="parent_id" id="parent_id" class="form-control" required>
                                                <option value="">Select parent_id</option>
                                                @forelse($services as $key => $service)
                                                    <option value="{{ $service->id }}" {{ isset($row->parent_id) ? (($row->parent_id == $service->id) ? 'selected' : null) : null }}>{{ $service->name }}</option>
                                                    @empty
                                                @endforelse
                                            </select>
                                            @error('name')
                                            <div class="error text-danger">{{ $errors->first('page') }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Service Name</label>
                                            <input type="text" name="name" id="title" class="form-control" value="{{ isset($row->name) ? $row->name : old('name') }}" placeholder="Service Name" >
                                            @error('name')
                                            <div class="error text-danger">{{ $errors->first('page') }}</div>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Service Slug</label>
                                            <input type="text" name="sub_slug" id="{{ isset($row->id) ? 'slug1' : 'slug' }}" class="form-control" value="{{ isset($row->sub_slug) ? $row->sub_slug : old('sub_slug') }}" placeholder="Service slug" >
                                            @error('sub_slug')
                                            <div class="error text-danger">{{ $errors->first('sub_slug') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Short Description</label>
                                                <textarea name="content[short_description]" id="content.short_description" class="form-control"
                                                          cols="10" rows="5"
                                                          placeholder="Enter short description">{{ $row->content['short_description'] ?? old('content.short_description')}}</textarea>
                                                @error('content.short_description')
                                                <div
                                                    class="error text-danger">{{ $errors->first('content.short_description') }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                    <div class="col-md-4 image_section mt-3">
                                        <label for="about_section_image">Image</label>
                                        <div class="input-group-prepend">
                                            <button type="button" class="btn btn-primary text-nowrap gallery_model_btn"
                                                    data-id="1" data-toggle="modal" data-target=".gallery_images">Choose
                                                image
                                            </button>
                                            <input type="text" name="content[image_alt]" class="form-control"
                                                   placeholder="Image alt"
                                                   value="{{ isset($row->content['image_alt']) ? $row->content['image_alt'] : '' }}">
                                            <input type="hidden" name="content[full_image]"
                                                   class="form-control full_image"
                                                   value="{{ $row->content['full_image'] ?? '' }}">
                                        </div>
                                        <div class="image-preview">
                                            @isset($row->content['full_image'])
                                                <img src="{{ '/media/'.$row->content['full_image'] }}"
                                                     class="img-thumbnail" alt="">
                                            @endisset
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <h3>SEO</h3>
                                <div class="row">
                                    <div class="col-md-12 mt-4 image_section">
                                        <label for="about_section_image">Meta Image</label>
                                        <div class="input-group-prepend">
                                            <button type="button" class="btn btn-primary text-nowrap gallery_model_btn"
                                                    data-id="0" data-toggle="modal" data-target=".gallery_images">Choose
                                                image
                                            </button>
                                            {{-- <input type="text" name="meta_image" class="form-control"--}}
                                            {{-- placeholder="icon Image alt"--}}
                                            {{-- value="{{ isset($row->meta_image) ? $row->meta_image : '' }}">--}}
                                            <input type="hidden" name="meta_image"
                                                   class="form-control full_image" value="{{ $row->meta_image ?? old('meta_image')}}" placeholder="Meta Image">
                                        </div>
                                        <div class="image-preview mt-2">
                                            @isset($row->meta_image)
                                                <img src="{{ '/media/'.$row->meta_image }}" width="150"
                                                     class="img-thumbnail" alt="">
                                            @endisset
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Meta Title</label>
                                            <input class="form-control" name="meta_title"
                                                   value="{{ $row->meta_title ?? old('meta_title')}}" type="text"
                                                   placeholder="Enter meta title">
                                            @error('meta_title')
                                            <div class="error text-danger">{{ $errors->first('meta_title') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Meta Description</label>
                                            <textarea name="meta_description" id="meta_description" class="form-control"
                                                      cols="10" rows="5"
                                                      placeholder="Enter meta description">{{ $row->meta_description ?? old('meta_description')}}</textarea>
                                            @error('meta_description')
                                            <div
                                                class="error text-danger">{{ $errors->first('meta_description') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Index Status</label>
                                            <select class="form-control" name="index_status">
                                                <option value="1" {{ isset($row->index_status) ? ($row->index_status == 1 ? 'selected' : '') : null }}>Index</option>
                                                <option value="0" {{ isset($row->index_status) ? ($row->index_status == 0 ? 'selected' : '') : null }} >No Index</option>
                                            </select>
                                            @error('index_status')
                                            <div class="error text-danger">{{ $errors->first('index_status') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option value="1" {{ isset($row->status) ? ($row->status == 1 ? 'selected' : '') : null }} >Publish</option>
                                                <option value="0" {{ isset($row->status) ? ($row->status == 0 ? 'selected' : '') : null }} >Un Publish</option>
                                            </select>
                                            @error('index_status')
                                            <div class="error text-danger">{{ $errors->first('index_status') }}</div>
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
    @include('backend.component.gallery')
@endsection
@section('css')
    <link rel="stylesheet" href="/css/custom.css">
@stop
@section('js')
    <script src="/js/gallery.js"></script>
    <script src="/js/form.js"></script>
@endsection

