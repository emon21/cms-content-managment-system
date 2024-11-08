@extends('layouts.website')
@section('content')

    <!--===  Header Start ===-->
    @include('frontend.components.TopHeader')
    <!--===  Header End ===-->

    <!--===  Banner Start ===-->
    <section class="pxa_banner mt_bgtempconatainer"
        style="background-image: url({{ asset('frontend') }}/public/pages/assets/images/banner.jpg);">
        <div class="pxa_container">
            <div class="row align-items-center pxa_banner_wr ">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="pxa_banner_left">
                        <h1 class="">Grow Your</h1>
                        <h2 class="">Business With Us</h2>

                        <p class="">Amet minim mollit non deserunt ullamco est sit aliqua dolordo amet sint.
                            Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud
                            amet.</p>
                        <div class="pxa_btn_wr">
                            <a href="about.html" class="pxa_btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="pxa_banner_right">
                        <img class=""
                            src="{{ asset('frontend') }}/public/pages/assets/images/banner_imgLeft.png" alt="Banner"
                            width="588" height="454">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--===  Banner End ===-->

    <!--===  About Start ===-->
    <section class="pxa_about mt_bgtempconatainer">
        <div class="pxa_container">
            <div class="row align-items-center pxa_about_wr">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="pxa_about_right">
                        <img class="" src="{{ asset('frontend') }}/public/pages/assets/images/about.png"
                            alt="about" width="570" height="477">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="pxa_about_left">
                        <h3 class="pxa_sub_title">About Us</h3>
                        <h2 class="pxa_title">We Provide Best Business Solution in Town
                        </h2>
                        <p class="">Amet minim mollit non deserunt ullamco est sit aliqua
                            dolordo amet sint. Velit officia consequat duis enim velit mollit Exercitation.</p>
                        <p class="">Amet minim mollit non deserunt ullamco est sit aliqua
                            dolordo amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam
                            consequat
                            sunt nostrud amet. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id es.
                        </p>
                        <div class="pxa_btn_wr">
                            <a href="about.html" class="pxa_btn">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>

        </style>
    </section>
    <!--===  About End ===-->
    
    <!--===  Services Start ===-->
    <section class="pxa_services mt_bgtempconatainer">
        <div class="pxa_container">
            <div class="pxa_heading_section">
                <h2 class="">Our Services</h2>
                <p class="">Amet minim mollit non deserunt ullamco est sit aliqua dolordo
                    amet sint. Velit officia consequat duis enim velit mollit Exercitation.</p>
            </div>
            {{-- <div class="row align-items-center text-center" id="services_data"> --}}
            <div class="row align-items-center text-center" id="services_data">

                @foreach($service as $item)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="pxa_services_item">
                        <div class="pxa_services_itemBox">
                            <div class="pxa_services_iconbox skeleton skeleton-icon">
                                <i class="fa fa-lock d-none" aria-hidden="true"></i>
                            </div>
                            gggggggggggggggg
                            {{ $item->id }}
                            <h2 class="pxa_srv_title skeleton-text skeleton"></h2>
                            <p class="pxa_srv_heading skeleton-text__body skeleton"></p>
                            <div class="pxa_btn_wr skeleton skeleton-short-text">
                               
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
            <div class="pxa_services_btn pxa_btn_wr text-center">
                <a href="service/all.html" class="pxa_btn">View More</a>
            </div>
        </div>
    </section>
    <!--===  Services End ===-->
    
    <!--===  Blog Start ===-->
    <section class="pxa_blog mt_bgtempconatainer">
        <div class="pxa_container">
            <div class="pxa_heading_section">
                <h2 class="">Our Blog</h2>
                <p class="">Amet minim mollit non deserunt ullamco est sit aliqua dolordo
                    amet sint. Velit officia consequat duis enim velit mollit Exercitation.</p>
            </div>
            <div class="row align-items-center justify-content-center pxa_blog_wr" id="blog_data">
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="pxa_blog_item">
                        <a href="javascript:void(0);" class="pxa_rd_url">
                            <div class="pxa_blogImage_Wr">
                                <img class="pxa_blog_img skeleton" alt="">
                            </div>
                            <div class="pxa_blog_content">
                                <h2 class="pxa_blog_title pxa_title skeleton-text skeleton"></h2>
                                <p class="pxa_blog_desc skeleton-text__body skeleton"></p>
                                <div class="pxa_date_time">
                                    <ul class="skeleton skeleton-text">
                                        <li class="d-none">
                                            <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.15234 0C4.1169 0 2.46094 1.65596 2.46094 3.69141C2.46094 5.72685 4.1169 7.38281 6.15234 7.38281C8.18779 7.38281 9.84375 5.72685 9.84375 3.69141C9.84375 1.65596 8.18779 0 6.15234 0ZM10.7452 9.79439C9.73454 8.76824 8.39478 8.20312 6.97266 8.20312H5.33203C3.90994 8.20312 2.57015 8.76824 1.55952 9.79439C0.553848 10.8155 0 12.1634 0 13.5898C0 13.8164 0.183641 14 0.410156 14H11.8945C12.121 14 12.3047 13.8164 12.3047 13.5898C12.3047 12.1634 11.7508 10.8155 10.7452 9.79439Z"
                                                    fill="#B8B8B8"></path>
                                            </svg>
                                            <p class="pxa_blog_author"></p>
                                        </li>
                                        <li class="d-none">
                                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.3645 0H11.9626V1.40187C11.9626 1.68224 11.729 1.86916 11.4953 1.86916C11.2617 1.86916 11.028 1.68224 11.028 1.40187V0H3.5514V1.40187C3.5514 1.68224 3.31776 1.86916 3.08411 1.86916C2.85047 1.86916 2.61682 1.68224 2.61682 1.40187V0H1.21495C0.514019 0 0 0.607477 0 1.40187V3.08411H14.9533V1.40187C14.9533 0.607477 14.1122 0 13.3645 0ZM0 4.06542V12.6168C0 13.4579 0.514019 14.0187 1.26168 14.0187H13.4112C14.1589 14.0187 15 13.4112 15 12.6168V4.06542H0ZM4.15888 11.9159H3.03738C2.85047 11.9159 2.66355 11.7757 2.66355 11.5421V10.3738C2.66355 10.1869 2.80374 10 3.03738 10H4.20561C4.39252 10 4.57944 10.1402 4.57944 10.3738V11.5421C4.53271 11.7757 4.39252 11.9159 4.15888 11.9159ZM4.15888 7.71028H3.03738C2.85047 7.71028 2.66355 7.57009 2.66355 7.33645V6.16822C2.66355 5.98131 2.80374 5.79439 3.03738 5.79439H4.20561C4.39252 5.79439 4.57944 5.93458 4.57944 6.16822V7.33645C4.53271 7.57009 4.39252 7.71028 4.15888 7.71028ZM7.8972 11.9159H6.72897C6.54206 11.9159 6.35514 11.7757 6.35514 11.5421V10.3738C6.35514 10.1869 6.49533 10 6.72897 10H7.8972C8.08411 10 8.27103 10.1402 8.27103 10.3738V11.5421C8.27103 11.7757 8.13084 11.9159 7.8972 11.9159ZM7.8972 7.71028H6.72897C6.54206 7.71028 6.35514 7.57009 6.35514 7.33645V6.16822C6.35514 5.98131 6.49533 5.79439 6.72897 5.79439H7.8972C8.08411 5.79439 8.27103 5.93458 8.27103 6.16822V7.33645C8.27103 7.57009 8.13084 7.71028 7.8972 7.71028ZM11.6355 11.9159H10.4673C10.2804 11.9159 10.0935 11.7757 10.0935 11.5421V10.3738C10.0935 10.1869 10.2336 10 10.4673 10H11.6355C11.8224 10 12.0093 10.1402 12.0093 10.3738V11.5421C12.0093 11.7757 11.8692 11.9159 11.6355 11.9159ZM11.6355 7.71028H10.4673C10.2804 7.71028 10.0935 7.57009 10.0935 7.33645V6.16822C10.0935 5.98131 10.2336 5.79439 10.4673 5.79439H11.6355C11.8224 5.79439 12.0093 5.93458 12.0093 6.16822V7.33645C12.0093 7.57009 11.8692 7.71028 11.6355 7.71028Z"
                                                    fill="#B8B8B8"></path>
                                            </svg>
                                            <p class="pxa_blog_publish_at"></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                

            </div>
            <div class="pxa_btn_wr">
                <a href="blog/all.html" class="pxa_btn">View More</a>
            </div>
        </div>
    </section>
    <!--===  Blog End ===-->
    
    <!--===  Partners Start ===-->
    <section class="pxa_partners mt_bgtempconatainer"
        style="background-image: url({{ asset('frontend') }}/public/pages/assets/images/bg_partner.png)">
        <div class="pxa_container">
            <div class="pxa_heading_section">
                <h2 class="">Partners</h2>
                <p class="">Amet minim mollit non deserunt ullamco est sit
                    aliqua dolordo amet sint Velit officia.</p>
            </div>
            <div class="pxa_partners_wr" id="partners_data">
                <div class="pxa_partners_item">
                    <a class="pxa_purl" href="javascript::void()">
                        <img class="pxa_ptnr_img skeleton" alt="" width="" height="">
                    </a>
                </div>
                <div class="pxa_partners_item">
                    <a class="pxa_purl" href="javascript::void()">
                        <img class="pxa_ptnr_img skeleton" alt="" width="" height="">
                    </a>
                </div>
                <div class="pxa_partners_item">
                    <a class="pxa_purl" href="javascript::void()">
                        <img class="pxa_ptnr_img skeleton" alt="" width="" height="">
                    </a>
                </div>
                <div class="pxa_partners_item">
                    <a class="pxa_purl" href="javascript::void()">
                        <img class="pxa_ptnr_img skeleton" alt="" width="" height="">
                    </a>
                </div>
            </div>
        </div>
        <style>

        </style>
    </section>
    <!--===  Partners End ===-->

    <section class="pxa_team mt_bgtempconatainer">
        <div class="pxa_container">
            <div class="pxa_heading_section">
                <h2 class="">Our Team</h2>
                <p class="">Amet minim mollit non deserunt ullamco est sit aliqua dolordo
                    amet sint. Velit officia consequat duis enim velit mollit Exercitation.</p>
            </div>
            <div class="row align-items-center pxa_team_wr" id="teams_data">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="pxa_team_item">
                        <img class="pxa_team_uimg skeleton" width="" height="" alt="">
                        <div class="pxa_team_content">
                            <h2 class="pxa_title pxa_team_title skeleton-text skeleton"></h2>
                            <p class="pxa_team_designation skeleton-text skeleton"></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="pxa_team_item">
                        <img class="pxa_team_uimg skeleton" width="" height="" alt="">
                        <div class="pxa_team_content">
                            <h2 class="pxa_title pxa_team_title skeleton-text skeleton"></h2>
                            <p class="pxa_team_designation skeleton-text skeleton"></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="pxa_team_item">
                        <img class="pxa_team_uimg skeleton" width="" height="" alt="">
                        <div class="pxa_team_content">
                            <h2 class="pxa_title pxa_team_title skeleton-text skeleton"></h2>
                            <p class="pxa_team_designation skeleton-text skeleton"></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="pxa_team_item">
                        <img class="pxa_team_uimg skeleton" width="" height="" alt="">
                        <div class="pxa_team_content">
                            <h2 class="pxa_title pxa_team_title skeleton-text skeleton"></h2>
                            <p class="pxa_team_designation skeleton-text skeleton"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===  Pricing Plan Start ===-->
    <section class="pxa_pricingPlan mt_bgtempconatainer">
        <div class="pxa_container">
            <div class="pxa_heading_section">
                <h2 class="">Our Pricing Plan</h2>
                <p class="">Amet minim mollit non deserunt ullamco est sit aliqua dolordo amet sint. Velit
                    officia consequat duis enim velit mollit Exercitation.</p>
            </div>
            <div class="row pxa_pricingPlan_wr align-items-center justify-content-center" id="price_plan_data">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="pxa_pricingPlan_item">
                        <h2 class="skeleton-text skeleton"></h2>
                        <h3 class="skeleton-text skeleton"> <span></span></h3>
                        <div class="pxa_profile_check">
                            <div class="pxa_profile_Q">
                                <i class="fa fa-check-circle d-none" aria-hidden="true"></i>
                            </div>
                            <div class="pxa_pricingPlan_points">
                                <p class="skeleton-text skeleton"></p>
                            </div>
                        </div>
                        <div class="pxa_profile_check">
                            <div class="pxa_profile_Q">
                                <i class="fa fa-check-circle d-none" aria-hidden="true"></i>
                            </div>
                            <div class="pxa_pricingPlan_points">
                                <p class="skeleton-text skeleton"></p>
                            </div>
                        </div>
                        <div class="pxa_profile_check">
                            <div class="pxa_profile_Q">
                                <i class="fa fa-check-circle d-none" aria-hidden="true"></i>
                            </div>
                            <div class="pxa_pricingPlan_points">
                                <p class="skeleton-text skeleton"></p>
                            </div>
                        </div>
                        <div class="pxa_profile_check">
                            <div class="pxa_profile_Q pxa_nonecheck">
                                <i class="fa fa-check-circle d-none" aria-hidden="true"></i>
                            </div>
                            <div class="pxa_pricingPlan_points">
                                <p class="skeleton-text skeleton"></p>
                            </div>
                        </div>
                        <div class="pxa_profile_check">
                            <div class="pxa_profile_Q pxa_nonecheck">
                                <i class="fa fa-check-circle d-none" aria-hidden="true"></i>
                            </div>
                            <div class="pxa_pricingPlan_points">
                                <p class="skeleton-text skeleton"></p>
                            </div>
                        </div>
                        <div class="pxa_profile_check">
                            <div class="pxa_profile_Q pxa_nonecheck">
                                <i class="fa fa-check-circle d-none" aria-hidden="true"></i>
                            </div>
                            <div class="pxa_pricingPlan_points">
                                <p class="skeleton-text skeleton"></p>
                            </div>
                        </div>
                        <div class="pxa_btn_wr">
                            <a href="#" class="pxa_btn skeleton-text skeleton"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="pxa_pricingPlan_item">
                        <h2 class="skeleton-text skeleton"></h2>
                        <h3 class="skeleton-text skeleton"> <span></span></h3>
                        <div class="pxa_profile_check">
                            <div class="pxa_profile_Q">
                                <i class="fa fa-check-circle d-none" aria-hidden="true"></i>
                            </div>
                            <div class="pxa_pricingPlan_points">
                                <p class="skeleton-text skeleton"></p>
                            </div>
                        </div>
                        <div class="pxa_profile_check">
                            <div class="pxa_profile_Q">
                                <i class="fa fa-check-circle d-none" aria-hidden="true"></i>
                            </div>
                            <div class="pxa_pricingPlan_points">
                                <p class="skeleton-text skeleton"></p>
                            </div>
                        </div>
                        <div class="pxa_profile_check">
                            <div class="pxa_profile_Q">
                                <i class="fa fa-check-circle d-none" aria-hidden="true"></i>
                            </div>
                            <div class="pxa_pricingPlan_points">
                                <p class="skeleton-text skeleton"></p>
                            </div>
                        </div>
                        <div class="pxa_profile_check">
                            <div class="pxa_profile_Q pxa_nonecheck">
                                <i class="fa fa-check-circle d-none" aria-hidden="true"></i>
                            </div>
                            <div class="pxa_pricingPlan_points">
                                <p class="skeleton-text skeleton"></p>
                            </div>
                        </div>
                        <div class="pxa_profile_check">
                            <div class="pxa_profile_Q pxa_nonecheck">
                                <i class="fa fa-check-circle d-none" aria-hidden="true"></i>
                            </div>
                            <div class="pxa_pricingPlan_points">
                                <p class="skeleton-text skeleton"></p>
                            </div>
                        </div>
                        <div class="pxa_profile_check">
                            <div class="pxa_profile_Q pxa_nonecheck">
                                <i class="fa fa-check-circle d-none" aria-hidden="true"></i>
                            </div>
                            <div class="pxa_pricingPlan_points">
                                <p class="skeleton-text skeleton"></p>
                            </div>
                        </div>
                        <div class="pxa_btn_wr">
                            <a href="#" class="pxa_btn skeleton-text skeleton"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="pxa_pricingPlan_item">
                        <h2 class="skeleton-text skeleton"></h2>
                        <h3 class="skeleton-text skeleton"> <span></span></h3>
                        <div class="pxa_profile_check">
                            <div class="pxa_profile_Q">
                                <i class="fa fa-check-circle d-none" aria-hidden="true"></i>
                            </div>
                            <div class="pxa_pricingPlan_points">
                                <p class="skeleton-text skeleton"></p>
                            </div>
                        </div>
                        <div class="pxa_profile_check">
                            <div class="pxa_profile_Q">
                                <i class="fa fa-check-circle d-none" aria-hidden="true"></i>
                            </div>
                            <div class="pxa_pricingPlan_points">
                                <p class="skeleton-text skeleton"></p>
                            </div>
                        </div>
                        <div class="pxa_profile_check">
                            <div class="pxa_profile_Q">
                                <i class="fa fa-check-circle d-none" aria-hidden="true"></i>
                            </div>
                            <div class="pxa_pricingPlan_points">
                                <p class="skeleton-text skeleton"></p>
                            </div>
                        </div>
                        <div class="pxa_profile_check">
                            <div class="pxa_profile_Q pxa_nonecheck">
                                <i class="fa fa-check-circle d-none" aria-hidden="true"></i>
                            </div>
                            <div class="pxa_pricingPlan_points">
                                <p class="skeleton-text skeleton"></p>
                            </div>
                        </div>
                        <div class="pxa_profile_check">
                            <div class="pxa_profile_Q pxa_nonecheck">
                                <i class="fa fa-check-circle d-none" aria-hidden="true"></i>
                            </div>
                            <div class="pxa_pricingPlan_points">
                                <p class="skeleton-text skeleton"></p>
                            </div>
                        </div>
                        <div class="pxa_profile_check">
                            <div class="pxa_profile_Q pxa_nonecheck">
                                <i class="fa fa-check-circle d-none" aria-hidden="true"></i>
                            </div>
                            <div class="pxa_pricingPlan_points">
                                <p class="skeleton-text skeleton"></p>
                            </div>
                        </div>
                        <div class="pxa_btn_wr">
                            <a href="#" class="pxa_btn skeleton-text skeleton"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===  Pricing Plan End ===-->

    <section class="pxa_testimonial mt_bgtempconatainer">
        <div class="pxa_container">
            <div class="pxa_heading_section">
                <h2 class="">Testimonial</h2>
                <p class="">Amet minim mollit non deserunt ullamco est sit aliqua dolordo
                    amet sint. Velit officia consequat duis enim velit mollit Exercitation.</p>
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper pxa_testimonial_wr" id="testimonail_data">
                    <div class="swiper-slide">
                        <div class="pxa_testimonial_item">
                            <div class="pxa_testimonial_full">
                                <div class="pxa_profile_item">
                                    <div class="pxa_profile_BG pxa_test_BG skeleton">
                                    </div>
                                    <div class="pxa_profile_content">
                                        <h2 class="pxa_title pxa_test_title skeleton skeleton-text"></h2>
                                        <p class="pxa_test_designation skeleton skeleton-text"></p>
                                    </div>
                                </div>
                                <div class="pxa_profile_Q">
                                    <i class="fa fa-quote-right d-none" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="pxa_testimonial_content">
                                <p class="pxa_test_desc skeleton skeleton-text__body"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!--===  Faq Section Start ===-->
    <section class="pxa_accordion accordion mt_bgtempconatainer">
        <div class="pxa_container">
            <div class="pxa_heading_section">
                <h2 class="">Frequently Asked Questions</h2>
                <p class="">Amet minim mollit non deserunt ullamco est sit aliqua dolordo
                    amet sint. Velit officia consequat duis enim velit mollit Exercitation.</p>
            </div>
            <div class="accordion" id="faq_data">
                <div class="accordion-item accordion-section-wr">
                    <h2 class="accordion-header " id="heading1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h3 class="pxa_faq_que skeleton-text skeleton"></h3>
                            <span><i class="fa fa-chevron-down d-none" aria-hidden="true"></i></span>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="heading1"
                        data-bs-parent="#faq_data">
                        <div class="accordion-body">
                            <p class="pxa_faq_ans skeleton-text__body skeleton"></p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header " id="heading2">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h3 class="pxa_faq_que skeleton-text skeleton"></h3>
                            <span><i class="fa fa-chevron-down d-none" aria-hidden="true"></i></span>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="heading2"
                        data-bs-parent="#faq_data">
                        <div class="accordion-body">
                            <p class="pxa_faq_ans skeleton-text__body skeleton"></p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header " id="heading3">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h3 class="pxa_faq_que skeleton-text skeleton"></h3>
                            <span><i class="fa fa-chevron-down d-none" aria-hidden="true"></i></span>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="heading3"
                        data-bs-parent="#faq_data">
                        <div class="accordion-body">
                            <p class="pxa_faq_ans skeleton-text__body skeleton"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!--===  Faq Section End ===-->
    
@endsection
