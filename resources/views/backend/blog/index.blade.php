@extends('layouts.admin-app')
@section('title', 'Blog Page')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Blog</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Blog</li>
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
                            <h3 class="card-title pt-2">Blog</h3>
                            {{-- <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                data-target="#CreateCtegory">
                                Add item
                            </button> --}}

                            <a href="{{ route('blog.create') }}" class="btn btn-primary float-right">Create Blog</a>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th># Sl No</th>
                                        <th>Name</th>
                                        <th>category</th>
                                        <th>Tags</th>
                                        <th>Picture</th>
                                        <th>Status</th>
                                        <th>Ation</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($blog as  $item)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->category->name }}</td>
                                            <td>{{ $item->tags }}</td>
                                            <td>
                                                <img @if ($item->image) src="{{ asset($item->image) }}" @else src="{{ asset('uploads/no-image.png') }}" @endif
                                                    width="120" height="80">
                                            </td>
                                            <td>
                                                @if ($item->status == 'Publish')
                                                    <span class="badge bg-success">Publish</span>
                                                @else
                                                    <span class="badge bg-danger">Draft</span>
                                                @endif
                                            </td>
                                            <td class="d-flex justify-content-between">
                                                <a href="{{ route('blog.show', $item->slug) }}"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>

                                                <a href="{{ route('blog.edit', $item->slug) }}" class="btn btn-info btn-sm">
                                                    <i class="far fa-edit"></i>
                                                </a>

                                                {{-- <a href="{{ route('item.destroy',$item->id) }}" class="btn btn-danger btn-sm">
                                              <i class="fas fa-trash-alt"></i>
                                               </a> --}}



                                                <form action="{{ route('blog.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    {{-- <input type="hidden" value="DELETE" name="_method"> --}}
                                                    {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
                                                    <button type="submit"
                                                        onclick="return confirm('Are you sure you want to delete this item?')"
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
