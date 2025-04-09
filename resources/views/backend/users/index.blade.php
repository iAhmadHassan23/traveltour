@extends('adminlte::page')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
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
                            <h5 class="m-0">Users</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <div class="btn-group">
                                    <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm">Add User</a>
                                </div>

                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->Role }}</td>
                                        <td>
                                            <div class="btn-group">
                                                @can('User Update')
                                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                                @endcan
                                                @can('User Delete')
                                                @if($user->id != 1)
                                                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                                        @csrf @method('delete')
                                                        <button type="submit" class="btn btn-danger btn-sm ml-2"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                @endif
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
                            {{ $users->withQueryString()->links() }}

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
