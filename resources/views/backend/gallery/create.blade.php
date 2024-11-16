@extends('layouts.admin-app')
@section('title', 'Partner')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Gallery Create</h1>
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
                                <h3 class="card-title pt-2"><i class="fas fa-plus pr-1"></i> Create Gallery</h3>
                                <a href="{{ route('gallery.index') }}" class="btn btn-success float-right">
                                    <i class="fas fa-list pr-1"></i>
                                     Gallery List</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="d-flex align-item-center">
                                        <div class="form-group col-sm-6">
                                            <label for="title">Title:</label>
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Enter Title..." id="title">
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="title">Select Type:</label>
                                            <select name="type" class="form-control">
                                                <option value="">Select Type</option>
                                                <option value="image">Image</option>
                                                <option value="video">Video</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="d-flex">

                                        <div class="form-group col-sm-3">
                                            <label for="">Select Category :</label>
                                            <select name="cat_id" id="" class="form-control">
                                                <option value="">Chouse Category</option>
                                                @foreach ($category as $item)
                                                    {{-- 
                                                {{ ($item->type == 'gallery') ? $item->name : '' }} 
                                                <option value="">{{ $item->name }}</option> --}}

                                                    {{-- <option value="{{ $item->id }}">
                                                    {{ ($item->type == 'gallery') ? $item->name : '' }} </option> --}}


                                                    @if ($item->type == 'gallery')
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="">Status</label>
                                            <select name="status" class="form-control">
                                                <option value=""> Select Status</option>
                                                <option value="publish">Publish</option>
                                                <option value="draft">Draft</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="">Image</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fas fa-save"></i>
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


    <script>
     
        
        // function Image(event) {
        //     event.preventDefault();

        //     document.getElementById('image').style.display = 'block';
        //     document.getElementById('video').style.display = 'none';


        // //    console.log("Image Here");
           
        // }

        // function Video() {

        //     console.log('video');
            
        // }

        // let image = documentgetElementById('image');
        // let video = documentgetElementById('video');

        // image.addEventListener('click', () => {
        //     document.getElementById('image').style.display = 'block';
        //     document.getElementById('video').style.display = 'none';
        // })

        // video.addEventListener('click', () => {
        //     document.getElementById('image').style.display = 'none';
        //     document.getElementById('video').style.display = 'block';
        // })

        // show and hide video and image

        // show image 
    </script>
@endsection
