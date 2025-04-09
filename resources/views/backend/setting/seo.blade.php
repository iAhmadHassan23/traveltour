@extends('adminlte::page')
@section('title', 'SEO Setting')
@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">SEO</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">SEO</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@stop
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
                                    <form action="{{ route('settings.store', 'seo') }}" method="post" >
                                        @csrf
                                        <div class="form-group">
                                            <label for="meta">Extra meta tags</label>
                                            <textarea name="settings[meta]" class="form-control" id="" cols="30" rows="10" placeholder="Extra meta tags">{{ $setting['meta'] ?? '' }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="head_scripts">Scripts in head tag</label>
                                            <textarea name="settings[head_scripts]" class="form-control" id="" cols="30" rows="10" placeholder="">{{ $setting['head_scripts'] ?? '' }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="footer_scripts">Scripts in footer</label>
                                            <textarea name="settings[footer_scripts]" class="form-control" id="" cols="30" rows="10" placeholder="">{{ $setting['footer_scripts'] ?? '' }}</textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Sign in</button>
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
        @stop 