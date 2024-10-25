@extends('layouts.admin-app')
@section('title', 'Price Plan')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Price Plan create</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Price Plan</li>
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
                                <h3 class="card-title pt-2">Price Plan</h3>
                                <a href="{{ route('PricePlan.index') }}" class="btn btn-primary float-right"> Price Plan
                                    List</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('PricePlan.update', $PricePlan->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="d-flex ga-4 align-item-center">
                                        <div class="form-group col-sm-6">
                                            <label for="title">Title:</label>
                                            <input type="text" name="title" value="{{ $PricePlan->title }}"
                                                class="form-control" placeholder="Enter Title..." id="title">
                                        </div>



                                        <div class="form-group col-sm-6">
                                            <label for="price">Price:</label>
                                            <input type="number" name="price" class="form-control"
                                                value="{{ $PricePlan->price }}" placeholder="Enter Price..." id="price">
                                        </div>

                                    </div>

                                    <div class="d-flex">
                                        <div class="form-group col-sm-4">
                                            <label for="type">Choose Price Plan
                                                :</label>
                                            <select name="plan" id="type" class="form-control">

                                                <option value="">Chouse Plan</option>
                                                <option value="monthly" @if ($PricePlan->type == 'monthly') selected @endif>
                                                    Monthly</option>
                                                <option value="yearly" @if ($PricePlan->type == 'yearly') selected @endif>
                                                    Yearly</option>


                                            </select>
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="type">Category:</label>
                                            <select name="cat_id" id="type" class="form-control">
                                                <option value=""> >>
                                                    Select Category << </option>
                                                        @foreach ($category as $item)
                                                            @if ($item->type == 'priceplan')
                                                <option value="{{ $item->id }}"
                                                    @if ($item->id == $PricePlan->cat_id) selected @endif>{{ $item->name }}
                                                </option>
                                                @endif
                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="form-group col-sm-3">
                                            <label for="status">Status:</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value=""> >> chouse Status<< </option>
                                                <option value="publish" @if ($PricePlan->status == 'publish') selected @endif>
                                                    Publish</option>
                                                <option value="draft" @if ($PricePlan->status == 'draft') selected @endif>
                                                    Draft</option>
                                            </select>
                                        </div>

                                    </div>


                                    <div class="form-group">
                                        <label for="tags">Features:</label>
                                        <textarea name="features" id="" class="form-control" cols="30" rows="10">{{ $PricePlan->feature }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Update Plan</button>
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
