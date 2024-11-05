@extends('layouts.website')
@section('content')
    <!--===  Header Start ===-->
    @include('frontend.components.TopHeader')
    <!--===  Header End ===-->

    <div class="page-middle">

        <!--===  Page Title Start ===-->
        <section class="pxa_page_title"
            style="background-image: url({{ asset('frontend') }}/public/pages/assets/images/Breadcrumbs.jpg);">
            <div class="pxa_page_title_opacity">
                <h2>Gallery</h2>
                <ul>
                    <li><a href="{{ asset('frontend') }}/https://preview.kamleshyadav.com/pixacms">Home /</a></li>
                    <li><a href="{{ asset('frontend') }}/javascript:void(0);">Gallery</a></li>
                </ul>
            </div>
        </section>
        <!--===  Page Title End ===-->

        <!--===  Gallery Start ===-->
        <div class="pxa_istop_gallery">
            <div class="pxa_container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="pxa_project_gallery">
                            <div class="gallery_nav">
                                <ul>
                                    <li>
                                        <a data-filter="*" class="gallery_active">All Categories {{ $gallery->count() }}</a>
                                    </li>
                                    @foreach ($categoryList as $category)
                                        @if ($category->type == 'gallery')
                                            {{-- <option value="{{ $category->id }}">{{ $category->name }}</option> --}}

                                            <li>
                                                <a data-filter=".{{ $category->id }}"> {{ $category->name }} {{ $category->gallery->count() }} </a>
                                            </li>
                                        @endif
                                    @endforeach
                                    {{-- <li><a data-filter=".category-15"> IT Development </a></li>
                                    <li><a data-filter=".category-22"> Business </a></li> --}}
                                </ul>
                            </div>
                            <div class="gallery_grid">

                                <!-- Item start -->

                                @if ($gallery->count() > 0)
                                    @foreach ($gallery as $item)
                                        <div class="grid-item fancy-gallery {{ $item->cat_id }}">
                                            <a href="{{ asset($item->image) }}" class="mb-4 col-6 col-sm-4 img-fluid"
                                                data-fancybox="images" data-caption="Galery 01">
                                                <img class="" src="{{ asset($item->image) }}" alt=""
                                                    class="img-fluid" width="100%" height="280px" />
                                            </a>
                                        </div>
                                    @endforeach
                                @else
                                    <span>No Data Found</span>
                                @endif


                                <!-- Item start -->




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===  Gallery End ===-->
    </div>
@endsection
