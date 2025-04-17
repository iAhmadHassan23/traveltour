@extends('adminlte::page')

@section('content')
@php
if (isset($row->id)){
$action = route('tour.update', $row->id);
$galleryData = json_decode($row['media'], true);
$gallery = [];

if (!empty($galleryData) && is_array($galleryData)) {
foreach ($galleryData as $image) {
$gallery[] = [
'image_alt' => $image['image_alt'] ?? '',
'full_image' => $image['full_image'] ?? '',
'featured' => $image['featured'] ?? false,
];
}

}
}else{
$action = route('tour.store');
}
@endphp

@php
    $initialImageIndex = !empty($gallery) ? count($gallery) : 1;
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
                                        <input type="text" name="number_of_nights" value="{{ $row->number_of_nights ?? old('number_of_nights')}}"
                                            class="form-control" placeholder="Enter number_of_nights...">
                                        @error('number_of_nights')
                                        <div class="error text-danger">{{ $errors->first('number_of_nights') }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Pickup</label>
                                        <input type="text" name="pickup" class="form-control"
                                            value="{{ $row->pickup ?? old('pickup') }}"
                                            placeholder="Enter Number of Days...">
                                        @error('pickup')
                                        <div class="error text-danger">{{ $errors->first('pickup') }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Drop</label>
                                        <input type="text" name="drop" value="{{ $row->drop ?? old('drop')}}"
                                            class="form-control" placeholder="Enter drop...">
                                        @error('drop')
                                        <div class="error text-danger">{{ $errors->first('drop') }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" name="country" class="form-control"
                                            value="{{ $row->country ?? old('country') }}"
                                            placeholder="Enter Country...">
                                        @error('country')
                                        <div class="error text-danger">{{ $errors->first('country') }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" name="city" value="{{ $row->city ?? old('city')}}"
                                            class="form-control" placeholder="Enter City...">
                                        @error('city')
                                        <div class="error text-danger">{{ $errors->first('city') }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label for="">Transportation</label>
                                        <input class="form-group" type="checkbox" name="transportation"
                                            id="transportation1"
                                            value="1" {{ isset($row) ? $row->transportation == 1 ? 'checked' : '' : '' }}>

                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label for="">Meals</label>
                                        <input class="form-group" type="checkbox" name="meals"
                                            id="meals1"
                                            value="1" {{ isset($row) ? $row->meals == 1 ? 'checked' : '' : '' }}>

                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label for="">Stay Included</label>
                                        <input class="form-group" type="checkbox" name="stay_included"
                                            id="stay_included1"
                                            value="1" {{ isset($row) ? $row->stay_included == 1 ? 'checked' : '' : '' }}>

                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label for="">Sight Seeing</label>
                                        <input class="form-group" type="checkbox" name="sight_seeing"
                                            id="sight_seeing1"
                                            value="1" {{ isset($row) ? $row->sight_seeing == 1 ? 'checked' : '' : '' }}>

                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label for="">24 * 7 assistance</label>
                                        <input class="form-group" type="checkbox" name="assistance"
                                            id="assistance1"
                                            value="1" {{ isset($row) ? $row->assistance == 1 ? 'checked' : '' : '' }}>

                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Itenary Overview</label>
                                        <textarea name="itenary_overview" id="itenary_overview" class="form-control summernote"
                                            cols="30" rows="10"
                                            placeholder="">{!! isset($row) ? $row->itenary_overview : old('itenary_overview') !!}
                                            </textarea>
                                        @error('itenary_overview')
                                        <div
                                            class="error text-danger">{{ $errors->first('itenary_overview') }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Other Info</label>
                                        <textarea name="other_info" id="other_info" class="form-control summernote"
                                            cols="30" rows="10"
                                            placeholder="">{!! isset($row) ? $row->other_info : old('other_info') !!}
                                            </textarea>
                                        @error('other_info')
                                        <div
                                            class="error text-danger">{{ $errors->first('other_info') }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Inclusions</label>
                                        <textarea name="inclusives" id="inclusives" class="form-control"
                                            cols="30" rows="6"
                                            placeholder="Enter Inclusives">{{ $row->inclusives ?? old('inclusives')}}</textarea>
                                        @error('inclusives')
                                        <div
                                            class="error text-danger">{{ $errors->first('inclusives') }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Exclusions</label>
                                        <textarea name="exclusives" id="exclusives" class="form-control"
                                            cols="30" rows="6"
                                            placeholder="Enter Exclusives">{{ $row->exclusives ?? old('exclusives')}}</textarea>
                                        @error('exclusives')
                                        <div
                                            class="error text-danger">{{ $errors->first('exclusives') }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Highlights</label>

                                        <div id="highlight-container">
                                            @if(isset($row->highlights) && $row->highlights->count())
                                            @foreach($row->highlights as $highlight)
                                            <div class="input-group mb-2">
                                                <input type="text" name="highlights[]" class="form-control" value="{{ $highlight->title }}" placeholder="Enter highlight...">
                                                <button type="button" class="btn btn-danger" onclick="removeHighlight(this)">Remove</button>
                                            </div>
                                            @endforeach
                                            @else
                                            <div class="input-group mb-2">
                                                <input type="text" name="highlights[]" class="form-control" placeholder="Enter highlight...">
                                                <button type="button" class="btn btn-danger" onclick="removeHighlight(this)">Remove</button>
                                            </div>
                                            @endif
                                        </div>

                                        @error('highlights')
                                        <div class="error text-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="text-end">
                                            <button type="button" class="btn btn-primary" onclick="addHighlight()">Add more</button>
                                        </div>
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
                                        {{-- @error('published_at')--}}
                                        {{-- <div class="error text-danger">{{ $errors->first('published_at') }}
                                    </div>--}}
                                    {{-- @enderror--}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Tour Category</label>
                                    <select type="text" name="tour_category_id[]" class="form-control" multiple>
                                        <option value="">select Tour category</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}"
                                            @if(isset($row) && $row->tour_categories->contains($category->id))
                                            selected
                                            @endif>
                                            {{ $category->title }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('tour_category_id')
                                    <div class="error text-danger">{{ $errors->first('tour_category_id') }}</div>
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
                        <div class="row" id="gallery-container">
                            @if(!empty($gallery))
                            @foreach($gallery as $index => $image)
                            <div class="col-sm-12 image_section mb-3">
                                <label>Image</label>
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
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-danger remove-image-section">Remove</button>
                                    </div>
                                </div>

                                <div class="form-check mt-2">
                                    <input type="radio" name="gallery[featured]" value="{{ $index }}" class="form-check-input"
                                        {{ !empty($image['featured']) ? 'checked' : '' }}>
                                    <label class="form-check-label">Set as Featured</label>
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
                                <label>Image</label>
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
                                <div class="form-check mt-2">
                                    <input type="radio" name="gallery[featured]" value="0" class="form-check-input">
                                    <label class="form-check-label">Set as Featured</label>
                                </div>
                                <div class="image-preview mt-2"></div>
                            </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <button type="button" class="btn btn-success" id="add-more-gallery">Add More Image</button>
                        </div>

                        <!-- <div class="text-end">
                            <button type="button" class="btn btn-success mt-2" onclick="addGalleryImage()">Add More</button>
                        </div> -->

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

<script>
    function addHighlight() {
        const container = document.getElementById('highlight-container');
        const inputGroup = document.createElement('div');
        inputGroup.classList.add('input-group', 'mb-2');

        inputGroup.innerHTML = `
            <input type="text" name="highlights[]" class="form-control" placeholder="Enter highlight...">
            <button type="button" class="btn btn-danger" onclick="removeHighlight(this)">Remove</button>
        `;

        container.appendChild(inputGroup);
    }

    function removeHighlight(button) {
        button.parentElement.remove();
    }
</script>



<script>
    let imageIndex = {{ $initialImageIndex }};

    $('#add-more-gallery').on('click', function () {
        const newImageBlock = `
        <div class="col-sm-12 image_section mb-3">
            <label>Image</label>
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

            <div class="form-check mt-2">
                <input type="radio" name="gallery[featured]" value="${imageIndex}" class="form-check-input">
                <label class="form-check-label">Set as Featured</label>
            </div>

            <div class="image-preview mt-2"></div>
        </div>
        `;

        $('#gallery-container').append(newImageBlock);
        imageIndex++;
    });

    $(document).on('click', '.remove-image-section', function () {
        $(this).closest('.image_section').remove();
    });
</script>

@endsection