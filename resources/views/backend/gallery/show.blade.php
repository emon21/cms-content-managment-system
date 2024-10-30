@extends('layouts.admin-app')
@section('title', 'Show | gallery')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Show Team</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Team</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row"></div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h3 class="card-title pt-2">Show gallery</h3>
                            <a href="{{ route('gallery.index') }}" class="btn btn-outline-warning float-right">
                                <i class="fas fa-undo-alt"></i> Back

                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <img @if ($gallery->image) src="{{ asset($gallery->image) }}" @else src="{{ asset('uploads/no-image.png') }}" @endif
                                width="250px" height="180px">
                            <table class="table table-bordered table-striped table-hover">
                                <tbody>
                                    <tr>
                                        <th>Name</th>
                                        <th>:</th>
                                        <td>{{ $gallery->title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Type</th>
                                        <th>:</th>
                                        <td>{{ $gallery->type }}</td>
                                    </tr>

                                    <tr>
                                        <th>Category</th>
                                        <th>:</th>
                                        <td class="">
                                            {{ $gallery->category->name }}

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <th>:</th>
                                        <td>
                                            @if ($gallery->status == 'publish')
                                                <span class="badge bg-success">Publish</span>
                                            @else
                                                <span class="badge bg-danger">Draft</span>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
