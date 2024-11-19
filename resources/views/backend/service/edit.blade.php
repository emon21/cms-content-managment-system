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
                                <h3 class="card-title pt-2"> <i class="fas fa-edit pr-1"></i> Edit Service</h3>
                                <a href="{{ route('service.index') }}" class="btn btn-success float-right"> <i
                                        class="fas fa-list pr-1"></i> Service List</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('service.update', $service->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="d-flex">

                                        <div class="form-group col-sm-6">
                                            <label for="title">Title:</label>
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Enter Title..." id="title" value="{{ $service->title }}">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="title">Heading:</label>
                                            <input type="text" name="heading" class="form-control"
                                                placeholder="Enter Heading..." id="title"
                                                value="{{ $service->heading }}">
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
                                                <option value="{{ $item->id }}"
                                                    {{ $item->id == $service->cat_id ? 'selected' : '' }}>
                                                    {{ $item->name }}</option>
                                                @endif

                                                {{-- <option value="{{ $item->id }}"  {{ $item->id == $service->cat_id ? 'selected' : '' }}>{{ $item->name }}</option> --}}
                                                @endforeach

                                            </select>

                                            {{-- {{ $item->id == $blog->cat_id ? 'selected' : '' }} --}}
                                        </div>

                                        <div class="form-group col-sm-2">
                                            <label for="type">Select Plan:</label>
                                            <select name="plan" id="type" class="form-control">
                                                <option value=""> >>
                                                    Chouse Plan << </option>
                                                        @foreach ($plan as $item)
                                                <option value="{{ $item->id }}" {{-- @if ($item->id == $service->plan_id) selected
                                                    
                                                @endif --}}
                                                    {{ $item->id == $service->plan_id ? 'selected' : '' }}>
                                                    {{ $item->title }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="form-group col-sm-2">
                                            <label for="status">Status:</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value=""> >> Chouse Type << </option>
                                                <option value="publish" @if ($service->status == 'publish') selected @endif>
                                                    Publish</option>
                                                <option value="draft" @if ($service->status == 'draft') selected @endif>
                                                    Draft</option>
                                            </select>

                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="tags">Image:</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                        <div class="form-group col-sm-1">
                                            <label for="type">Icon:</label>

                                            <div>
                                                <button class="btn btn-default iconpicker" data-icon="{{ $service->icon }}"
                                                    name="icon_picker" role="iconpicker">
                                                    Icon
                                                </button>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="tags">Description:</label>
                                        <textarea name="description" id="summernote" class="form-control" cols="30" rows="10">{{ $service->description }}</textarea>
                                    </div>


                                    <!-- Page Seo  -->
                                    <div class="d-flex">
                                        <div class="form-group col-sm-6">
                                            <label for="meta_title">Meta Title:</label>
                                            <input type="text" name="meta_title" class="form-control"
                                                placeholder="Enter Meta Title..." id="meta_title"
                                                value="{{ $service->meta_title }}">
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="meta_keywords">Meta Keywords:</label>
                                            <input type="text" name="meta_keywords" class="form-control"
                                                placeholder="Enter Meta Keywords..." id="meta_keywords"
                                                value="{{ $service->meta_keywords }}">
                                        </div>



                                    </div>

                                    <div class="form-group">
                                        <label for="meta_description">Meta Description:</label>

                                        <textarea name="meta_description" id="sumernote" class="form-control @error('meta_description') is-invalid @enderror"
                                            placeholder="Enter Meta Description..." cols="30" rows="10" value="{{ $service->meta_description }}">{{ $service->meta_description }}</textarea>
                                    </div>
                                    <!-- Page Seo  -->


                                    <div class="form-group">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">
                                                <i class="fas fa-edit"></i>
                                                Update
                                            </button>
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
