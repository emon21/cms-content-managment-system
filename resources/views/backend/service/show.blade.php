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
                <div class="row"></div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title pt-2"><i class="fas fa-eye pr-1"></i>Show Service</h3>
                            <a href="{{ route('service.index') }}" class="btn btn-outline-success float-right">
                                <i class="fas fa-list"></i> Service List
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <img @if ($Service->image) src="{{ asset($Service->image) }}" @else src="{{ asset('uploads/no-image.png') }}" @endif
                                width="250px" height="180px" class="mb-4">
                            <table class="table table-bordered table-striped table-hover">
                               
                                <tbody>
                                    <tr>
                                        <th>Title</th>
                                        <th>:</th>
                                        <td>{{ $Service->title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Heading</th>
                                        <th>:</th>
                                        <td>{{ $Service->heading }}</td>
                                    </tr>
                                    <tr>
                                        <th>Icon</th>
                                        <th>:</th>
                                        <td>{{ $Service->icon }}</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <th>:</th>
                                        <td>{{ $Service->description }}</td>
                                    </tr>
                                    <tr>
                                        <th>Meta Title</th>
                                        <th>:</th>
                                        <td>{{ $Service->meta_title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Meta Description</th>
                                        <th>:</th>
                                        <td>{{ $Service->meta_description }}</td>
                                    </tr>
                                    <tr>
                                        <th>Meta Keyword</th>
                                        <th>:</th>
                                        <td>{{ $Service->meta_keywords }}</td>
                                    </tr>
                                    
                                   
                                    <tr>
                                        <th>Category</th>
                                        <th>:</th>
                                        <td>{{ $Service->category->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Plan</th>
                                        <th>:</th>
                                        <td>{{ $Service->plan->title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <th>:</th>
                                        <td>
                                            @if ($Service->status == 'publish')
                                                <span class="badge bg-success">Publish</span>
                                            @else
                                                <span class="badge bg-danger">Draft</span>
                                            @endif
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
