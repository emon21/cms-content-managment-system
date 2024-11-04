@extends('layouts.admin-app')
@section('title', 'Show Category')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Category</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Category</li>
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
                            <h3 class="card-title pt-2">Single Category</h3>
                            <a href="{{ route('category') }}" class="btn btn-outline-warning float-right">
                                <i class="fas fa-undo-alt"></i> Go Back
                                
                           </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <img  @if ($category->image) src="{{ asset($category->image) }}" @else src="{{ asset('uploads/category/no-image.png') }}" @endif
                                                width="250px" height="180px">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <td>:</td>
                                        <th>
                                        
                                            {{-- <img src="{{ asset($category->image) }}" alt=""> --}}

                                            

                                            {{-- <img src="{{ asset('upload/student/' . $student->image) }}" alt=""
                                                @if ($student->image) src="{{ asset('upload/student/' . $student->image) }}" @else src="{{ asset('upload/no-image.png') }}" @endif
                                                width="350px" height="450px" class=" rounded" id="previewImg"> --}}
                                                {{-- @if ($category->image) {{ asset('uploads/category/'.$category->image) }} @else {{ asset('uploads/category/'.$category->image) }} @endif --}}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Name</th>
                                        <th>:</th>
                                        <td>{{ $category->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Type</th>
                                        <th>:</th>
                                        <td>{{ $category->type }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <th>:</th>
                                        <td>{{ $category->status }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <th>:</th>
                                        <td>
                                            @if ($category->status == 'publish')
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
