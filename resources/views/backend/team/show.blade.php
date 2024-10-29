@extends('layouts.admin-app')
@section('title', 'Show | Team')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Show Team</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Team</li>
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
                        <div class="card-header bg-dark">
                            <h3 class="card-title pt-2">Show Team Member</h3>
                            <a href="{{ route('team-member.index') }}" class="btn btn-outline-warning float-right">
                                <i class="fas fa-undo-alt"></i> Back
                                
                           </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <img  @if ($teamMember->image) src="{{ asset($teamMember->image) }}" @else src="{{ asset('uploads/no-image.png') }}" @endif
                                                width="250px" height="180px">
                            <table class="table table-bordered table-striped table-hover">
                                <tbody>
                                    <tr>
                                        <th>Name</th>
                                        <th>:</th>
                                        <td>{{ $teamMember->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>desigation</th>
                                        <th>:</th>
                                        <td>{{ $teamMember->designation }}</td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Social Link</th>
                                        <th>:</th>
                                        <td class="">
                                            {{-- @if ($teamMember->social_link)
                                                <a href="{{ $teamMember->social_link }}">{{ $teamMember->social_link }}</a>
                                            @endif --}}

                                            <span class="badge bg-success">{{ $teamMember->facebook }}</span>
                                            <span class="badge bg-info">{{ $teamMember->twitter }}</span>
                                            <span class="badge bg-warning">{{ $teamMember->linkedin }}</span>
                                            <span class="badge bg-primary">{{ $teamMember->instagram }}</span><span class="badge bg-danger">{{ $teamMember->youtube }}</span>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <th>:</th>
                                        <td>
                                            @if ($teamMember->status == 'publish')
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
