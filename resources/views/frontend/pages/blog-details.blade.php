@extends('layouts.website')
@section('content')
    <div class="page-header">
        <!--===  Header Start ===-->
        @include('frontend.components.TopHeader')
        <!--===  Header End ===-->
    </div>


    <!--===  Page Title Start ===-->
    <section class="pxa_page_title"
        style="background-image: url({{ asset('frontend') }}/public/pages/assets/images/Breadcrumbs.jpg)">
        <div class="pxa_container">
            <div class="pxa_page_title_opacity">
                <h2>{{ $blog->title }}</h2>
                <ul>
                    <li><a href="https://preview.kamleshyadav.com/pixacms">Home /</a></li>
                    <li><a href="all.html">Blog /</a></li>
                    <li><a href="javascript:void(0);">{{ $blog->slug }} </a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--===  Page Title End ===-->

    <!--===  Section Blog Start ===-->
    <section class="pxa_singleBlog_section">
        <div class="pxa_container">
            <div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

                <!-- SideBar start -->
                @include('frontend.components.blog-sidebar')
                <!-- Related Blog Start -->

                <section class="pxa_categories_box">

                    <div id="pxa_allBlog_filter_categories" class="pxa_filter_categories">
                        <h2 class="pxa_categories_widgetTitle">Related Posts</h2>
                        <ul class="pxa_filter_withImg">
                            @foreach ($blogList as $item)
                                <li class="pxa_imgTitle_item active">
                                    <a href="{{ route('website.blog.details', $item->slug) }}">
                                        <div class="pxa_items_img">
                                            <img src="{{ asset($item->image) }}" alt="img" />
                                        </div>
                                        <div class="pxa_items_title">
                                            <h3>{{ $item->title }}</h3>
                                            <ul>
                                                <li>
                                                    <i class="fa-regular fa-user"></i>
                                                    <p>By-Mia Parker</p>
                                                </li>
                                                <li>

                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    <p>10 months ago hgddd</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                     
                </section>

                

                <!-- Related Blog End -->

               
                <!-- SideBar End -->

</div>


                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card pxa_items_blog">
                                <img class="pxa_imgfix pxa_img_radius" src="{{ asset($blog->image) }}" alt="Blog"
                                    height="450" />
                                <div class="pxa_singleBlog_content">
                                    <div class="pxa_singleBlog_admin">
                                        <ul>
                                            <li>
                                                <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.15234 0C4.1169 0 2.46094 1.65596 2.46094 3.69141C2.46094 5.72685 4.1169 7.38281 6.15234 7.38281C8.18779 7.38281 9.84375 5.72685 9.84375 3.69141C9.84375 1.65596 8.18779 0 6.15234 0ZM10.7452 9.79439C9.73454 8.76824 8.39478 8.20312 6.97266 8.20312H5.33203C3.90994 8.20312 2.57015 8.76824 1.55952 9.79439C0.553848 10.8155 0 12.1634 0 13.5898C0 13.8164 0.183641 14 0.410156 14H11.8945C12.121 14 12.3047 13.8164 12.3047 13.5898C12.3047 12.1634 11.7508 10.8155 10.7452 9.79439Z"
                                                        fill="#B8B8B8" />
                                                </svg>
                                                <p>By-Emma Winters</p>
                                            </li>
                                            <li>
                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.3645 0H11.9626V1.40187C11.9626 1.68224 11.729 1.86916 11.4953 1.86916C11.2617 1.86916 11.028 1.68224 11.028 1.40187V0H3.5514V1.40187C3.5514 1.68224 3.31776 1.86916 3.08411 1.86916C2.85047 1.86916 2.61682 1.68224 2.61682 1.40187V0H1.21495C0.514019 0 0 0.607477 0 1.40187V3.08411H14.9533V1.40187C14.9533 0.607477 14.1122 0 13.3645 0ZM0 4.06542V12.6168C0 13.4579 0.514019 14.0187 1.26168 14.0187H13.4112C14.1589 14.0187 15 13.4112 15 12.6168V4.06542H0ZM4.15888 11.9159H3.03738C2.85047 11.9159 2.66355 11.7757 2.66355 11.5421V10.3738C2.66355 10.1869 2.80374 10 3.03738 10H4.20561C4.39252 10 4.57944 10.1402 4.57944 10.3738V11.5421C4.53271 11.7757 4.39252 11.9159 4.15888 11.9159ZM4.15888 7.71028H3.03738C2.85047 7.71028 2.66355 7.57009 2.66355 7.33645V6.16822C2.66355 5.98131 2.80374 5.79439 3.03738 5.79439H4.20561C4.39252 5.79439 4.57944 5.93458 4.57944 6.16822V7.33645C4.53271 7.57009 4.39252 7.71028 4.15888 7.71028ZM7.8972 11.9159H6.72897C6.54206 11.9159 6.35514 11.7757 6.35514 11.5421V10.3738C6.35514 10.1869 6.49533 10 6.72897 10H7.8972C8.08411 10 8.27103 10.1402 8.27103 10.3738V11.5421C8.27103 11.7757 8.13084 11.9159 7.8972 11.9159ZM7.8972 7.71028H6.72897C6.54206 7.71028 6.35514 7.57009 6.35514 7.33645V6.16822C6.35514 5.98131 6.49533 5.79439 6.72897 5.79439H7.8972C8.08411 5.79439 8.27103 5.93458 8.27103 6.16822V7.33645C8.27103 7.57009 8.13084 7.71028 7.8972 7.71028ZM11.6355 11.9159H10.4673C10.2804 11.9159 10.0935 11.7757 10.0935 11.5421V10.3738C10.0935 10.1869 10.2336 10 10.4673 10H11.6355C11.8224 10 12.0093 10.1402 12.0093 10.3738V11.5421C12.0093 11.7757 11.8692 11.9159 11.6355 11.9159ZM11.6355 7.71028H10.4673C10.2804 7.71028 10.0935 7.57009 10.0935 7.33645V6.16822C10.0935 5.98131 10.2336 5.79439 10.4673 5.79439H11.6355C11.8224 5.79439 12.0093 5.93458 12.0093 6.16822V7.33645C12.0093 7.57009 11.8692 7.71028 11.6355 7.71028Z"
                                                        fill="#B8B8B8" />
                                                </svg>

                                                <p>10 months ago</p>
                                            </li>



                                        </ul>
                                        <div class="pt-2  d-flex gap-2">
                                            <div>
                                                <i class="fa fa-tags text-info" aria-hidden="true"></i>
                                                Tags : <span class="text-bold">{{ strtoUpper($blog->tags) }}</span>
                                            </div>

                                            <div>
                                                <i class="fa fa-exclamation-circle text-success text-lg"
                                                    aria-hidden="true"></i>
                                                <span>Category : {{ ucfirst($blog->category->name) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pxa_singleBlog_innner">
                                        <h4 class="pxa_metacontent_heading mb-2"> {{ $blog->title }}</h4>
                                        <div class="pxa_metacontent">
                                            <p>{{ $blog->description }}</p>

                                        </div>
                                        <p>Tags: {{ $blog->tags }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--===  Section Blog Start ===-->
@endsection
