@extends('adminlte::page')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Content Sections <small>( {{  $page->name }} )</small></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Content Sections</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Content Sections <small>( {{ $page->name }} )</small></h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <div class="btn-group">
                                    <a href="{{ route('page.sections.create', ['page_id' => $page->id]) }}" class="btn btn-primary btn-sm">Add Section</a>
                                </div>
                                <div class="search">
                                    <form action="">
                                        <div class="input-group input-group-sm">
                                            <input type="text" name="q" class="form-control" placeholder="Search">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Page</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Section</th>
                                    <th>Sort_by</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody id="sort" data-sort_url="{{ route('sections.sorting') }}">
                                @forelse($content_sections as $section)
                                    <tr class="row1" data-id="{{ $section->id }}">
                                        <td>{{ $section->page->name ?? '' }}</td>
                                        <td>{{ $section->section_title }}</td>
                                        <td><a href="{{route('section.update.status',$section->id)}}" class="bdg-index-status">{!! checkStatus($section->status) !!}</a></td>
                                       <td><img src="/dashboard/sections/{{$section->section}}.png" class="img-thumbnail" width="100"></td>
                                        <td class="order_by">{{ $section->sort_by }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('section.duplicate', $section->id) }}"
                                                   class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#duplicate-model"><i class="fa fa-copy"></i></a>

                                                <a href="{{ route('sections.edit',['id'=>$section->id,'section'=>$section->section]) }}"
                                                   class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                                    <form action="{{ route('sections.delete', $section->id) }}"
                                                          method="post" class="ml-2">
                                                        @csrf @method('delete')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');"><i
                                                                    class="fa fa-trash"></i></button>
                                                    </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            {{ $content_sections->withQueryString()->links() }}

                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="modal fade" id="duplicate-model">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Duplicate row</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post" id="duplicateRowForm">
                    @csrf
                    <div class="modal-body">
                        <div class="success-message"></div>
                        <div class="form-group">
                            <label for="page_id">Select page / service</label>
                            @forelse($pages as $page)
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="page_id[]" value="{{ $page->id }}" id="exampleCheck{{$page->id}}">
                                <label class="form-check-label" for="exampleCheck{{$page->id}}">{{ $page->name }}</label>
                            </div>
                            @empty
                            @endforelse

                            <span class="text-danger" id="msg_page_id"></span>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.content -->
@endsection
@section('js')
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="/js/index.js"></script>
    <script>
        $('body').on('click', '[data-target="#duplicate-model"]', function (){
            var self = $(this);
            $('#duplicateRowForm').attr('action', self.attr('href'));
        })

        $('body').on('submit', '#duplicateRowForm', function(e){
            e.preventDefault();

            var self = $(this);
            $('#msg_page_id').html('');
            self.find('.success-message').html('');
                $.ajax({
                    url: self.attr('action'),
                    method: 'POST',
                    data: self.serialize(),
                    success: function(response) {
                        self.find('.success-message').html(`<div class="alert alert-success">${response.message}</div>`)
                    },
                    error: function(xhr) {
                        var errors = xhr.responseJSON.errors;
                        if (errors.page_id) {
                            $('#msg_page_id').text(errors.page_id[0]);
                        }
                    }
                });
        })
    </script>
@endsection
