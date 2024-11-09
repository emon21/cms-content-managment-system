@extends('layouts.admin-app')
@section('title', 'Category')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Price Plan</h1>
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
                <div class="row"></div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title pt-2">Single Price Plan</h3>
                            <a href="{{ route('price-plan.index') }}" class="btn btn-outline-success float-right">
                                <i class="fas fa-list"></i> Plan List
                                
                           </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                           
                            <table class="table table-bordered table-striped table-hover">
                                
                                <tbody>
                                    <tr>
                                        <th>Name</th>
                                        <th>:</th>
                                        <td>{{ $PricePlan->title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Price</th>
                                        <th>:</th>
                                        <td>{{ $PricePlan->price }}</td>
                                    </tr>
                                    <tr>
                                        <th>Type</th>
                                        <th>:</th>
                                        <td>{{ $PricePlan->type }}</td>
                                    </tr>
                                    <tr>
                                        <th>Category</th>
                                        <th>:</th>
                                        <td>{{ $PricePlan->category->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <th>:</th>
                                        <td>
                                            @if ($PricePlan->status == 'publish')
                                                <span class="badge bg-success">Publish</span>
                                            @else
                                                <span class="badge bg-danger">Draft</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Feature</th>
                                        <th>:</th>
                                        <td>
                                            {!! $PricePlan->feature !!}
                                        </td>
                                    </tr>

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





@endsection
