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
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
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
                                <h3 class="card-title pt-2"><i class="fas fa-list"></i> Partner List</h3>
                                <a href="{{ route('partner.index') }}" class="btn btn-primary float-right"><i
                                        class="fas fa-list"></i> Partner
                                    List</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('partner.update', $partner->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="d-flex align-item-center">
                                        <div class="form-group col-sm-6">
                                            <label for="title">Title:</label>
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Enter Title..." id="title" value="{{ $partner->title }}">
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="title">URL:</label>
                                            <input type="text" name="url" class="form-control"
                                                placeholder="Enter Title..." id="title" value="{{ $partner->url }}">
                                        </div>

                                    </div>

                                    <div class="d-flex">

                                        <div class="form-group col-sm-6">
                                            <label for="">Status</label>
                                            <select name="status" class="form-control">
                                                <option value=""> Select Status</option>
                                                <option value="publish"
                                                    {{ $partner->status == 'publish' ? 'selected' : '' }}>Publish</option>
                                                <option value="draft" {{ $partner->status == 'draft' ? 'selected' : '' }}>
                                                    Draft</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="">Image</label>
                                            <input type="file" name="image" class="form-control">
                                            <img @if ($partner->image) src="{{ asset($partner->image) }}" @else src="{{ asset('uploads/no-image.png') }}" @endif
                                                width="100px" height="50px" class="mt-2 img-fluid">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>
                                            update</button>
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
