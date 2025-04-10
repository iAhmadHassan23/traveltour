@extends('adminlte::page')

@section('content')
    @php
        if (isset($row->id)){
            $action = route('tour.update', $row->id);
            $image = json_decode($row['media'],true);
        }else{
            $action = route('tour.store');
        }
    @endphp

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tour Post</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Tour</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    @include('backend.component.flash-messages')



    <!-- Main content -->
    <div class="content">
        <form action="{{$action}}" method="post">
            @csrf
            @isset($row->id)
                @method('put')
            @endisset
            <div class="container-fluid">
                {{--            <a href="{{route('tour.index')}}" class="btn btn-primary mb-2">Back</a>--}}
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-primary card-outline">
                            {{--                        <div class="card-header">--}}
                            {{--                            <h5 class="m-0">Add Blog</h5>--}}
                            {{--                        </div>--}}
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Tour Name</label>
                                            <input type="text" name="title" class="form-control"
                                                   value="{{ $row->title ?? old('title') }}"
                                                   placeholder="Enter Blog Post Name...">
                                            @error('title')
                                            <div class="error text-danger">{{ $errors->first('title') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Slug</label>
                                            <input type="text" name="slug" value="{{ $row->slug ?? old('slug')}}"
                                                   class="form-control" placeholder="Enter blog post slug...">
                                            @error('slug')
                                            <div class="error text-danger">{{ $errors->first('slug') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Video</label>
                                            <input type="text" name="video_url"
                                                   value="{{ $row->video_url ?? old('video_url')}}"
                                                   class="form-control" placeholder="Enter video url...">
                                            @error('video_url')
                                            <div class="error text-danger">{{ $errors->first('video_url') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div> -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" name="price" class="form-control"
                                                   value="{{ $row->price ?? old('price') }}"
                                                   placeholder="Enter Tour Name...">
                                            @error('price')
                                            <div class="error text-danger">{{ $errors->first('price') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Discounted Price</label>
                                            <input type="text" name="discounted_price" value="{{ $row->discounted_price ?? old('discounted_price')}}"
                                                   class="form-control" placeholder="Enter discounted price...">
                                            @error('discounted_price')
                                            <div class="error text-danger">{{ $errors->first('discounted_price') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Number of days</label>
                                            <input type="text" name="number_of_days" class="form-control"
                                                   value="{{ $row->number_of_days ?? old('number_of_days') }}"
                                                   placeholder="Enter Number of Days...">
                                            @error('number_of_days')
                                            <div class="error text-danger">{{ $errors->first('number_of_days') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Number of nights</label>
                                            <input type="text" name="discounted_price" value="{{ $row->discounted_price ?? old('discounted_price')}}"
                                                   class="form-control" placeholder="Enter discounted_price...">
                                            @error('discounted_price')
                                            <div class="error text-danger">{{ $errors->first('discounted_price') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Short Description</label>
                                            <input class="form-control" name="short_description"
                                                   value="{{ $row->short_description ?? old('short_description')}}"
                                                   type="text"
                                                   placeholder="Enter meta title">
                                            @error('short_description')
                                            <div
                                                class="error text-danger">{{ $errors->first('short_description') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Blog Body</label>
                                            <textarea name="blog_body" id="blog" class="form-control summernote"
                                                      cols="30" rows="10"
                                                      placeholder="">{!! isset($row) ? $row->blog_body : old('blog_body') !!}
                                            </textarea>
                                            @error('blog_body')
                                            <div
                                                class="error text-danger">{{ $errors->first('blog_body') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
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
                                                      cols="30" rows="6"
                                                      placeholder="Enter meta description">{{ $row->meta_description ?? old('meta_description')}}</textarea>
                                            @error('meta_description')
                                            <div
                                                class="error text-danger">{{ $errors->first('meta_description') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Published At</label>
                                            <input type="dateTime-local" name="published_at" class="form-control"
                                                   value="{{ isset($row) ? $row->published_at  : '' }}">
                                            {{--                                        @error('published_at')--}}
                                            {{--                                        <div class="error text-danger">{{ $errors->first('published_at') }}</div>--}}
                                            {{--                                        @enderror--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select type="text" name="category_id" class="form-control">
                                                <option value="">select category</option>
                                                @foreach($categories as $category)
                                                    <option
                                                        value="{{$category->id}}" {{ isset($row) ? $row->category_id == $category->id ? 'selected' : '' : ''  }}>{{ $category->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                            <div class="error text-danger">{{ $errors->first('category_id') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Index Status</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="index_status"
                                                       id="index_status1"
                                                       value="1" {{ isset($row) ? $row->index_status == 1 ? 'checked' : '' : '' }}>
                                                <label class="form-check-label" for="index_status1">
                                                    Index
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="index_status"
                                                       id="index_status2"
                                                       value="0" {{ isset($row) ? $row->index_status == 0 ? 'checked' : '' : '' }}>
                                                <label class="form-check-label" for="index_status2">
                                                    No Index
                                                </label>
                                            </div>
                                            @error('index_status')
                                            <div
                                                class="error text-danger">{{ $errors->first('index_status') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status"
                                                       id="status0"
                                                       value="0" {{ isset($row) ? $row->status == 0 ? 'checked' : '' : '' }}>
                                                <label class="form-check-label" for="status0">
                                                    Draft
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status"
                                                       id="status1"
                                                       value="1" {{ isset($row) ? $row->status == 1 ? 'checked' : '' : '' }}>
                                                <label class="form-check-label" for="status1">
                                                    Published
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status"
                                                       id="status2"
                                                       value="2" {{ isset($row) ? $row->status == 2 ? 'checked' : '' : '' }}>
                                                <label class="form-check-label" for="status2">
                                                    Waiting
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status"
                                                       id="status3"
                                                       value="3" {{ isset($row) ? $row->status == 3 ? 'checked' : '' : '' }}>
                                                <label class="form-check-label" for="status3">
                                                    Review
                                                </label>
                                            </div>
                                            @error('status')
                                            <div class="error text-danger">{{ $errors->first('status') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 image_section">
                                        <label for="about_section_image">Image</label>
                                        <div class="input-group-prepend">
                                            <button type="button" class="btn btn-primary text-nowrap gallery_model_btn"
                                                    data-id="0" data-toggle="modal" data-target=".gallery_images">Choose
                                                image
                                            </button>
                                            <input type="text" name="gallery[image_alt]" class="form-control"
                                                   placeholder="Image alt" value="{{ isset($image) ? $image['image_alt'] : '' }}">
                                            <input type="hidden" name="gallery[full_image]"
                                                   class="form-control full_image" value="{{ isset($image['full_image']) ? $image['full_image'] : null }}">
                                        </div>
                                        <div class="image-preview">
                                            @isset($image)
                                                <img src="{{ '/media/'.$image['full_image'] }}" width="150" class="img-thumbnail" alt="">
                                            @endisset
                                        </div>
                                    </div>
                                </div>

                                <button type="sumbit" class="btn btn-primary btn-user btn-block mt-4">
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
    <!-- /.content -->
    @include('backend.component.gallery')
@endsection

@section('css')
    <link rel="stylesheet" href="/vendor/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="/css/custom.css">

@stop
@section('js')
    <script src="/js/gallery.js"></script>
    <script src="/vendor/summernote/summernote-bs4.min.js"></script>
    <script>

        $('.summernote').summernote({
            height: 200,
        })
    </script>

@endsection
