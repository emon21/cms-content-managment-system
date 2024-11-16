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
                            <form action="{{ route('model-store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="createModel">Model Name:</label>
                                    <input type="text" name="createModel"
                                        class="form-control @error('createModel') is-invalid @enderror"
                                        placeholder="Enter createModel..." id="createModel"
                                        value="{{ old('createModel') }}">

                                    @error('createModel')
                                        <span class="text-danger pt-2">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="d-flex align-item-center">

                                    <div class="form-group col-sm-2">
                                        <label for="type">Type:</label>
                                        <select name="type" id="type"
                                            class="form-control @error('type') is-invalid @enderror">
                                            <option value=""> >> Chouse Type << </option>
                                            <option value="backend">Backend</option>
                                            <option value="frontend">Frontend</option>
                                        </select>
                                        @error('type')
                                            <span class="text-danger pt-2">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>

                               

                               
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
