@extends('adminlte::page')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Gallery</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Gallery</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Gallery</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">

                                <div class="search">
                                    <form action="">
                                        <div class="input-group input-group-sm">
                                            <input type="text" name="q" class="form-control" id="search" placeholder="Search" autocomplete="off" value="{{ request('q') }}">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="gallery row pg-data" data-pagination-route="{{ route('gallery.index') }}">
                                @include('backend.component.gallery_images')

                                {{--                                @foreach($galleries as $gallery)--}}
                                {{--                                    <div class="col-md-3">--}}
                                {{--                                        <div class="img ">--}}
                                {{--                                            <img--}}
                                {{--                                                src="{{ asset('media/'.$gallery->image) }}"--}}
                                {{--                                                class="w-100 shadow-1-strong rounded img-thumbnail"--}}
                                {{--                                            />--}}
                                {{--                                            <a class="remove-image"--}}
                                {{--                                               href="{{ route('remove.gallery.image', $gallery->id) }}"--}}
                                {{--                                               style="display: inline;">&#215;</a>--}}
                                {{--                                            <form action="{{ route('gallery.image.replace', $gallery->id) }}"--}}
                                {{--                                                  method="post">--}}
                                {{--                                                <p for="" class="text-black pt-3 text-wrap">{{$gallery->name}}</p>--}}
                                {{--                                                <div class="input-group mb-2">--}}
                                {{--                                                    <input type="file" class="form-control" id="image" name="image">--}}
                                {{--                                                    <div class="input-group-prepend">--}}
                                {{--                                                        <button type="submit" class="btn btn-primary replace-image">--}}
                                {{--                                                            Replace--}}
                                {{--                                                        </button>--}}
                                {{--                                                    </div>--}}
                                {{--                                                </div>--}}
                                {{--                                            </form>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                @endforeach--}}

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
@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .remove-image {
            position: absolute;
            top: 0;
            right: 0;
            border-radius: 10em;
            padding: 2px 6px 3px;
            text-decoration: none;
            font: 700 21px/20px sans-serif;
            background: #555;
            border: 3px solid #fff;
            color: #FFF;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.5), inset 0 2px 4px rgba(0, 0, 0, 0.3);
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
            -webkit-transition: background 0.5s;
            transition: background 0.5s;
        }
    </style>
@stop
@section('js')
    <script src="/js/gallery.js"></script>
@endsection
