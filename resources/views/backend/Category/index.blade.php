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
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                data-target="#CreateCtegory">
                                Add Category
                            </button>

                            {{-- <a href="#" class="btn btn-primary float-right" id="CreateCtegory" data-toggle="modal">Add Category</a> --}}

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th># Sl No</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Picture</th>
                                        <th>Status</th>
                                        <th>Ation</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($categories as  $category)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->type }}</td>
                                            <td>
                                                <img  @if ($category->image) src="{{ asset($category->image) }}" @else src="{{ asset('uploads/category/no-image.png') }}" @endif
                                                width="120" height="80">
                                            </td>
                                            <td>
                                                @if ($category->status == 'publish')
                                                    <span class="badge bg-success">Publish</span>
                                                @else
                                                    <span class="badge bg-danger">Draft</span>
                                                @endif
                                            </td>
                                            <td class="d-flex justify-content-between">
                                                <a href="{{ route('category.show', $category->id) }}"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>

                                                <a href="{{ route('category.edit', $category->id) }}"
                                                    class="btn btn-info btn-sm">
                                                    <i class="far fa-edit"></i>
                                                </a>

                                                {{-- <a href="{{ route('category.destroy',$category->id) }}" class="btn btn-danger btn-sm">
                                              <i class="fas fa-trash-alt"></i>
                                               </a> --}}



                                                <form action="{{ route('category.destroy', $category->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        onclick="return confirm('Are you sure you want to delete this category?')"
                                                        class="btn btn-danger btn-sm"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <td colspan="5" class="text-center">
                                            <span class="text-danger text-bold">
                                                No Data Found
                                            </span>
                                        </td>
                                    @endforelse

                                </tbody>

                            </table>
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

    <!-- Category Modal --->
    <!-- The Modal -->
    <div class="modal fade" id="CreateCtegory">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Create Category</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ route('category.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="CategoryName">Category Name:</label>
                            <input type="text" name="CategoryName" class="form-control"
                                placeholder="Enter CategoryName..." id="CategoryName">
                        </div>

                        <div class="d-flex ga-4 align-item-center">

                            <div class="form-group col-sm-4">
                                <label for="type">Type:</label>
                                <select name="type" id="type" class="form-control">
                                    <option value=""> >> Chouse Type << </option>
                                    <option value="blog">Blog</option>
                                    <option value="service">Service</option>
                                    <option value="pricePlan">PricePlan</option>
                                    <option value="gallery">Gallery</option>
                                </select>
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

                        <div class="form-group col-sm-8">
                            {{-- <input type="file" class="form-control" name="FileUpload"> --}}
                            <input  type="file" class="form-control" name="FileUpload" id="CarImage"
                                            onchange="previewImage(event);">
                        </div>


                       <div class="col-sm-8">
                                    <label for="" class="col-sm-4 col-form-label">Preview Image</label>
                                    <div class="form-group">
                                        <img src="uploads/category/no-image.png"
                                            alt=""  class="" height="180px" id="previewImg">
                                    </div>
                                </div>
                        <button type="submit" class="btn btn-success">Create</button>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

<script>
        function previewImage(event) {
            var input = event.target;
            var image = document.getElementById('previewImg');
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    image.src = e.target.result;
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection
