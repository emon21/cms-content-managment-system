@extends('layouts.admin-app')
@section('title', 'Service')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Service</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Service</li>
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
                                    <i class="fas fa-plus"></i> Create Service</h3>
                                <a href="{{ route('service.index') }}" class="btn btn-success float-right"> <i
                                        class="fas fa-list pr-1"></i> Service List</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="d-flex">

                                        <div class="form-group col-sm-6">
                                            <label for="title">Title:</label>
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Enter Title..." id="title">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="title">Heading:</label>
                                            <input type="text" name="heading" class="form-control"
                                                placeholder="Enter Heading..." id="title">
                                        </div>

                                    </div>

                                    <div class="d-flex">
                                        <div class="form-group col-sm-3">
                                            <label for="type">Select Category:</label>
                                            <select name="cat_id" id="type" class="form-control">
                                                <option value=""> >>
                                                   Please Select Category << </option>
                                                        @foreach ($category as $item)
                                               
                                                        {{-- <option value="{{ $item->id }}">{{ ($item->name == '') ? $item->name : ucfirst($item->name) }}</option> --}}


                                                 @if ($item->type == 'service')
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endif
                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="form-group col-sm-3">
                                            <label for="type">Select Plan:</label>
                                            <select name="plan" id="type" class="form-control">
                                                <option value=""> >>
                                                    Chouse Plan << </option>
                                                        @foreach ($plan as $item)
                                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="form-group col-sm-3">
                                            <label for="status">Status:</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value=""> >> Chouse Type << </option>
                                                <option value="publish">Publish</option>
                                                <option value="draft">Draft</option>
                                            </select>

                                        </div>

                                        <div class="form-group col-sm-3">
                                            <label for="type">Icon:</label>
                                            <select name="icon" id="type" class="form-control">
                                                <option value=""> >>
                                                    Chouse Icon << </option>
                                                        @foreach ($category as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                    </div>

                                    <div class="d-flex">
                                        <div class="form-group col-sm-8">
                                            <label for="tags">Description:</label>
                                            <textarea name="description" id="sumernote" class="form-control" cols="30" rows="10"></textarea>
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="tags">Image:</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>

                                    <!-- Page Seo  -->
                                    <div class="d-flex">
                                        <div class="form-group col-sm-6">
                                            <label for="meta_title">Meta Title:</label>
                                            <input type="text" name="meta_title" class="form-control"
                                                placeholder="Enter Meta Title..." id="meta_title">
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="meta_keywords">Meta Keywords:</label>
                                            <input type="text" name="meta_keywords" class="form-control"
                                                placeholder="Enter Meta Keywords..." id="meta_keywords">
                                        </div>



                                    </div>

                                    <div class="form-group">
                                        <label for="meta_description">Meta Description:</label>
                                        <input type="text" name="meta_description" class="form-control"
                                            placeholder="Enter Meta Description..." id="meta_description">
                                    </div>
                                    <!-- Page Seo  -->


                                    <div class="form-group">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success"> <i class="fas fa-save pr-1"></i>Create</button>
                                        </div>
                                    </div>
                                </form>
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
