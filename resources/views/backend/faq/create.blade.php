@extends('layouts.admin-app')
@section('title', 'Faq')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Faq Create</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Faq</li>
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
                                    <i class="fas fa-plus pr-1"></i> Faq Create
                                </h3>
                                <a href="{{ route('faq.index') }}" class="btn btn-success float-right">
                                    <i class="fas fa-list pr-1"></i> Faq
                                    List</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('faq.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="d-flex ga-4 align-item-center">
                                        <div class="form-group col-sm-8">
                                            <label for="title">Title:</label>
                                            <input type="text" name="title"
                                                class="form-control @error('title') is-invalid @enderror"
                                                placeholder="Enter Title..." id="title" value="{{ old('title') }}">
                                            @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label for="status">Publish:</label>
                                            <select name="status" id="status"
                                                class="form-control @error('status') is-invalid @enderror">
                                                <option value=""> >> chouse Publish<< </option>
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

                                        <div class="form-group col-sm-2">
                                            <label for="status">Status:</label>
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-outline-primary btn-toggle active">
                                                    <input type="radio" name="FaqStatus" id="option1" autocomplete="off"
                                                        value="active" checked>Active
                                                </label>
                                                <label class="btn btn-outline-primary btn-toggle">
                                                    <input type="radio" name="FaqStatus" id="option2" autocomplete="off"
                                                        value="deactive">Inactive
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="tags">Description:</label>
                                        <textarea name="description" id="summernote" class="form-control" cols="10" rows="5"></textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fas fa-save pr-1"></i>
                                            Create
                                        </button>
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
