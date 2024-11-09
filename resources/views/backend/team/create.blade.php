@extends('layouts.admin-app')
@section('title', 'Partner')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Team Create</h1>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title pt-2">
                                    <i class="fas fa-plus pr-1"></i>Create Team</h3>
                                <a href="{{ route('team-member.index') }}" class="btn btn-success float-right">
                                    <i class="fas fa-list pr-1"></i> Team List</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('team-member.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="d-flex align-item-center">
                                        <div class="form-group col-sm-6">
                                            <label for="title">Name:</label>
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                                placeholder="Enter Name..." id="title" value="{{ old('name') }}">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="title">Desagnation:</label>
                                            <input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror"
                                                placeholder="Enter Designation..." id="title" value="{{ old('designation') }}">
                                                @error('designation')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>

                                    </div>

                                    <div class="d-flex">

                                        <div class="form-group col-sm-6">
                                            <label for="">Status</label>
                                            <select name="status" class="form-control @error('status') is-invalid @enderror">
                                                <option value=""> Select Status</option>
                                                <option value="publish" @if(old('status')== 'publish') ? selected : '' @endif>Publish</option>
                                                <option value="draft" @if(old('status')== 'draft') ? selected : '' @endif>Draft</option>
                                            </select>
                                            @error('status')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="">Image</label>
                                            <input type="file" name="image" class="form-control">
                                            
                                        </div>
                                    </div>

                                    <div class="d-flex">
                                        <div class="form-group col-sm-3">
                                            <label for="">Facebook :</label>
                                            <input type="text" name="facebook" class="form-control @error('facebook') is-invalid @enderror" placeholder="Enter Facebook..." value="{{ old('facebook') }}">
                                            @error('facebook')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-sm-3">
                                            <label for="">Twitter :</label>
                                            <input type="text" name="twitter" class="form-control @error('twitter') is-invalid @enderror" placeholder="Enter Twitter..." value="{{ old('twitter') }}">
                                            @error('twitter')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-sm-3">
                                            <label for="">Instragram :</label>
                                            <input type="text" name="instagram" class="form-control @error('instagram') is-invalid @enderror" placeholder="Enter Instragram..." value="{{ old('instagram') }}">
                                            @error('instagram')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-sm-3">
                                            <label for="">Linkdin :</label>
                                            <input type="text" name="linkedin" class="form-control @error('linkedin') is-invalid @enderror" placeholder="Enter Linkdin..." value="{{ old('linkedin') }}">
                                            @error('linkedin')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>
                                            Create</button>
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
