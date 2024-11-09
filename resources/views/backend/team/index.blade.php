@extends('layouts.admin-app')
@section('title', 'Team Member Page')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Team Member</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Team Member</li>
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
                                <i class="fas fa-users pr-1"></i> Team List</h3>
                            <a href="{{ route('team-member.create') }}" class="btn btn-success float-right">
                                <i class="fas fa-plus"></i> Create Team</a>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th># Sl No</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Social Link</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Ation</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($TeamMembers AS $item)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->designation }}</td>
                                            <td>
                                                <span class="badge bg-success">{{ $item->facebook }}</span>
                                                <span class="badge bg-info">{{ $item->twitter }}</span>
                                                <span class="badge bg-warning">{{ $item->linkedin }}</span>
                                                <span class="badge bg-primary">{{ $item->instagram }}</span>
                                                
                                            </td>

                                            <td>
                                                <img @if ($item->image) src="{{ asset($item->image) }}" @else src="{{ asset('uploads/no-image.png') }}" @endif
                                                    width="100" height="100" alt="">
                                            </td>

                                            <td>
                                                @if ($item->status == 'publish')
                                                    <span class="badge bg-success">Publish</span>
                                                @else
                                                    <span class="badge bg-danger">Draft</span>
                                                @endif
                                            </td>

                                            <td class="d-flex justify-content-between">
                                                <a href="{{ route('team-member.show', $item->id) }}"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>

                                                <a href="{{ route('team-member.edit', $item->id) }}"
                                                    class="btn btn-info btn-sm">
                                                    <i class="far fa-edit"></i>
                                                </a>

                                                <form action="{{ route('team-member.destroy', $item->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        onclick="DeleteConfirm(event)"
                                                        class="btn btn-danger btn-sm"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
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
