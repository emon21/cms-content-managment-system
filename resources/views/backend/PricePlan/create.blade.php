@extends('layouts.admin-app')
@section('title', 'Price Plan')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Plan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Plan</li>
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
                                <h3 class="card-title pt-2"><i class="fas fa-plus pr-1"></i>Create Plan</h3>
                                <a href="{{ route('price-plan.index') }}" class="btn btn-success float-right"> <i
                                        class="fas fa-list"></i> Plan
                                    List</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('price-plan.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="d-flex ga-4 align-item-center">
                                        <div class="form-group col-sm-6">
                                            <label for="title">Title:</label>
                                            <input type="text" name="title"
                                                class="form-control @error('title') is-invalid @enderror"
                                                placeholder="Enter Title..." id="title" value="{{ old('title') }}">
                                            @error('title')
                                                <span class="text-danger pt-2">{{ $message }}</span>
                                            @enderror
                                        </div>



                                        <div class="form-group col-sm-6">
                                            <label for="price">Price:</label>
                                            <input type="number" name="price"
                                                class="form-control @error('price') is-invalid @enderror"
                                                placeholder="Enter Price..." id="price" value="{{ old('price') }}">
                                            @error('price')
                                                <span class="text-danger pt-2">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="d-flex">
                                        <div class="form-group col-sm-4">
                                            <label for="type">Choose Price Plan
                                                :</label>
                                            <select name="plan" id="type"
                                                class="form-control @error('plan') is-invalid @enderror">

                                                <option value="">Chouse Plan</option>
                                                <option value="monthly"
                                                    @if (old('plan') == 'monthly') ? selected : '' @endif>Monthly
                                                </option>
                                                <option value="yearly"
                                                    @if (old('plan') == 'yearly') ? selected : '' @endif>Yearly</option>


                                            </select>
                                            @error('plan')
                                                <span class="text-danger pt-2">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="type">Category:</label>
                                            <select name="cat_id" id="type"
                                                class="form-control @error('cat_id') is-invalid @enderror">
                                                <option value=""> >>
                                                    Select Category << </option>
                                                        @foreach ($category as $item)
                                                            @if ($item->type == 'priceplan')
                                                         <option value="{{ $item->id }}" @if (old('cat_id') == $item->id) ? selected : '' @endif>
                                                            {{ $item->name }}</option>
                                                             @endif
                                                @endforeach

                                            </select>
                                            @error('cat_id')
                                                <span class="text-danger pt-2">{{ $message }}</span>
                                            @enderror

                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="status">Status:</label>
                                            <select name="status" id="status"
                                                class="form-control select2bs4 @error('status') is-invalid @enderror">
                                                <option value=""> >> chouse Status<< </option>
                                                <option value="publish"
                                                    @if (old('status') == 'publish') ? selected : '' @endif>Publish
                                                </option>
                                                <option value="draft"
                                                    @if (old('status') == 'draft') ? selected : '' @endif>Draft</option>
                                            </select>
                                            @error('status')
                                                <span class="text-danger pt-2">{{ $message }}</span>
                                            @enderror


                                        </div>

                                    </div>


                                    <div class="form-group">
                                        <label for="tags">Features:</label>
                                        <textarea name="features" id="summernote" class="form-control @error('features') is-invalid @enderror"></textarea>
                                        @error('features')
                                            <span class="text-danger pt-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"><i
                                                class="fas fa-save pr-1"></i>Create</button>
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
