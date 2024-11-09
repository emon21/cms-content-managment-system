@extends('layouts.admin-app')
@section('title', 'Partner')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Partner Create</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Partner</li>
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
                                <h3 class="card-title pt-2"><i class="fas fa-plus pr-1"></i> Create Partner</h3>
                                <a href="{{ route('partner.index') }}" class="btn btn-success float-right">
                                    <i class="fas fa-list pr-1"></i> Partner
                                    List</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('partner.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="d-flex align-item-center">
                                        <div class="form-group col-sm-6">
                                            <label for="title">Title:</label>
                                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                                placeholder="Enter Title..." id="title" value="{{ old('title') }}">
                                                @error('title')<span class="text-danger">{{$message}}</span>@enderror
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="title">URL:</label>
                                            <input type="text" name="url" class="form-control @error('url') is-invalid @enderror"
                                                placeholder="Enter Title..." id="title" value="{{ old('url') }}">
                                                @error('url')<span class="text-danger">{{$message}}</span>@enderror
                                        </div>

                                    </div>

                                    <div class="d-flex">

                                        <div class="form-group col-sm-6">
                                            <label for="">Status</label>
                                            <select name="status" class="form-control @error('status') is-invalid @enderror">
                                                <option value=""> Select Status</option>
                                                <option value="publish" @if (old('status') == 'publish') ? selected : ''
                                                    
                                                @endif>Publish</option>
                                                <option value="draft" @if (old('status') == 'draft') ? selected : ''
                                                    
                                                @endif>Draft</option>
                                            </select>
                                            @error('status')<span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="">Image</label>
                                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                            @error('image')<span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fas fa-save pr-1"></i>
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
