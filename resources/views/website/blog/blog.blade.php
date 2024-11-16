@extends('layouts.website')
@section('content')

    <!--===  Page Title Start ===-->
    <section class="pxa_page_title"
        style="background-image: url({{ asset('frontend') }}/public/pages/assets/images/Breadcrumbs.jpg)">
        <div class="pxa_container">
            <div class="pxa_page_title_opacity">
                <h2>Our Blog</h2>
                <ul>
                    <li><a href="{{ route('website.home') }}">Home /</a></li>
                    <li><a href="javascript:void(0);">Blog</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--===  Page Title End ===-->

    <!--===  Section Blog Start ===-->
    <section class="pxa_allBlog_section">
        <div class="pxa_container">
            @if (request('search_keyword'))
                <div class="bg-dark text-light p-4 my-4 rounded">
                    <h4 class="text-center">Your Search Result is Total Blog hhh : {{ $blog->count() }}</h4>
                </div>
            @elseif ($blog->count() == 0)
                <div class="bg-dark text-light p-4 my-4 rounded">
                    <h4 class="text-center">Sorry! No Blog Found </h4>
                </div>
                @endif
        
        <div class="row">


            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

                <!-- SideBar start -->
                @include('website.components.blog-sidebar')
                <!-- SideBar End -->

            </div>

            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="pxa_allBlog_gird row">
                    @if ($blog->count() > 0)
                        @foreach ($blog as $item)
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-4">


                                <div class="pxa_allBlog_girdItem">

                                    <a href="{{ route('website.blog.details', $item->slug) }}">
                                        <img class="pxa_img_radius" src="{{ asset($item->image) }}" alt="Blog"
                                            height="250" width="100%" />
                                        <div class="pxa_allBlog_content">
                                            <ul class="pxa_itemsBlog_admin">
                                                <li>
                                                    <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.15234 0C4.1169 0 2.46094 1.65596 2.46094 3.69141C2.46094 5.72685 4.1169 7.38281 6.15234 7.38281C8.18779 7.38281 9.84375 5.72685 9.84375 3.69141C9.84375 1.65596 8.18779 0 6.15234 0ZM10.7452 9.79439C9.73454 8.76824 8.39478 8.20312 6.97266 8.20312H5.33203C3.90994 8.20312 2.57015 8.76824 1.55952 9.79439C0.553848 10.8155 0 12.1634 0 13.5898C0 13.8164 0.183641 14 0.410156 14H11.8945C12.121 14 12.3047 13.8164 12.3047 13.5898C12.3047 12.1634 11.7508 10.8155 10.7452 9.79439Z"
                                                            fill="#B8B8B8" />
                                                    </svg>
                                                    <p>By-Mia Parker</p>
                                                </li>
                                                <li>
                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.3645 0H11.9626V1.40187C11.9626 1.68224 11.729 1.86916 11.4953 1.86916C11.2617 1.86916 11.028 1.68224 11.028 1.40187V0H3.5514V1.40187C3.5514 1.68224 3.31776 1.86916 3.08411 1.86916C2.85047 1.86916 2.61682 1.68224 2.61682 1.40187V0H1.21495C0.514019 0 0 0.607477 0 1.40187V3.08411H14.9533V1.40187C14.9533 0.607477 14.1122 0 13.3645 0ZM0 4.06542V12.6168C0 13.4579 0.514019 14.0187 1.26168 14.0187H13.4112C14.1589 14.0187 15 13.4112 15 12.6168V4.06542H0ZM4.15888 11.9159H3.03738C2.85047 11.9159 2.66355 11.7757 2.66355 11.5421V10.3738C2.66355 10.1869 2.80374 10 3.03738 10H4.20561C4.39252 10 4.57944 10.1402 4.57944 10.3738V11.5421C4.53271 11.7757 4.39252 11.9159 4.15888 11.9159ZM4.15888 7.71028H3.03738C2.85047 7.71028 2.66355 7.57009 2.66355 7.33645V6.16822C2.66355 5.98131 2.80374 5.79439 3.03738 5.79439H4.20561C4.39252 5.79439 4.57944 5.93458 4.57944 6.16822V7.33645C4.53271 7.57009 4.39252 7.71028 4.15888 7.71028ZM7.8972 11.9159H6.72897C6.54206 11.9159 6.35514 11.7757 6.35514 11.5421V10.3738C6.35514 10.1869 6.49533 10 6.72897 10H7.8972C8.08411 10 8.27103 10.1402 8.27103 10.3738V11.5421C8.27103 11.7757 8.13084 11.9159 7.8972 11.9159ZM7.8972 7.71028H6.72897C6.54206 7.71028 6.35514 7.57009 6.35514 7.33645V6.16822C6.35514 5.98131 6.49533 5.79439 6.72897 5.79439H7.8972C8.08411 5.79439 8.27103 5.93458 8.27103 6.16822V7.33645C8.27103 7.57009 8.13084 7.71028 7.8972 7.71028ZM11.6355 11.9159H10.4673C10.2804 11.9159 10.0935 11.7757 10.0935 11.5421V10.3738C10.0935 10.1869 10.2336 10 10.4673 10H11.6355C11.8224 10 12.0093 10.1402 12.0093 10.3738V11.5421C12.0093 11.7757 11.8692 11.9159 11.6355 11.9159ZM11.6355 7.71028H10.4673C10.2804 7.71028 10.0935 7.57009 10.0935 7.33645V6.16822C10.0935 5.98131 10.2336 5.79439 10.4673 5.79439H11.6355C11.8224 5.79439 12.0093 5.93458 12.0093 6.16822V7.33645C12.0093 7.57009 11.8692 7.71028 11.6355 7.71028Z"
                                                            fill="#B8B8B8" />
                                                    </svg>
                                                    <p>{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                                    </p>
                                                </li>
                                            </ul>
                                            <div>

                                                <span> <i class="fas fa-tags"></i> {{ $item->category->name }} </span>
                                            </div>

                                            <h4>{{ $item->title }}</h4>
                                            <p class="text-justify">{{ Str::limit($item->description, 120) }}</p>
                                            <div class="pxa_allBlog_btn pxa_btn_wr">
                                                <a href="{{ route('website.blog.details', $item->slug) }}"
                                                    class="pxa_btn">Read More
                                                    <svg width="13" height="10" viewBox="0 0 13 10" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.44 4.01865L7.72 1.29865C7.64631 1.22998 7.58721 1.14718 7.54622 1.05518C7.50523 0.963184 7.48318 0.863871 7.48141 0.763167C7.47963 0.662464 7.49816 0.562437 7.53588 0.469049C7.5736 0.37566 7.62974 0.290826 7.70096 0.219607C7.77218 0.148389 7.85701 0.0922432 7.9504 0.0545225C8.04379 0.0168018 8.14382 -0.00172234 8.24452 5.43594e-05C8.34523 0.00183105 8.44454 0.0238724 8.53654 0.0648642C8.62854 0.105856 8.71134 0.164958 8.78 0.238645L12.78 4.23865C12.9205 4.37927 12.9993 4.56989 12.9993 4.76865C12.9993 4.9674 12.9205 5.15802 12.78 5.29865L8.78 9.29865C8.71134 9.37233 8.62854 9.43143 8.53654 9.47243C8.44454 9.51342 8.34523 9.53546 8.24452 9.53724C8.14382 9.53901 8.04379 9.52049 7.9504 9.48277C7.85701 9.44505 7.77218 9.3889 7.70096 9.31768C7.62974 9.24647 7.5736 9.16163 7.53588 9.06824C7.49816 8.97485 7.47963 8.87483 7.48141 8.77412C7.48318 8.67342 7.50523 8.57411 7.54622 8.48211C7.58721 8.39011 7.64631 8.30731 7.72 8.23865L10.44 5.51865L0.75 5.51865C0.551088 5.51865 0.360322 5.43963 0.21967 5.29897C0.0790175 5.15832 0 4.96756 0 4.76865C0 4.56973 0.0790175 4.37897 0.21967 4.23832C0.360322 4.09766 0.551088 4.01865 0.75 4.01865L10.44 4.01865Z"
                                                            fill="#EE3770"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <span class="alert alert-danger text-dark">No Data Found</span>
                    @endif

                </div>
                {{ $blog->links() }}


                <!-- Pagination Start --->
                <div class="pxa_pagination">
                    <nav class="d-flex justify-items-center justify-content-between">
                        <div class="d-flex justify-content-between flex-fill d-sm-none">
                            <ul class="pagination">
                                <li class="page-item disabled" aria-disabled="true">
                                    <span class="page-link">&laquo; Previous</span>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="all4658.html?page=2" rel="next">Next &raquo;</a>
                                </li>
                            </ul>
                        </div>
                        <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
                            <div>
                                <p class="small text-muted">
                                    Showing
                                    <span class="fw-semibold">1</span>
                                    to
                                    <span class="fw-semibold">6</span>
                                    of
                                    <span class="fw-semibold">14</span>
                                    results
                                </p>
                            </div>
                            <div>
                                <ul class="pagination">
                                    <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                                        <span class="page-link" aria-hidden="true">&lsaquo;</span>
                                    </li>
                                    <li class="page-item active" aria-current="page"><span class="page-link">1</span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="all4658.html?page=2">2</a></li>
                                    <li class="page-item"><a class="page-link" href="all9ba9.html?page=3">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="all4658.html?page=2" rel="next"
                                            aria-label="Next &raquo;">&rsaquo;</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- Pagination End --->


            </div>
        </div>
        </div>
    </section>

    <script>
        //         var selector = '.nav li';

        // $(selector).on('click', function(){
        //     $(selector).removeClass('active');
        //     $(this).addClass('active');
        // });



        // $(document).ready(function(){
        //   $('ul li a').click(function(){
        //     $('li a').removeClass("active");
        //     $(this).addClass("active");
        // });
        // });

        // $(function($) {
        //     var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        //     $('ul li a').each(function() {
        //         if (this.href === path) {
        //             $(this).addClass('active');
        //         }
        //     });
        // });
    </script>
@endsection
