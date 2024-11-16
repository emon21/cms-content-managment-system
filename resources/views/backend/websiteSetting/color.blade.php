@extends('layouts.admin-app')
@section('title', 'Color Setting Page')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Color Setting</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                              <a href="{{ route('admin.dashboard') }}">Home</a>
                           </li>
                           <li class="breadcrumb-item active">Setting</li>
                           <li class="breadcrumb-item">Color</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="col-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">

                            <ul class="nav nav-tabs" id="color-tab" role="tablist">
                                
                                <li class="nav-item">
                                    <a class="nav-link active" id="color-tab-home" data-toggle="pill"
                                        href="#color-home" role="tab" aria-controls="color-home"
                                        aria-selected="false">Color</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="color-tab-home">

                                <div class="tab-pane fade active show" id="color-home" role="tabpanel"
                                    aria-labelledby="color-tab-home">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus
                                    ullamcorper dui
                                   
                                </div>

                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>

@endsection
