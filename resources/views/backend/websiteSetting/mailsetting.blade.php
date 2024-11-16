@extends('layouts.admin-app')
@section('title', 'Color Setting Page')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Mail Setting</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                              <a href="{{ route('admin.dashboard') }}">Home</a>
                           </li>
                           <li class="breadcrumb-item active">Setting</li>
                           <li class="breadcrumb-item">Mail Setting</li>
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
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-four-home-tab" data-toggle="pill"
                                        href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home"
                                        aria-selected="false">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                                        href="#custom-tabs-four-profile" role="tab"
                                        aria-controls="custom-tabs-four-profile" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-four-messages-tab" data-toggle="pill"
                                        href="#custom-tabs-four-messages" role="tab"
                                        aria-controls="custom-tabs-four-messages" aria-selected="true">Messages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill"
                                        href="#custom-tabs-four-settings" role="tab"
                                        aria-controls="custom-tabs-four-settings" aria-selected="false">Settings</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                                <div class="tab-pane fade" id="custom-tabs-four-home" role="tabpanel"
                                    aria-labelledby="custom-tabs-four-home-tab">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus
                                    ullamcorper dui
                                    molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat commodo.
                                    Etiam odio
                                    magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque
                                    tincidunt nisi,
                                    vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique senectus et
                                    netus et
                                    malesuada fames ac turpis egestas. Proin id orci eu lectus blandit suscipit. Phasellus
                                    porta, ante
                                    et varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus. Etiam ut
                                    porta sem.
                                    Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh cursus
                                    pulvinar non
                                    consequat neque. Mauris lacus elit, condimentum ac condimentum at, semper vitae lectus.
                                    Cras lacinia
                                    erat eget sapien porta consectetur.
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                                    aria-labelledby="custom-tabs-four-profile-tab">
                                    Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus
                                    ut ligula
                                    tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.
                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                    Maecenas
                                    sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula
                                    eu lectus.
                                    Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod
                                    pellentesque
                                    diam.
                                </div>
                                <div class="tab-pane fade active show" id="custom-tabs-four-messages" role="tabpanel"
                                    aria-labelledby="custom-tabs-four-messages-tab">
                                    Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus
                                    volutpat augue id
                                    mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem,
                                    ac
                                    tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut
                                    velit
                                    condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus
                                    tristique.
                                    Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet
                                    sollicitudin est
                                    libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu,
                                    id fermentum
                                    metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel"
                                    aria-labelledby="custom-tabs-four-settings-tab">
                                    Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus
                                    turpis ac,
                                    ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate.
                                    Morbi
                                    euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec
                                    interdum
                                    placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at
                                    consequat diam. Nunc
                                    et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet
                                    accumsan ex
                                    sit amet facilisis.
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
