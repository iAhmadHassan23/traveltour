@extends('adminlte::page')

@section('content')
@php
if (isset($row->id)){
$action = route('reviews.update', $row->id);
$galleryData = json_decode($row['media'],true);
$gallery = [];

if (!empty($galleryData['full_image'])) {
foreach ($galleryData['full_image'] as $index => $img) {
$gallery[] = [
'image_alt' => $galleryData['image_alt'][$index] ?? '',
'full_image' => $img,
];
}
}
}else{
$action = route('reviews.store');
}
@endphp

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Review Post</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Review</li>
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
            {{-- <a href="{{route('tour.index')}}" class="btn btn-primary mb-2">Back</a>--}}
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-primary card-outline">
                        {{-- <div class="card-header">--}}
                        {{-- <h5 class="m-0">Add Blog</h5>--}}
                        {{-- </div>--}}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Person Name</label>
                                        <input type="text" name="title" class="form-control"
                                            value="{{ $row->title ?? old('title') }}"
                                            placeholder="Enter Blog Post Name...">
                                        @error('title')
                                        <div class="error text-danger">{{ $errors->first('title') }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" id="description" class="form-control"
                                            cols="30" rows="6"
                                            placeholder="Enter meta description">{{ $row->description ?? old('description')}}</textarea>
                                        @error('description')
                                        <div
                                            class="error text-danger">{{ $errors->first('description') }}</div>
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
                            <div class="row" id="gallery-container">
                                @if(!empty($gallery))
                                @foreach($gallery as $index => $image)
                                <div class="col-sm-12 image_section mb-3">
                                    <label for="about_section_image">Image</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button type="button" class="btn btn-primary gallery_model_btn"
                                                data-id="{{ $index }}" data-toggle="modal" data-target=".gallery_images">
                                                Choose image
                                            </button>
                                        </div>
                                        <input type="text" name="gallery[image_alt][]" class="form-control" placeholder="Image alt"
                                            value="{{ $image['image_alt'] ?? '' }}">
                                        <input type="hidden" name="gallery[full_image][]" class="form-control full_image"
                                            value="{{ $image['full_image'] ?? '' }}">
                                        <!-- <div class="input-group-append">
                                            <button type="button" class="btn btn-danger remove-image-section">Remove</button>
                                        </div> -->
                                    </div>
                                    <div class="image-preview mt-2">
                                        @if(!empty($image['full_image']))
                                        <img src="{{ asset('media/' . $image['full_image']) }}" width="150" class="img-thumbnail" alt="">
                                        @endif
                                    </div>

                                </div>
                                @endforeach
                                @else
                                <div class="col-sm-12 image_section mb-3">
                                    <label for="about_section_image">Image</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button type="button" class="btn btn-primary gallery_model_btn"
                                                data-id="0" data-toggle="modal" data-target=".gallery_images">
                                                Choose image
                                            </button>
                                        </div>
                                        <input type="text" name="gallery[image_alt][]" class="form-control" placeholder="Image alt">
                                        <input type="hidden" name="gallery[full_image][]" class="form-control full_image">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-danger remove-image-section">Remove</button>
                                        </div>
                                    </div>
                                    <div class="image-preview mt-2"></div>
                                </div>
                                @endif
                            </div>
                            <!-- Add Button -->

                            <button type="sumbit" class="btn btn-primary btn-user btn-block mt-4">
                                Save
                            </button>
                        </div>


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



<script>
    let imageIndex = {
        {
            !empty($gallery) ? count($gallery) : 1
        }
    };

    $('#add-more-gallery').on('click', function() {
        const newImageBlock = `
            <div class="col-sm-12 image_section mb-3">
                <label for="about_section_image">Image</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-primary gallery_model_btn"
                                data-id="${imageIndex}" data-toggle="modal" data-target=".gallery_images">
                            Choose image
                        </button>
                    </div>
                    <input type="text" name="gallery[image_alt][]" class="form-control" placeholder="Image alt">
                    <input type="hidden" name="gallery[full_image][]" class="form-control full_image">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-danger remove-image-section">Remove</button>
                    </div>
                </div>
                <div class="image-preview mt-2"></div>
            </div>
        `;
        $('#gallery-container').append(newImageBlock);
        imageIndex++;
    });

    // Remove image section
    $(document).on('click', '.remove-image-section', function() {
        $(this).closest('.image_section').remove();
    });
</script>


@endsection