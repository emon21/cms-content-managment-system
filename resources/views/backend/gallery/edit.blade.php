@extends('layouts.admin-app')
@section('title', 'Edit | Gallery')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Gallery Edit</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Gallery</li>
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
                                    <i class="fas fa-edit pr-1"></i> Edit Gallery</h3>
                                <a href="{{ route('gallery.index') }}" class="btn btn-success float-right">
                                    <i class="fas fa-list pr-1"></i> Gallery List
                                </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('gallery.update', $gallery->id) }}" class="form-horizontal"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="d-flex align-item-center">
                                        <div class="form-group col-sm-5">
                                            <label for="title">Title:</label>
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Enter Title..." id="title" value="{{ $gallery->title }}">
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="title">Select Type:</label>
                                            <select name="type" class="form-control">
                                                <option value="">Select Type</option>
                                                <option value="image" {{ $gallery->type == 'image' ? 'selected' : '' }}>
                                                    Image</option>
                                                <option value="video" {{ $gallery->type == 'Video' ? 'selected' : '' }}>
                                                    Video</option>
                                            </select>
                                        </div>


                                        <div class="form-group col-sm-3">
                                            <label for="">Status</label>
                                            <select name="status" class="form-control">
                                                <option value=""> Select Status</option>
                                                <option value="publish"
                                                    {{ $gallery->status == 'publish' ? 'selected' : '' }}>Publish</option>
                                                <option value="draft" {{ $gallery->status == 'draft' ? 'selected' : '' }}>
                                                    Draft</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="d-flex flex-wrap">

                                        <div class="form-group col-sm-4">
                                            <label for="">Select Category :</label>
                                            <select name="cat_id" id="" class="form-control">
                                                <option value="">Chouse Category</option>
                                                @foreach ($category as $item)
                                                    @if ($item->type == 'gallery')
                                                        <option value="{{ $item->id }}"
                                                            {{ $item->id == $gallery->cat_id ? 'selected' : '' }}>
                                                            {{ $item->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>

                                        </div>



                                        <div class="form-group col-sm-4">
                                            <label for="">Image</label>
                                            <input type="file" name="image" class="form-control">
                                            
                                        </div>

                                        <div class="form-group col-sm-4 d-flex flex-column">
                                            <label for="">Image Preview</label>
                                            {{-- <img @if ($gallery->image) src="{{ asset($gallery->image) }}" @else src="{{ asset('uploads/no_image.png') }}" @endif
                                                width="250px" height="150px" alt="" class="img-fluid rounded"> --}}

                                                  <img class="img-thumbnail" @if ($gallery->image) src="{{ asset($gallery->image) }}" @else src="{{ asset('uploads/no-image.png') }}" @endif
                                                    width="250"  alt="">
                                           
                                        </div>

                                    </div>
                                    
                                    <div class="form-group col-sm-12">
                                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>
                                            Update</button>
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
