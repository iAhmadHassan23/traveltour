@extends('adminlte::page')

@section('content')
    @php
        if (isset($row->id)){
            $action = route('page.update', $row->id);
        }else{
            $action = route('page.store');
        }
    @endphp

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $row->page ?? 'New page'  }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">{{ $row->page ?? 'New page' }}</li>
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
                            <h5 class="m-0">Add/Update {{ $row->page  ?? 'New page'  }}</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ $action }}" method="post">
                                @csrf
                                @isset($row->id)
                                    @method('put')
                                @else
                                    <input type="hidden" name="type" value="{{ (request('type') == 'page' || is_null(request('type'))) ? 'page' : 'service' }}">
                                @endisset
                                <div class="row">
                                    @if(!isset($row->id))
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>{{ ucfirst(request('type') ?? 'page') }} Name</label>
                                            <input type="text" name="name" id="title" class="form-control" value="{{ isset($row->name) ? $row->name : old('name') }}" placeholder="{{ ucfirst(request('type') ?? 'page') }} Name" >
                                            @error('name')
                                            <div class="error text-danger">{{ $errors->first('page') }}</div>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>{{ ucfirst(request('type') ?? 'page') }} Slug</label>
                                            <input type="text" name="slug" id="slug" class="form-control" value="{{ isset($row->slug) ? $row->slug : old('slug') }}" placeholder="{{ ucfirst(request('type') ?? 'page') }} Slug" >
                                            @error('slug')
                                            <div class="error text-danger">{{ $errors->first('slug') }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    @endisset
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

