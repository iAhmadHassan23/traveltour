@extends('adminlte::page')

@section('title', 'Signatures')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Signatures</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Signatures</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@stop

@section('content')

    <!-- Main content -->
    <div class="content">
        @can('Signature Create')
        <div class="mb-5">
            <a href="{{route('signatures.create')}}" class="btn btn-primary">Create Signature</a>
        </div>
        @endcan
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Signature</h5>
                        </div>
                        <div class="card-body">
                            <table id="example" class="display dataTable" style="width:100%" aria-describedby="example_info">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($signatures as $key=> $signature)
                                    <tr>
                                        <td>{{$signature->name}}</td>
                                        <td>{{$signature->image}}</td>
                                        <td>
                                            <div class="btn-group">
                                                @can('Signature Update')
                                                <a href="{{ route('signatures.edit',[$signature->id]) }}"
                                                   class="btn btn-primary btn-sm  ">
                                                    <i class="fas fa-edit ml-1"></i>
                                                </a>
                                                @endcan
                                                    @can('Signature Delete')
                                                <form action="{{ route('signatures.destroy',[$signature->id]) }}" method="post">
                                                    @csrf @method('delete')
                                                    <button type="submit"
                                                            class="btn btn-danger btn-sm  ">
                                                        <i class="fas fa-trash ml-1"></i>
                                                    </button>
                                                </form>
                                                    @endcan
                                            </div>


                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
        $('#example').DataTable();

@stop


