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
                                    <i class="fas fa-plus"></i> Create Service
                                </h3>
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
                                            <input type="text" name="title"
                                                class="form-control @error('title') is-invalid @enderror"
                                                placeholder="Enter Title..." id="title" value="{{ old('title') }}">
                                            @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="title">Heading:</label>
                                            <input type="text" name="heading"
                                                class="form-control @error('heading') is-invalid @enderror"
                                                placeholder="Enter Heading..." id="title" value="{{ old('heading') }}">
                                            @error('heading')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="d-flex">
                                        <div class="form-group col-sm-3">
                                            <label for="type">Select Category:</label>
                                            <select name="cat_id" id="type"
                                                class="form-control @error('cat_id') is-invalid @enderror">
                                                <option value=""> >> Please Select Category << </option>
                                                        @foreach ($category as $item)
                                                            @if ($item->type == 'service')
                                                <option value="{{ $item->id }}">
                                                    {{ $item->name }}</option>
                                                @endif
                                                @endforeach

                                            </select>
                                            @error('cat_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-sm-3">
                                            <label>Select Plan</label>
                                            <select class="form-control select2" name="plans[]" multiple>
                                                <option value=""> >> Chouse Plan << </option>
                                                        @foreach ($plan as $item)
                                                <option value="{{ $item->id }}">
                                                    {{ $item->title }}</option>
                                                @endforeach
                                            </select>


                                        </div>

                                        {{-- <div class="form-group col-sm-3">
                                            <label for="type">Select Plan:</label>
                                            <select name="plan" id="type"
                                                class="form-control @error('plan') is-invalid @enderror">
                                                <option value=""> >>
                                                    Chouse Plan << </option>
                                                        @foreach ($plan as $item)
                                                <option value="{{ $item->id }}"
                                                    @if ($item->id == old('plan')) ? selected : '' @endif>
                                                    {{ $item->title }}</option>
                                                @endforeach

                                            </select>
                                            @error('plan')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div> --}}

                                        <div class="form-group col-sm-2">
                                            <label for="status">Status:</label>
                                            <select name="status" id="status"
                                                class="form-control @error('status') is-invalid @enderror">
                                                <option value=""> >> Chouse Type << </option>
                                                <option value="publish"
                                                    @if (old('status') == 'publish') ? selected : '' @endif>Publish
                                                </option>
                                                <option value="draft"
                                                    @if (old('status') == 'draft') ? selected : '' @endif>Draft</option>
                                            </select>
                                            @error('status')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div>

                                        <div class="form-group col-sm-3">
                                            <label for="tags">Image:</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>

                                        <div class="form-group col-sm-1">
                                            <label for="type">Icon:</label>
                                            <div>
                                                <button type="button"
                                                    class="btn btn-default iconpicker iconpicker-component"
                                                    name="icon_picker">
                                                    <i class="fas fa-list"></i>
                                                </button>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="form-group">
                                        <label for="tags">Description:</label>
                                        <textarea name="description" id="summernote" class="form-control @error('description') is-invalid @enderror"
                                            placeholder="Enter Description..." cols="30" rows="10">{{ old('description') }}</textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <!-- Page Seo  -->
                                    <div class="d-flex">
                                        <div class="form-group col-sm-6">
                                            <label for="meta_title">Meta Title:</label>
                                            <input type="text" name="meta_title"
                                                class="form-control @error('meta_title') is-invalid @enderror"
                                                placeholder="Enter Meta Title..." id="meta_title"
                                                value="{{ old('meta_title') }}">
                                            @error('meta_title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="meta_keywords">Meta Keywords:</label>
                                            <input type="text" name="meta_keywords"
                                                class="form-control @error('meta_keywords') is-invalid @enderror"
                                                placeholder="Enter Meta Keywords..." id="meta_keywords"
                                                value="{{ old('meta_keywords') }}">
                                            @error('meta_keywords')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                   
                                    <div class="form-group">
                                        <label for="meta_description">Meta Description:</label>
                                        <textarea name="meta_description" id="sumernote" class="form-control @error('meta_description') is-invalid @enderror"
                                            placeholder="Enter Meta Description..." cols="30" rows="10">{{ old('meta_description') }}</textarea>
                                        @error('meta_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Page Seo  -->

                                    <div class="form-group">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success"> <i
                                                    class="fas fa-save pr-1"></i>Create</button>
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
