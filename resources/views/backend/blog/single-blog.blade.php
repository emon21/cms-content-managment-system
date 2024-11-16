@extends('layouts.admin-app')
@section('title', 'blog')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>blog</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">blog</li>
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
                        <div class="card-header">
                            <h3 class="card-title pt-2">Single Blog</h3>
                            <a href="{{ route('admin.blog.index') }}" class="btn btn-outline-success float-right">
                                <i class="fas fa-list"></i> Blog List
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <img @if ($blog->image) src="{{ asset($blog->image) }}" @else src="{{ asset('uploads/no-image.png') }}" @endif 
                                width="250px" height="180px" class="mb-4">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>Name</th>
                                        <th>:</th>
                                        <td>{{ $blog->title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Category</th>
                                        <th>:</th>
                                        <td>{{ $blog->category->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <th>:</th>
                                        <td>{{ $blog->status }}</td>
                                    </tr><tr>
                                        <th>tags</th>
                                        <th>:</th>
                                        <td>{{ $blog->tags }}</td>
                                    </tr><tr>
                                        <th>description</th>
                                        <th>:</th>
                                        <td>{!! $blog->description !!}</td>
                                    </tr><tr>
                                        <th>author</th>
                                        <th>:</th>
                                        <td>{{ $blog->author }}</td>
                                    </tr><tr>
                                        <th>meta_title</th>
                                        <th>:</th>
                                        <td>{{ $blog->meta_title }}</td>
                                    </tr><tr>
                                        <th>meta_keywords</th>
                                        <th>:</th>
                                        <td>{{ $blog->meta_keywords }}</td>
                                    </tr><tr>
                                        <th>meta_description</th>
                                        <th>:</th>
                                        <td>{{ $blog->meta_description }}</td>
                                    </tr><tr>
                                        <th>publish_date</th>
                                        <th>:</th>
                                        <td>{{ $blog->publish_date }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <th>:</th>
                                        <td>
                                            @if ($blog->status == 'Publish')
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
