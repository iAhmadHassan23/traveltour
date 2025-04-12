@extends('adminlte::page')

@section('content')
@php
if (isset($row->id)){
$action = route('itenaries.update', $row->id);
$image = json_decode($row['media'],true);
}else{
$action = route('itenaries.store');
}
@endphp

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Itenaries Post</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Itenaries</li>
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
                                        <label>Day Number</label>
                                        <input type="text" name="day_number" class="form-control"
                                            value="{{ $row->day_number ?? old('day_number') }}"
                                            placeholder="Enter Blog Post Name...">
                                        @error('day_number')
                                        <div class="error text-danger">{{ $errors->first('day_number') }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Itenary Title</label>
                                        <input type="text" name="title" value="{{ $row->title ?? old('title')}}"
                                            class="form-control" placeholder="Enter blog post title...">
                                        @error('title')
                                        <div class="error text-danger">{{ $errors->first('title') }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>






                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>short Description</label>
                                        <textarea name="short_description" id="short_description" class="form-control"
                                            cols="30" rows="6"
                                            placeholder="Enter short description">{{ $row->short_description ?? old('short_description')}}</textarea>
                                        @error('short_description')
                                        <div
                                            class="error text-danger">{{ $errors->first('short_description') }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label><input type="checkbox" class="exclusive-checkbox" name="exclusives[stay][enabled]" {{ isset($exclusiveStay) ? 'checked' : '' }}> Stay</label>
                                        <input type="text" name="exclusives[stay][heading]" class="form-control exclusive-heading" placeholder="Stay heading" value="{{ $exclusiveStay->heading ?? '' }}" style="{{ isset($exclusiveStay) ? '' : 'display:none' }}">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label><input type="checkbox" class="exclusive-checkbox" name="exclusives[meals][enabled]" {{ isset($exclusiveMeals) ? 'checked' : '' }}> Meals</label>
                                        <input type="text" name="exclusives[meals][heading]" class="form-control exclusive-heading" placeholder="Meals heading" value="{{ $exclusiveMeals->heading ?? '' }}" style="{{ isset($exclusiveMeals) ? '' : 'display:none' }}">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label><input type="checkbox" class="exclusive-checkbox" name="exclusives[transportation_by][enabled]" {{ isset($exclusiveTransport) ? 'checked' : '' }}> Transportation By</label>
                                        <input type="text" name="exclusives[transportation_by][heading]" class="form-control exclusive-heading" placeholder="Transportation heading" value="{{ $exclusiveTransport->heading ?? '' }}" style="{{ isset($exclusiveTransport) ? '' : 'display:none' }}">
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
                                        <label>Tour</label>
                                        <select type="text" name="tour_id" class="form-control">
                                            <option value="">select Tour</option>
                                            @foreach($tours as $tour)
                                            <option
                                                value="{{$tour->id}}" {{ isset($row) ? $row->tour_id == $tour->id ? 'selected' : '' : ''  }}>{{ $tour->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('tour_id')
                                        <div class="error text-danger">{{ $errors->first('tour_id') }}</div>
                                        @enderror
                                    </div>
                                </div>

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
<script>
    document.querySelectorAll('.exclusive-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            this.parentNode.nextElementSibling.style.display = this.checked ? 'block' : 'none';
        });
    });
</script>

@endsection