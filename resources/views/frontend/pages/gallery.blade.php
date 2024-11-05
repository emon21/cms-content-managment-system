@extends('layouts.website')
@section('content')
    <!--===  Header Start ===-->
    @include('frontend.components.TopHeader')
    <!--===  Header End ===-->

    <div class="page-middle">
           
            <!--===  Page Title Start ===-->
    <section class="pxa_page_title" style="background-image: url({{ asset('frontend') }}/public/pages/assets/images/Breadcrumbs.jpg);">
        <div class="pxa_page_title_opacity">
            <h2>Gallery</h2>
            <ul>
                <li><a href="{{ asset('frontend')}}/https://preview.kamleshyadav.com/pixacms">Home /</a></li>
                <li><a href="{{ asset('frontend')}}/javascript:void(0);">Gallery</a></li>
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
                                <li><a data-filter="*" class="gallery_active">All Categories</a></li>
                                                                    <li><a data-filter=".category-13"> All Projects </a></li>
                                                                    <li><a data-filter=".category-15"> IT Development </a></li>
                                                                    <li><a data-filter=".category-22"> Business </a></li>
                                                            </ul>
                        </div>
                        <div class="gallery_grid">

                                                                                                                                        <div class="grid-item fancy-gallery category-15">
                                            <a href="{{ asset('frontend')}}/public/storage/galleryImage/january2024/ENJsGngL1RfwCr0GZpCQZJKOmSQlZvuHF9wtS1xg.jpg" class="mb-4 col-6 col-sm-4 img-fluid"
                                                data-fancybox="images" data-caption="Galery 01">
                                                <img class="" src="{{ asset('frontend')}}/public/storage/galleryImage/january2024/ENJsGngL1RfwCr0GZpCQZJKOmSQlZvuHF9wtS1xg.jpg" alt="" />
                                            </a>
                                        </div>
                                                                                                                                                <div class="grid-item fancy-gallery category-22">
                                            <a href="{{ asset('frontend')}}/public/storage/galleryImage/january2024/EGa1Z1r08Hs7EBx2NWNpiPqCmipeB3GhBAoSbfkS.jpg" class="mb-4 col-6 col-sm-4 img-fluid"
                                                data-fancybox="images" data-caption="Galery 02">
                                                <img class="" src="{{ asset('frontend')}}/public/storage/galleryImage/january2024/EGa1Z1r08Hs7EBx2NWNpiPqCmipeB3GhBAoSbfkS.jpg" alt="" />
                                            </a>
                                        </div>
                                                                                                                                                <div class="grid-item fancy-gallery category-23">
                                            <a href="{{ asset('frontend')}}/public/storage/galleryImage/january2024/vRIfCa9wOEg0CycwrzY0kjIeuFi2ct17eSgY9mlN.jpg" class="mb-4 col-6 col-sm-4 img-fluid"
                                                data-fancybox="images" data-caption="Galery 03">
                                                <img class="" src="{{ asset('frontend')}}/public/storage/galleryImage/january2024/vRIfCa9wOEg0CycwrzY0kjIeuFi2ct17eSgY9mlN.jpg" alt="" />
                                            </a>
                                        </div>
                                                                                                                                                <div class="grid-item fancy-gallery category-23">
                                            <a href="{{ asset('frontend')}}/public/storage/galleryImage/january2024/8Tv2Lh2FcLhoWy7tpznuihYi7cv2XUxmq1Xwkciu.jpg" class="mb-4 col-6 col-sm-4 img-fluid"
                                                data-fancybox="images" data-caption="Galery 04">
                                                <img class="" src="{{ asset('frontend')}}/public/storage/galleryImage/january2024/8Tv2Lh2FcLhoWy7tpznuihYi7cv2XUxmq1Xwkciu.jpg" alt="" />
                                            </a>
                                        </div>
                                                                                                                                                <div class="grid-item fancy-gallery category-13">
                                            <a href="{{ asset('frontend')}}/public/storage/galleryImage/january2024/4Krxp657B5cg0er365Vs2M9NqUbSkgR4ijdsEEFM.jpg" class="mb-4 col-6 col-sm-4 img-fluid"
                                                data-fancybox="images" data-caption="Galery 05">
                                                <img class="" src="{{ asset('frontend')}}/public/storage/galleryImage/january2024/4Krxp657B5cg0er365Vs2M9NqUbSkgR4ijdsEEFM.jpg" alt="" />
                                            </a>
                                        </div>
                                                                                                                                                <div class="grid-item fancy-gallery category-23">
                                            <a href="{{ asset('frontend')}}/public/storage/galleryImage/january2024/iTFdOrZ2z24g6Fqm17BwaO1qmrS9DPbiFPwiNGIi.jpg" class="mb-4 col-6 col-sm-4 img-fluid"
                                                data-fancybox="images" data-caption="Galery 06">
                                                <img class="" src="{{ asset('frontend')}}/public/storage/galleryImage/january2024/iTFdOrZ2z24g6Fqm17BwaO1qmrS9DPbiFPwiNGIi.jpg" alt="" />
                                            </a>
                                        </div>
                                                                                                                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===  Gallery End ===-->
        </div>

    
@endsection
