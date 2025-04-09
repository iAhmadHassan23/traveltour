@extends('adminlte::page')

@section('content')
    @php
    $action = '';
//        if (isset($row->id)){
//            $action = route('page-section.update', $row->id);
//        }else{
//            $action = route('page-section.store');
//        }
    @endphp
            <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Select section design</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Select section design</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

 @include('backend.component.flash-messages')
    <!-- Main content -->
{{--    @if(is_null(request('section')))--}}
{{--     @include('backend.content_section.components.sections')--}}
{{--    @endif--}}

{{--    @isset($row->template)--}}
{{--        @include('backend.content_section.components.'.$row->template, ["id"=> $row->service_id, 'row' => $row])--}}
{{--    @else--}}
        @if(request('section') != null)
            @include('backend.page_section.components.'.request('section'), ["page_id"=>$page->id, 'section'=>request('section')])
        @else

            @include('backend.page_section.components.sections')
        @endif
{{--    @endisset--}}


@endsection
@section('css')
    <link rel="stylesheet" href="/vendor/summernote/summernote-bs4.min.css">

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

