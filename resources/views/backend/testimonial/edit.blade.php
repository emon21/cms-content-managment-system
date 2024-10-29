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
                                <h3 class="card-title pt-2"><i class="fas fa-list"></i> Testimonial List</h3>
                                <a href="{{ route('testimonial.index') }}" class="btn btn-primary float-right"><i
                                        class="fas fa-list"></i> Testimonial
                                    List</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('testimonial.update',$testimonial->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="d-flex align-item-center">
                                        <div class="form-group col-sm-6">
                                            <label for="title">Client Name:</label>
                                            <input type="text" name="client_name" class="form-control"
                                                placeholder="Enter Title..." id="title" value="{{ $testimonial->client_name }}">
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="title">Designation:</label>
                                            <input type="text" name="designation" class="form-control"
                                                placeholder="Enter Title..." id="title" value="{{ $testimonial->designation }}">
                                        </div>
                                       
                                    </div>

                                    <div>

                                        <div class="form-group col-sm-6"></div>
                                            <label for="title">Status</label>
                                            <select name="status" id="">
                                                <option value="pullish" {{ $testimonial->status == 'pullish' ? 'selected' : '' }}>Pullish</option>
                                                <option value="draft" {{ $testimonial->status == 'draft' ? 'selected' : '' }}>Draft</option>
                                                
                                            </select>    
                                        </div>
                                    </div>

                                    <div class="d-flex">

                                        <div class="form-group col-sm-8">
                                            <label for="tags">Description:</label>
                                            <textarea name="description" id="" class="form-control" cols="10" rows="5">{{ $testimonial->description }}</textarea>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="">Image</label>
                                            <input type="file" name="image" class="form-control">
                                            <div>
                                                {{-- <img src="{{ asset($testimonial->image) }}" alt="" width="100px" height="100px" class="mt-2 img-thumbnail"> --}}

                                                <img class="mt-2 img-thumbnail" @if ($testimonial->image) src="{{ asset($testimonial->image) }}" @else src="{{ asset('uploads/no-image.png') }}" @endif
                                                    width="100" alt="">
                                            </div>
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
