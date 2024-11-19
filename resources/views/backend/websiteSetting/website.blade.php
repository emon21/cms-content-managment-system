@extends('layouts.admin-app')
@section('title', 'Website Setting Page')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">

            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="col-12">

                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-edit"></i>
                                Website Setting
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-2">

                                    <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                                        aria-orientation="vertical">

                                        <a class="nav-link active" id="site-setting-tab" data-toggle="pill"
                                            href="#site-setting" role="tab" aria-controls="site-setting"
                                            aria-selected="false">
                                            Site Setting</a>

                                        <a class="nav-link " id="color-setting-tab" data-toggle="pill" href="#color-setting"
                                            role="tab" aria-controls="color-setting" aria-selected="false">
                                            Color Setting</a>

                                        <a class="nav-link " id="image-setting-tab" data-toggle="pill" href="#image-setting"
                                            role="tab" aria-controls="image-setting" aria-selected="false">
                                            Images Setting</a>

                                        <a class="nav-link " id="seo-setting-tab" data-toggle="pill" href="#seo-setting"
                                            role="tab" aria-controls="seo-setting" aria-selected="false">
                                            Seo Setting</a>

                                    </div>

                                </div>

                                <div class="col-sm-10">

                                    <div class="tab-content" id="vert-tabs-tabContent">

                                        <!-- Site Setting -->
                                        <div class="tab-pane fade active show" id="site-setting" role="tabpanel"
                                            aria-labelledby="site-setting-tab">
                                            <div class="card">
                                                <div class="card-header bg-success">Site Setting</div>
                                                <div class="card-body">
                                                    <form action="{{ route('site.update', $website) }}" method="POST">
                                                        @csrf

                                                        <div class="d-flex">

                                                            <div class="form-group col-sm-6">
                                                                <label for="site_name">Site Name :</label>
                                                                <input type="text" name="site_name" class="form-control"
                                                                    id="site_name" value="{{ $website->site_name }}">
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="site_title">Site Title :</label>
                                                                <input type="text" name="site_title" class="form-control"
                                                                    id="site_title" value="{{ $website->site_title }}">
                                                            </div>

                                                        </div>

                                                        <div class="d-flex">

                                                            <div class="form-group col-sm-6">
                                                                <label for="site_email">Site Email :</label>
                                                                <input type="email" name="site_email" class="form-control"
                                                                    id="site_email" value="{{ $website->site_email }}">
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="site_phone">Site Phone :</label>
                                                                <input type="number" name="site_phone" class="form-control"
                                                                    id="site_phone" value="{{ $website->site_phone }}">
                                                            </div>


                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="form-group col-sm-6">
                                                                <label for="site_address">Site Address :</label>
                                                                <textarea name="site_address" class="form-control" id="site_address" cols="10" rows="8"
                                                                    value="{{ $website->site_address }}">{{ $website->site_address }}</textarea>

                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="site_description">Site Description :</label>
                                                                <textarea name="site_description" class="form-control" id="site_description" value="{{ $website->site_description }}"
                                                                    cols="10" rows="8">{{ $website->site_description }}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex">
                                                            <div class="form-group col-sm-6">
                                                                <label for="meta_author">Author :</label>
                                                                <input type="text" name="meta_author"
                                                                    class="form-control" id="meta_author"
                                                                    value="{{ $website->meta_author }}">
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="site_copyright">Site Copyright :</label>
                                                                <input type="text" name="site_copyright"
                                                                    class="form-control" id="site_copyright"
                                                                    value="{{ $website->site_copyright }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-success">
                                                                <i class="fas fa-save pr-1"></i>
                                                                Update
                                                            </button>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Site Setting -->

                                        <!-- Color Setting -->
                                        <div class="tab-pane fade" id="color-setting" role="tabpanel"
                                            aria-labelledby="color-setting-tab">
                                            <div class="card card-success">
                                                <div class="card-header">
                                                    <h3 class="card-title">Color Setting</h3>
                                                </div>
                                                <!-- /.card-header -->
                                                <!-- form start -->

                                                <div class="card-body">

                                                    <form action="{{ route('color.update', $website) }}" method="POST">
                                                        @csrf

                                                        <div class="d-flex">
                                                            <div class="form-group col-sm-3">
                                                                <label>Primary Color:</label>

                                                                <div id="color1"
                                                                    class="input-group my-colorpicker2 colorpicker-element"
                                                                    data-colorpicker-id="2">
                                                                    <input type="text" class="form-control input-lg"
                                                                        data-original-title="" placeholder="Chouse Color"
                                                                        name="primary_color"
                                                                        value="{{ $website->primary_color }}">

                                                                    {{-- <div class="input-group-append">
                                                                        <span
                                                                            class="input-group-text colorpicker-input-addon">
                                                                            <i class="fas fa-square"></i>
                                                                        </span>
                                                                    </div> --}}
                                                                    <span class="input-group-append">
                                                                        <span
                                                                            class="input-group-text colorpicker-input-addon"><i></i></span>
                                                                    </span>
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>

                                                            <div class="form-group col-sm-3">
                                                                <label>Secondary Color:</label>

                                                                <div id="color2"
                                                                    class="input-group my-colorpicker2 colorpicker-element"
                                                                    data-colorpicker-id="2">
                                                                    <input type="text" class="form-control"
                                                                        data-original-title="" placeholder="Chouse Color"
                                                                        name="secondary_color"
                                                                        value="{{ $website->secondary_color }}">

                                                                    <div class="input-group-append">
                                                                        <span
                                                                            class="input-group-text colorpicker-input-addon"><i></i></span>
                                                                    </div>
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>

                                                            <div class="form-group col-sm-3">
                                                                <label>Title Color:</label>

                                                                <div id="color3"
                                                                    class="input-group my-colorpicker2 colorpicker-element"
                                                                    data-colorpicker-id="2">
                                                                    <input type="text" class="form-control"
                                                                        data-original-title="" placeholder="Chouse Color"
                                                                        name="title_color"
                                                                        value="{{ $website->title_color }}">

                                                                    <div class="input-group-append">
                                                                        <span
                                                                            class="input-group-text colorpicker-input-addon"><i></i></span>
                                                                    </div>
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>

                                                            <div class="form-group col-sm-3">
                                                                <label>Text Color:</label>

                                                                <div id="color4"
                                                                    class="input-group my-colorpicker2 colorpicker-element"
                                                                    data-colorpicker-id="2">
                                                                    <input type="text" class="form-control"
                                                                        data-original-title="" placeholder="Chouse Color"
                                                                        name="text_color"
                                                                        value="{{ $website->text_color }}">

                                                                    <div class="input-group-append">
                                                                        <span
                                                                            class="input-group-text colorpicker-input-addon"><i></i></span>
                                                                    </div>
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>


                                                        </div>

                                                        <div class="d-flex">
                                                            <div class="form-group col-sm-3">
                                                                <label>Body Color:</label>
                                                                <div id="color5"
                                                                    class="input-group my-colorpicker2 colorpicker-element"
                                                                    data-colorpicker-id="2">
                                                                    <input type="text" class="form-control"
                                                                        data-original-title="" placeholder="Chouse Color"
                                                                        name="body_color"
                                                                        value="{{ $website->body_color }}">

                                                                    <div class="input-group-append">
                                                                        <span
                                                                            class="input-group-text colorpicker-input-addon"><i></i></span>
                                                                    </div>
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>

                                                             <div class="form-group col-sm-3">
                                                                <label>Body Font:</label>
                                                                <div class="input-group my-colorpicker2 colorpicker-element"
                                                                    data-colorpicker-id="2">

                                                                    <input type="text" class="form-control"
                                                                        data-original-title="" placeholder="Chouse Color"
                                                                        name="body_color"
                                                                        value="{{ $website->body_color }}">


                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"><i
                                                                                class="fas fa-square"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="form-group col-sm-3">
                                                                <label>Primary Font:</label>
                                                                <div id="color6"
                                                                    class="input-group my-colorpicker2 colorpicker-element"
                                                                    data-colorpicker-id="2">
                                                                    <input type="text" class="form-control"
                                                                        data-original-title="" placeholder="Chouse Color"
                                                                        name="primary_font"
                                                                        value="{{ $website->primary_font }}">

                                                                    <div class="input-group-append">
                                                                        <span
                                                                            class="input-group-text colorpicker-input-addon"><i></i></span>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                             <div class="form-group col-sm-3">
                                                                <label>Secondary Font:</label>
                                                                <div class="input-group my-colorpicker2 colorpicker-element"
                                                                    data-colorpicker-id="2">

                                                                    <input type="text" class="form-control"
                                                                        data-original-title="" placeholder="Chouse Color"
                                                                        name="secondary_font"
                                                                        value="{{ $website->secondary_font }}">


                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"><i
                                                                                class="fas fa-square"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                            </div>


                                                        </div>

                                                        {{-- <div class="d-flex">
                                                            <div class="form-group col-sm-3">
                                                                <label>Body Color:</label>
                                                                <div class="input-group my-colorpicker2 colorpicker-element"
                                                                    >
                                                                    <input type="text" class="form-control"
                                                                       data-original-title="" placeholder="Chouse Color"
                                                                        name="body_color"
                                                                        value="{{ $website->body_color }}">

                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"><i
                                                                                class="fas fa-square"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>

                                                            <div class="form-group col-sm-3">
                                                                <label>Primary Font:</label>
                                                                <div class="input-group my-colorpicker2 colorpicker-element"
                                                                    data-colorpicker-id="2">
                                                                    <input type="text" class="form-control"
                                                                        data-original-title="" placeholder="Chouse Color"
                                                                        name="primary_font"
                                                                        value="{{ $website->primary_font }}">

                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"><i
                                                                                class="fas fa-square"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                            </div> 

                                                             <div class="form-group col-sm-3">
                                                                <label>Primary Font:</label>
                                                                <div id="color6"
                                                                    class="input-group my-colorpicker2 colorpicker-element"
                                                                    data-colorpicker-id="2">
                                                                    <input type="text" class="form-control"
                                                                        data-original-title="" placeholder="Chouse Color"
                                                                        name="primary_font"
                                                                        value="{{ $website->primary_font }}">

                                                                    <div class="input-group-append">
                                                                        <span
                                                                            class="input-group-text colorpicker-input-addon"><i></i></span>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="form-group col-sm-3">
                                                                <label>Secondary Font:</label>
                                                                <div class="input-group my-colorpicker2 colorpicker-element"
                                                                    data-colorpicker-id="2">

                                                                    <input type="text" class="form-control"
                                                                        data-original-title="" placeholder="Chouse Color"
                                                                        name="secondary_font"
                                                                        value="{{ $website->secondary_font }}">


                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"><i
                                                                                class="fas fa-square"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div> --}}




                                                        <button type="submit" class="btn btn-success">
                                                            <i class="fas fa-save pr-1"></i>Update
                                                            </button>

                                                    </form>

                                                </div>
                                                <!-- /.card-body -->


                                            </div>
                                        </div>
                                        <!-- Color Setting -->

                                        <!-- image Setting -->
                                        <div class="tab-pane fade" id="image-setting" role="tabpanel"
                                            aria-labelledby="image-setting-tab">
                                            <div class="card">
                                                <div class="card-header bg-success">Images Setting</div>
                                                <div class="card-body">
                                                     <form action="{{ route('image.update', $website) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf

                                                         {{-- <input type="file" name="site_logo"
                                                                class="form-control dropify" data-image="{{$website->site_log}}"
                                                                data-default-file="{{ asset($website->site_log) }}"
                                                                data-min-height="200" id="logo"
                                                                value="{{ $website->site_logo }}"> data-default-file="{{ asset($product->image) }}" data-image="{{$website->site_logo}}" --}}

                                                    <!-- img -->
                                                    <div class="d-flex gap-2">
                                                        <div class="form-group col-sm-4">
                                                            <label for="logo">Site Logo :</label>
                                                            <input type="file"  name="site_logo"
                                                                class="form-control dropify" data-default-file="{{asset($website->site_logo)}}"
                                                                
                                                                data-min-height="200" id="logo"
                                                                >
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="favicon">White Logo :</label>
                                                            <input type="file" name="white_logo"
                                                                class="form-control dropify"
                                                                data-default-file="{{ asset($website->site_WhiteLogo) }}"
                                                                data-min-height="200" id="favicon"
                                                                >
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="favicon">Favicon :</label>
                                                            <input type="file" name="favicon"
                                                                class="form-control dropify"
                                                                data-default-file="{{ asset($website->site_favicon) }}"
                                                                data-min-height="200" id="favicon"
                                                                >
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-success">
                                                            <i class="fas fa-save pr-1"></i>
                                                            Update
                                                        </button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- image Setting -->

                                        <!-- Seo Setting -->
                                        <div class="tab-pane fade" id="seo-setting" role="tabpanel"
                                            aria-labelledby="seo-setting-tab">
                                            <div class="card">
                                                <div class="card-header bg-success">Seo Setting</div>
                                                <div class="card-body">
                                                     <form action="{{ route('seo.update', $website) }}" method="POST">
                                                        @csrf

                                                    <div class="d-flex">
                                                        <div class="form-group col-sm-4">
                                                            <label for="meta_title">Meta Title :</label>
                                                            <input type="text" name="meta_title" class="form-control"
                                                                id="meta_title" value="{{ $website->meta_title }}">
                                                        </div>

                                                        <div class="form-group col-sm-4">
                                                            <label for="meta_description">Meta Description :</label>
                                                            <input type="text" name="meta_description"
                                                                class="form-control" id="meta_description"
                                                                value="{{ $website->meta_description }}">
                                                        </div>

                                                        <div class="form-group col-sm-4">
                                                            <label for="meta_keywords">Meta Keywords :</label>
                                                            <input type="text" name="meta_keywords"
                                                                class="form-control" id="meta_keywords"
                                                                value="{{ $website->meta_keywords }}">
                                                        </div>
                                                    </div>


                                                    <div class="d-flex">
                                                        <div class="form-group col-sm-4">
                                                            <label for="site_facebook">Facebook URL Link :</label>
                                                            <input type="text" name="site_facebook"
                                                                class="form-control" id="site_facebook"
                                                                value="{{ $website->site_facebook }}">
                                                        </div>

                                                        <div class="form-group col-sm-4">
                                                            <label for="site_twitter">Twitter URL Link :</label>
                                                            <input type="text" name="site_twitter"
                                                                class="form-control" id="site_twitter"
                                                                value="{{ $website->site_twitter }}">
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="site_linkedin">Linkedin URL Link :</label>
                                                            <input type="text" name="site_linkedin"
                                                                class="form-control" id="site_linkedin"
                                                                value="{{ $website->site_linkedin }}">
                                                        </div>
                                                    </div>

                                                    <div class="d-flex">
                                                        <div class="form-group col-sm-4">
                                                            <label for="site_instagram">Instagram URL Link :</label>
                                                            <input type="text" name="site_instagram"
                                                                class="form-control" id="site_instagram"
                                                                value="{{ $website->site_instagram }}">
                                                        </div>



                                                        <div class="form-group col-sm-4">
                                                            <label for="site_youtube">Youtube URL Link :</label>
                                                            <input type="text" name="site_youtube"
                                                                class="form-control" id="site_youtube"
                                                                value="{{ $website->site_youtube }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-success">
                                                            <i class="fas fa-save pr-1"></i>Update
                                                        </button>
                                                    </div>

                                                     </form>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Seo Setting -->

                                    </div>

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
