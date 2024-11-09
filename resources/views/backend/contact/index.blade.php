@extends('layouts.admin-app')
@section('title', 'Contact Page')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Contact</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Contact</li>
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
                            <h3 class="card-title pt-2">
                                <i class="fas fa-list pr -2"></i> Contact List</h3>

                                {{-- <a href="#" class="btn btn-sm btn-primary" style="float: right;">
                                    <i class="fas fa-plus"></i> Add New</a> --}}

                                {{-- <a href="#" class="btn btn-sm btn-danger" style="float: right;"><i class="fas fa-trash-alt"></i> Trash List</a> --}}
                            </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th># Sl No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($contact as  $item)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->subject }}</td>
                                            <td>{{ Str::limit($item->message, 10) }}</td>

                                          
                                        </tr>
                                    @empty
                                        <td colspan="6" class="text-center">
                                            <span class="text-danger text-bold">
                                                No Data Found
                                            </span>
                                        </td>
                                    @endforelse

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
