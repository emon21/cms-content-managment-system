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
                                <a href="{{ route('price-plan.index') }}" class="btn btn-primary float-right"> Price Plan
                                    List</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('price-plan.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="d-flex ga-4 align-item-center">
                                        <div class="form-group col-sm-6">
                                            <label for="title">Title:</label>
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Enter Title..." id="title">
                                        </div>



                                        <div class="form-group col-sm-6">
                                            <label for="price">Price:</label>
                                            <input type="number" name="price" class="form-control"
                                                placeholder="Enter Price..." id="price">
                                        </div>

                                    </div>

                                    <div class="d-flex">
                                        <div class="form-group col-sm-4">
                                            <label for="type">Choose Price Plan
                                                :</label>
                                            <select name="plan" id="type" class="form-control">

                                                <option value="">Chouse Plan</option>
                                                <option value="monthly">Monthly</option>
                                                <option value="yearly">Yearly</option>


                                            </select>
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="type">Category:</label>
                                            <select name="cat_id" id="type" class="form-control">
                                                <option value=""> >>
                                                    Select Category << </option>
                                                        @foreach ($category as $item)
                                                            {{-- <option value="{{ $item->id }}">{{ $item->name }}</option> --}}

                                                            {{-- <option value="">{{ $item->type == 'Uncategoried' ? 'Uncategoried' : ' > '.$item->name }}</option> --}}

                                                            @if ($item->type == 'priceplan')
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endif
                                                {{-- <option value="{{ $item->id }}">
                                                    {{ ($item->type == 'priceplan')  $item->name }}</option> --}}
                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="form-group col-sm-3">
                                            <label for="status">Status:</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value=""> >> chouse Status<< </option>
                                                <option value="publish">Publish</option>
                                                <option value="draft">Draft</option>
                                            </select>
                                        </div>

                                    </div>


                                    <div class="form-group">
                                        <label for="tags">Features:</label>
                                        <textarea name="features" id="" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Create</button>
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
