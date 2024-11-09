@extends('layouts.admin-app')
@section('title', 'Testimonial')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Testimonial create</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Testimonial</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title pt-2">
                                    <i class="fas fa-plus"></i> Create Testimonial
                                 </h3>
                                <a href="{{ route('testimonial.index') }}" class="btn btn-success float-right">
                                    <i class="fas fa-list"></i> Testimonial
                                    List</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="d-flex align-item-center">
                                        <div class="form-group col-sm-6">
                                            <label for="title">Client Name:</label>
                                            <input type="text" name="client_name" class="form-control @error('client_name') is-invalid @enderror"
                                                placeholder="Enter Title..." id="title" value="{{ old('client_name') }}">
                                                @error('client_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="title">Designation:</label>
                                            <input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror"
                                                placeholder="Enter Title..." id="title" value="{{ old('designation') }}">
                                                @error('designation')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                       
                                    </div>

                                    <div class="d-flex">

                                        <div class="form-group col-sm-8">
                                            <label for="tags">Description:</label>
                                            <textarea name="description" id="summernote" class="form-control" cols="10" rows="5"></textarea>
                                            @error('description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="">Image</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>
                                            Create</button>
                                    </div>
                            </div>

                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

    </div>

    </section>
    <!-- /.content -->
    </div>



@endsection
