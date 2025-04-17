@extends('adminlte::page')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Reviews</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Reviews</li>
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
                            <h5 class="m-0">Reviews</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                @can('Tour Create')
                                <div class="btn-group">
                                    <a href="{{ route('reviews.create') }}" class="btn btn-primary btn-sm">Add Review</a>
                                </div>
                                @endcan

                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Person Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($reviews as $review)
                                    <tr>
                                        <td>{{ $review->title ?? "" }}</td>
                                        <td>
                                            <div class="btn-group">
                                                @can('review list')
                                                <a href="{{ route('reviews.edit', $review->id) }}"
                                                   class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                                @endcan
                                                @can('review Delete')
                                                <form action="{{ route('reviews.destroy', $review->id) }}" method="post">
                                                    @csrf @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-sm ml-2"><i
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
@endsection
