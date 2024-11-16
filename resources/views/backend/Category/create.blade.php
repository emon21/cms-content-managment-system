@extends('layouts.admin-app')
@section('title', 'Category')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">       
                        <h1>Create Category</h1>
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
                        <div class="card-header">
                            <h3 class="card-title pt-2">
                                <i class="fas fa-plus"></i>
                                Create Category</h3>
                            <a href="{{ route('admin.category') }}"
                                class="btn btn-outline-success float-right d-flex gap-3 align-item-center">
                                <i class="fas fa-list pt-1 pr-1"></i>
                                Category List
                            </a>
                        </div>
                        
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="CategoryName">Category Name:</label>
                                    <input type="text" name="CategoryName"
                                        class="form-control @error('CategoryName') is-invalid @enderror"
                                        placeholder="Enter CategoryName..." id="CategoryName"
                                        value="{{ old('CategoryName') }}">

                                    @error('CategoryName')
                                        <span class="text-danger pt-2">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="d-flex align-item-center">

                                    <div class="form-group col-sm-6">
                                        <label for="type">Type:</label>
                                        <select name="type" id="type"
                                            class="form-control @error('type') is-invalid @enderror">
                                            <option value=""> >> Chouse Type << </option>
                                            <option value="blog">Blog</option>
                                            <option value="service">Service</option>
                                            <option value="pricePlan">PricePlan</option>
                                            <option value="gallery">Gallery</option>
                                        </select>
                                        @error('type')
                                            <span class="text-danger pt-2">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="form-group col-sm-6">
                                        <label for="status">Status:</label>
                                        <select name="status" id="status"
                                            class="form-control @error('status') is-invalid @enderror">
                                            <option value=""> >> Chouse Status << </option>
                                            <option value="publish">Publish</option>
                                            <option value="draft">Draft</option>

                                        </select>
                                        @error('status')
                                            <span class="text-danger pt-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{-- <input type="file" class="form-control" name="FileUpload"> --}}
                                    {{-- <input type="file" class="form-control" name="FileUpload" id="CarImage"
                                onchange="previewImage(event);"> --}}

                                    {{-- <input type="file" class="dropify"  name="imgUpload" data-height="200" /> --}}
                                    <input name="imgUpload" type="file" class="dropify" data-default-file=""
                                        data-height="250" />
                                </div>

                                {{-- <div class="container" style="width:364px;">
                                    <input name="imgUpload" type="file" class="dropify" data-default-file="url_of_your_file" data-height="100" />
                                </div> --}}
                                
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-save"></i> Create
                                </button>
                            </form>
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
