@extends('adminlte::page')

@section('title', 'Signatures')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Signature</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Signature</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@stop
@php
    if (isset($row->id)){
        $action = route('signatures.update', $row->id);
    }else{
        $action = route('signatures.store');
    }

@endphp

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- /.col-md-6 -->
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">General Form</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{ $action  }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @isset($row->id)
                                            @method('put')
                                        @endisset
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control  @error('name') is-invalid @enderror"
                                                           id="name" aria-describedby="name" name="name"
                                                           placeholder="name"
                                                           value="{{ isset($row->name) ? $row->name : old('name') }}"
                                                           autocomplete="name"
                                                           autofocus>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="phone">Phone</label>
                                                    <input type="text" class="form-control  @error('phone') is-invalid @enderror"
                                                           id="phone" aria-describedby="phone" name="content[phone]"
                                                           placeholder="Phone"
                                                           value="{{ isset($row->content->phone) ? $row->content->phone : old('phone') }}"
                                                           autocomplete="phone"
                                                           autofocus>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                                           id="email" aria-describedby="email" name="content[email]"
                                                           placeholder="email"
                                                           value="{{ isset($row->content->email) ? $row->content->email : old('email') }}"
                                                           autocomplete="email"
                                                           autofocus>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <input type="text" class="form-control  @error('address') is-invalid @enderror"
                                                           id="address" aria-describedby="address" name="content[address]"
                                                           placeholder="address"
                                                           value="{{ isset($row->content->address) ? $row->content->address : old('address') }}"
                                                           autocomplete="address"
                                                           autofocus>
                                                    @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="image">Image</label>
                                                    <input type="file" name="image"
                                                           class="form-control @error('image') is-invalid @enderror">
                                                    @error('image')
                                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="form-group">
                                                    <label for="facebook">Facebook</label>
                                                    <input type="text" class="form-control  @error('facebook') is-invalid @enderror"
                                                           id="facebook" aria-describedby="facebook" name="content[facebook]"
                                                           placeholder="facebook"
                                                           value="{{ isset($row->content->facebook) ? $row->content->facebook : old('facebook') }}"
                                                    >
                                                    @error('facebook')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="instagram">Instagram</label>
                                                    <input type="text" class="form-control  @error('instagram') is-invalid @enderror"
                                                           id="instagram" aria-describedby="instagram" name="content[instagram]"
                                                           placeholder="instagram"
                                                           value="{{ isset($row->content->instagram) ? $row->content->instagram : old('instagram') }}"
                                                    >
                                                    @error('instagram')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="linkedin">Linkedin</label>
                                                    <input type="text" class="form-control  @error('linkedin') is-invalid @enderror"
                                                           id="linkedin" aria-describedby="linkedin" name="content[linkedin]"
                                                           placeholder="linkedin"
                                                           value="{{ isset($row->content->linkedin) ? $row->content->linkedin : old('linkedin') }}"
                                                           autocomplete="linkedin"
                                                           autofocus>
                                                    @error('linkedin')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="twitter">Twitter</label>
                                                    <input type="text" class="form-control  @error('twitter') is-invalid @enderror"
                                                           id="twitter" aria-describedby="twitter" name="content[twitter]"
                                                           placeholder="twitter"
                                                           value="{{ isset($row->content->twitter) ? $row->content->twitter : old('twitter') }}"
                                                           autocomplete="twitter"
                                                           autofocus>
                                                    @error('twitter')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
@stop

@section('css')
    <link rel="stylesheet" href="/vendor/summernote/summernote-bs5.min.css">
    <link rel="stylesheet" href="/vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="/vendor/summernote/summernote-bs5.min.js"></script>
    <script src="/vendor/select2/js/select2.full.min.js"></script>
    <script>
        $(function () {
            // Summernote
            $('#summernote').summernote({
                height:400
            })
            $('.select2').select2()
        })
    </script>
@stop