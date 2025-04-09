@extends('adminlte::page')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Pages</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Pages</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  @include('backend.component.flash-messages')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Pages</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
{{--                                <div class="btn-group">--}}
{{--                                    <a href="{{ route('page.create') }}" class="btn btn-primary btn-sm">Add page</a>--}}
{{--                                </div>--}}
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Index Status</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Sections</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($pages as $page)
                                    <tr>
                                        <td>{{ $page->name }}</td>
                                        <td><a href="{{route('page.update.index.status',$page->id)}}"
                                               class="bdg-index-status">{!! indexStatus($page->index_status) !!}</a></td>
                                        <td><a href="{{route('page.update.status',$page->id)}}"
                                               class="bdg-index-status">{!! publishStatus($page->status) !!}</a>
                                        </td>

                                        <td>{{ $page->created_at->format('Y-m-d') }}</td>


                                        <td><a href="{{ route('page.sections', $page->id) }}" class="btn btn-sm btn-primary">Section
                                            <span class="badge badge-{{ count($page->sections) > 0 ? 'success' : 'warning' }}"> {{ count($page->sections) }} </span>
                                        </a></td>
                                        <td>
                                            <div class="btn-group">
                                                @can('Blog Update')
                                                <a href="{{ route('page.edit', $page->id) }}"
                                                   class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                                @endcan
                                                <a href="{{ route('single.segment', $page->slug) }}"
                                                   class="btn btn-default btn-sm ml-1"><i class="fa fa-eye"></i></a>
                                                    @can('Blog Delete')
                                                <form action="{{ route('page.destroy', $page->id) }}"
                                                      method="post" class="ml-1">
                                                    @csrf @method('delete')
                                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-sm"><i
                                                                class="fa fa-trash"></i></button>
                                                </form>
                                                    @endcan
                                            </div>

                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
{{--                            {{ $pages->withQueryString()->links() }}--}}

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
@section('js')
    <script src="/js/index.js"></script>
{{--    @include('backend.script.index_script')--}}
@endsection
