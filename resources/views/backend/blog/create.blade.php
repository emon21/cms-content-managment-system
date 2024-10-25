@extends('layouts.admin-app')
@section('title', 'Category')
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title pt-2">Category</h3>
                                <a href="#" class="btn btn-primary float-right" id="CreateCtegory"
                                    data-toggle="modal">Add Category</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf



                                    <div class="d-flex ga-4 align-item-center">
                                        <div class="form-group col-sm-6">
                                            <label for="title">Title:</label>
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Enter Title..." id="title">
                                        </div>

                                        <div class="form-group col-sm-3">
                                            <label for="type">Category:</label>
                                            <select name="cat_id" id="type" class="form-control">
                                                <option value=""> >>
                                                    Chouse Category << </option>
                                                        @foreach ($category as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="form-group col-sm-3">
                                            <label for="tags">Tags:</label>
                                            <input type="text" name="tags" class="form-control"
                                                placeholder="Enter Tags..." id="tags">
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="tags">Description:</label>
                                        <textarea name="description" id="" class="form-control" cols="30" rows="10"></textarea>
                                    </div>

                                    <div class="d-flex">
                                        <div class="form-group col-sm-4">
                                            <label for="author">Author:</label>
                                            <input type="text" name="author" class="form-control"
                                                placeholder="Enter Author..." id="author">
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="publish_date">Publish Date:</label>
                                            <input type="date" name="publish_date" class="form-control"
                                                placeholder="Enter Publish Date..." id="publish_date">
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="status">Status:</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value=""> >> Chouse Type << </option>
                                                <option value="publish">Publish</option>
                                                <option value="draft">Draft</option>
                                            </select>

                                        </div>
                                    </div>

                                    <!-- Page Seo  -->
                                    <div class="d-flex">

                                        <div class="form-group col-sm-4">
                                            <label for="meta_title">Meta Title:</label>
                                            <input type="text" name="meta_title" class="form-control"
                                                placeholder="Enter Meta Title..." id="meta_title">
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="meta_keywords">Meta Keywords:</label>
                                            <input type="text" name="meta_keywords" class="form-control"
                                                placeholder="Enter Meta Keywords..." id="meta_keywords">
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="meta_description">Meta Description:</label>
                                            <input type="text" name="meta_description" class="form-control"
                                                placeholder="Enter Meta Description..." id="meta_description">
                                        </div>

                                    </div>
                                    <!-- Page Seo  -->


                                    <div class="form-group col-sm-6">
                                        <label for="FileUpload">Picture:</label>
                                        <input type="file" name="FileUpload" class="form-control"
                                            placeholder="Enter Title..." id="FileUpload">

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Create</button>
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
