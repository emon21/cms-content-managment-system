@extends('layouts.admin-app')
@section('title', 'Price Plan')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>item</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">item</li>
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
                            <h3 class="card-title pt-2">item</h3>

                            {{-- <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;"></div>
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                    </div>
                                </div> --}}

                            <a href="{{ route('PricePlan.create') }}" class="btn btn-primary float-right">Add Plan</a>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th># Sl No</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Plan</th>
                                        <th>Status</th>
                                        <th>Ation</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($pricePlan as  $item)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->category->name }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>
                                                @if ($item->type == 'monthly')
                                                    <span class="badge bg-success">Monthly</span>
                                                @else
                                                    <span class="badge bg-info">Yearly</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->status == 'publish')
                                                    <span class="badge bg-success">Publish</span>
                                                @else
                                                    <span class="badge bg-danger">Draft</span>
                                                @endif
                                            </td>

                                            <td class="d-flex justify-content-between">
                                                <a href="{{ route('PricePlan.show', $item->id) }}"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>

                                                <a href="{{ route('PricePlan.edit', $item->id) }}"
                                                    class="btn btn-info btn-sm">
                                                    <i class="far fa-edit"></i>
                                                </a>

                                                {{-- <a href="{{ route('item.destroy',$item->id) }}" class="btn btn-danger btn-sm">
                                              <i class="fas fa-trash-alt"></i>
                                               </a> --}}

                                                <form action="{{ route('PricePlan.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        onclick="return confirm('Are you sure you want to delete this item?')"
                                                        class="btn btn-danger btn-sm"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <td colspan="5" class="text-center">
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

    <script>
        function previewImage(event) {
            var input = event.target;
            var image = document.getElementById('previewImg');
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    image.src = e.target.result;
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection
