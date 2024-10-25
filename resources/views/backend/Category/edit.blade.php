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
                <div class="row"></div>
                <div class="col-12">
                    <div class="card">

                        <div class="card-header">
                            <h3 class="card-title pt-2">Category</h3>
                            <a href="{{ route('category') }}" class="btn btn-info float-right">
                                Category List
                            </a>


                        </div>



                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('category.update', $category->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="d-flex gap-2  align-item-center">

                                    {{-- <input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly> --}}

                                    <div class="col-sm-9">
                                        <div class="form-group col-sm-8">
                                            <label for="CategoryName">Category Name:</label>
                                            <input type="text" name="CategoryName" class="form-control"
                                                placeholder="Enter CategoryName..." id="CategoryName"
                                                value="{{ $category->name }}">
                                        </div>

                                        <div class="d-flex ">

                                            <div class="form-group col-sm-2 ">
                                                <label for="type">Type:</label>
                                                <select name="type" id="type" class="form-control">
                                                    <option value=""> >> Chouse Type << </option>

                                                    <option value="blog"
                                                        {{ $category->type == 'blog' ? 'selected' : '' }}>Blog
                                                    </option>
                                                    <option value="service"
                                                        {{ $category->type == 'service' ? 'selected' : '' }}>
                                                        Service</option>
                                                    <option value="pricePlan"
                                                        {{ $category->type == 'priceplan' ? 'selected' : '' }}>
                                                        PricePlan</option>
                                                    <option value="gallery"
                                                        {{ $category->type == 'gallery' ? 'selected' : '' }}>
                                                        Gallery</option>

                                                </select>
                                            </div>

                                            <div class="form-group col-sm-2 ">
                                                <label for="status">Category:</label>
                                                <select name="status" id="status" class="form-control">
                                                    <option value=""> >> Chouse Status << </option>

                                                    <option value="publish"
                                                        {{ $category->status == 'publish' ? 'selected' : '' }}>
                                                        Publish</option>
                                                    <option value="draft"
                                                        {{ $category->status == 'draft' ? 'selected' : '' }}>
                                                        Draft</option>

                                                </select>
                                            </div>

                                            <div class="form-group col-sm-4">
                                                <label for="image">Image:</label>
                                                <input type="file" class="form-control" name="FileUpload"
                                                    onchange="previewImage(event);">

                                            </div>
                                        </div>

                                    </div>


                                    <div class="form-group col-sm-3 float-right">
                                        <label for="" class="col-sm-6 col-form-label pt-0">Preview Image</label>
                                        <div class="form-group">

                                            <img @if ($category->image) src="{{ asset($category->image) }}" @else src="{{ asset('uploads/category/no-image.png') }}" @endif
                                                alt="" width="270px" height="250px" id="previewImg">

                                            {{-- <img src="https://cdn.vectorstock.com/i/500p/65/30/default-image-icon-missing-picture-page-vector-40546530.jpg"
                                                alt="" > --}}
                                        </div>
                                    </div>

                                </div>






                                <button type="submit" class="btn btn-success">Update</button>

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




    <script>
        // function previewImage(event) {
        function previewImage(event) {
            let input = event.target;
            let image = document.getElementById('previewImg');
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = function(data) {
                    image.src = data.target.result;
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
