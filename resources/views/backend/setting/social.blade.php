@extends('adminlte::page')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Contact details</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Contact Details</li>
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
                            <h5 class="m-0">Contact Details</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('settings.store', 'social') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8">


                                        <h2>Social media</h2>
                                        <div class="form-group">
                                            <label for="title">Facebook</label>
                                            <input type="text" class="form-control @error('social.facebook') is-invalid @enderror"
                                                   id="title"
                                                   value="{{ isset($setting['facebook']) ? $setting['facebook'] : old('social.facebook') }}"
                                                   name="settings[facebook]" placeholder="Facebook">
                                            @error('social.facebook')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Instagram</label>
                                            <input type="text" class="form-control @error('social.instagram') is-invalid @enderror"
                                                   id="title"
                                                   value="{{ isset($setting['instagram']) ? $setting['instagram'] : old('social.instagram') }}"
                                                   name="settings[instagram]" placeholder="Instagram">
                                            @error('social.instagram')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Linkedin</label>
                                            <input type="text" class="form-control @error('social.linkedin') is-invalid @enderror"
                                                   id="title"
                                                   value="{{ isset($setting['linkedin']) ? $setting['linkedin'] : old('social.linkedin') }}"
                                                   name="settings[linkedin]" placeholder="linkedin">
                                            @error('social.linkedin')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Pinterest</label>
                                            <input type="text" class="form-control @error('social.pinterest') is-invalid @enderror"
                                                   id="title"
                                                   value="{{ isset($setting['pinterest']) ? $setting['pinterest'] : old('social.pinterest') }}"
                                                   name="settings[pinterest]" placeholder="pinterest">
                                            @error('social.pinterest')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="twitter">Twitter</label>
                                            <input type="text" class="form-control @error('social.twitter') is-invalid @enderror"
                                                   id="title"
                                                   value="{{ isset($setting['twitter']) ? $setting['twitter'] : old('social.twitter') }}"
                                                   name="settings[twitter]" placeholder="twitter">
                                            @error('social.twitter')
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

@endsection
@section('js')
@stop
