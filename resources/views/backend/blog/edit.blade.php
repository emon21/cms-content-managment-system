@extends('layouts.admin-app')
@section('title', 'BLog')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Blog</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Blog</li>
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
                                <h3 class="card-title pt-2"><i class="fas fa-plus pr-2"></i>Edit Blog</h3>
                                <a href="{{ route('blog.index') }}" class="btn btn-success float-right" ><i class="fas fa-list pr-2"></i>All Blog</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('blog.update', $blog->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    {{-- <input type="hidden" name="BlogID" value="{{ $blog->id }}"> --}}

                                    <div class="d-flex ga-4 align-item-center">
                                        <div class="form-group col-sm-6">
                                            <label for="title">Title:</label>
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Enter Title..." id="title" value="{{ $blog->title }}">
                                        </div>

                                        <div class="form-group col-sm-3">
                                            <label for="type">Blog:</label>
                                            <select name="cat_id" id="type" class="form-control">
                                                <option value=""> >> Chouse Blog << </option>
                                                        @foreach ($category as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $item->id == $blog->cat_id ? 'selected' : '' }}>{{ $item->name }}
                                                </option>
                                                @endforeach



                                            </select>
                                        </div>



                                        <div class="form-group col-sm-3">
                                            <label for="tags">Tags:</label>
                                            <input type="text" name="tags" class="form-control"
                                                placeholder="Enter Tags..." id="tags" value="{{ $blog->tags }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tags">Description:</label>
                                        <textarea name="description" id="summernote" class="form-control" cols="30" rows="10"
                                            value="{{ $blog->description }}">{{ $blog->description }}</textarea>
                                    </div>

                                    <div class="d-flex">
                                        <div class="form-group col-sm-4">
                                            <label for="author">Author:</label>
                                            <input type="text" name="author" class="form-control"
                                                placeholder="Enter Author..." id="author" value="{{ $blog->author }}">
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
                                                <option value="publish" {{ $blog->status == 'Publish' ? 'selected' : '' }}>
                                                    Publish</option>
                                                <option value="draft" {{ $blog->status == 'draft' ? 'selected' : '' }}>
                                                    Draft</option>


                                            </select>

                                        </div>
                                    </div>

                                    <!-- Page Seo  -->
                                    <div class="d-flex">

                                        <div class="form-group col-sm-4">
                                            <label for="meta_title">Meta Title:</label>
                                            <input type="text" name="meta_title" class="form-control"
                                                placeholder="Enter Meta Title..." id="meta_title"
                                                value="{{ $blog->meta_title }}">
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="meta_keywords">Meta Keywords:</label>
                                            <input type="text" name="meta_keywords" class="form-control"
                                                placeholder="Enter Meta Keywords..." id="meta_keywords"
                                                value="{{ $blog->meta_keywords }}">
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="meta_description">Meta Description:</label>
                                            <input type="text" name="meta_description" class="form-control"
                                                placeholder="Enter Meta Description..." id="meta_description"
                                                value="{{ $blog->meta_description }}">
                                        </div>

                                    </div>
                                    <!-- Page Seo  -->

                                    <div class="d-flex justify-content-between align-item-center">
                                        <div class="form-group col-sm-4">
                                            <label for="image">Image:</label>
                                            <input type="file" class="form-control" name="FileUpload"
                                                onchange="previewImage(event);">
                                           <div class="form-group mt-2">
                                              <label for="previewImg" class="col-form-label pt-0">Preview Image</label>
                                            <img class="rounded img-fluid"
                                                @if ($blog->image) src="{{ asset($blog->image) }}" @else src="https://cdn.vectorstock.com/i/500p/65/30/default-image-icon-missing-picture-page-vector-40546530.jpg" @endif
                                                alt="" width="320px" id="previewImg">
                                           </div>


                                        </div>

                                    </div>



                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"><i class="fas fa-edit pr-2"></i>Update</button>
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

    <script>
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
