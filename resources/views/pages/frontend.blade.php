@extends('layouts.website')
@section('content')
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
                        <img class="" src="{{ asset('frontend') }}/public/pages/assets/images/banner_imgLeft.png"
                            alt="Banner" width="588" height="454">
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

            <div class="row align-items-center text-center">

                @foreach ($service as $item)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="pxa_services_item">
                            <div class="pxa_services_itemBox">
                                <div class="pxa_services_iconbox">
                                    <i class="{{ $item->icon }}" aria-hidden="true"></i>
                                </div>
                                <h2 class="pxa_srv_title">{{ $item->title }}</h2>
                                <p class="pxa_srv_heading">{{ $item->heading }}</p>

                                <div class="pxa_btn_wr">
                                    <a href="{{ route('website.service.details', $item->slug) }}"
                                        class="pxa_btn pxa_surl">Read More

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="pxa_services_btn pxa_btn_wr text-center">
                <a href="{{ route('website.service') }}" class="pxa_btn">View More</a>
            </div>
        </div>


        <style>
            /* Services Section Css Start */

            .pxa_services .pxa_services_item .pxa_btn_wr .pxa_btn {
                background: none
            }

            .pxa_services .pxa_services_item .pxa_btn_wr .pxa_btn {
                font-size: 16px;
                letter-spacing: 0.5px;
                color: var(--pxa-primary);
                font-weight: 500;
                display: inline-block;
                text-align: center;
                border: none;
                position: relative;
                transition: 0.3s;
                padding: 0;
                /* color: white */
            }



            /* Services Section Css End */
        </style>

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
            <div class="row align-items-center justify-content-center pxa_blog_wr">
                @foreach ($blog as $item)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                        <div class="pxa_blog_item">
                            <a href="{{ route('website.blog.details', $item->slug) }}" class="pxa_rd_url">
                                <div class="pxa_blogImage_Wr">
                                    <img class="pxa_blog_img" alt=""
                                        @if ($item->image) src="{{ asset($item->image) }}" @else src="{{ asset('uploads/no-image.png') }}" @endif
                                        height="250px">
                                </div>
                                <div class="pxa_blog_content">
                                    <h2 class="pxa_blog_title pxa_title">{{ $item->title }}</h2>
                                    <p class="pxa_blog_desc">{{ Str::limit($item->description, 100) }}</p>
                                    <div class="pxa_date_time">
                                        <ul class="">
                                            <li class="">
                                                <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.15234 0C4.1169 0 2.46094 1.65596 2.46094 3.69141C2.46094 5.72685 4.1169 7.38281 6.15234 7.38281C8.18779 7.38281 9.84375 5.72685 9.84375 3.69141C9.84375 1.65596 8.18779 0 6.15234 0ZM10.7452 9.79439C9.73454 8.76824 8.39478 8.20312 6.97266 8.20312H5.33203C3.90994 8.20312 2.57015 8.76824 1.55952 9.79439C0.553848 10.8155 0 12.1634 0 13.5898C0 13.8164 0.183641 14 0.410156 14H11.8945C12.121 14 12.3047 13.8164 12.3047 13.5898C12.3047 12.1634 11.7508 10.8155 10.7452 9.79439Z"
                                                        fill="#B8B8B8"></path>
                                                </svg>
                                                <p class="pxa_blog_author"></p>
                                            </li>
                                            <li class="">
                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.3645 0H11.9626V1.40187C11.9626 1.68224 11.729 1.86916 11.4953 1.86916C11.2617 1.86916 11.028 1.68224 11.028 1.40187V0H3.5514V1.40187C3.5514 1.68224 3.31776 1.86916 3.08411 1.86916C2.85047 1.86916 2.61682 1.68224 2.61682 1.40187V0H1.21495C0.514019 0 0 0.607477 0 1.40187V3.08411H14.9533V1.40187C14.9533 0.607477 14.1122 0 13.3645 0ZM0 4.06542V12.6168C0 13.4579 0.514019 14.0187 1.26168 14.0187H13.4112C14.1589 14.0187 15 13.4112 15 12.6168V4.06542H0ZM4.15888 11.9159H3.03738C2.85047 11.9159 2.66355 11.7757 2.66355 11.5421V10.3738C2.66355 10.1869 2.80374 10 3.03738 10H4.20561C4.39252 10 4.57944 10.1402 4.57944 10.3738V11.5421C4.53271 11.7757 4.39252 11.9159 4.15888 11.9159ZM4.15888 7.71028H3.03738C2.85047 7.71028 2.66355 7.57009 2.66355 7.33645V6.16822C2.66355 5.98131 2.80374 5.79439 3.03738 5.79439H4.20561C4.39252 5.79439 4.57944 5.93458 4.57944 6.16822V7.33645C4.53271 7.57009 4.39252 7.71028 4.15888 7.71028ZM7.8972 11.9159H6.72897C6.54206 11.9159 6.35514 11.7757 6.35514 11.5421V10.3738C6.35514 10.1869 6.49533 10 6.72897 10H7.8972C8.08411 10 8.27103 10.1402 8.27103 10.3738V11.5421C8.27103 11.7757 8.13084 11.9159 7.8972 11.9159ZM7.8972 7.71028H6.72897C6.54206 7.71028 6.35514 7.57009 6.35514 7.33645V6.16822C6.35514 5.98131 6.49533 5.79439 6.72897 5.79439H7.8972C8.08411 5.79439 8.27103 5.93458 8.27103 6.16822V7.33645C8.27103 7.57009 8.13084 7.71028 7.8972 7.71028ZM11.6355 11.9159H10.4673C10.2804 11.9159 10.0935 11.7757 10.0935 11.5421V10.3738C10.0935 10.1869 10.2336 10 10.4673 10H11.6355C11.8224 10 12.0093 10.1402 12.0093 10.3738V11.5421C12.0093 11.7757 11.8692 11.9159 11.6355 11.9159ZM11.6355 7.71028H10.4673C10.2804 7.71028 10.0935 7.57009 10.0935 7.33645V6.16822C10.0935 5.98131 10.2336 5.79439 10.4673 5.79439H11.6355C11.8224 5.79439 12.0093 5.93458 12.0093 6.16822V7.33645C12.0093 7.57009 11.8692 7.71028 11.6355 7.71028Z"
                                                        fill="#B8B8B8"></path>
                                                </svg>
                                                {{-- <p class="pxa_blog_publish_at">{{ $blog->created_at()->format('Y-m-D') }}</p> --}}
                                                <p>{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="pxa_btn_wr">
                <a href="{{ route('website.blog') }}" class="pxa_btn">View More</a>
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
            {{-- <div class="pxa_partners_wr" id="partners_data"> --}}
            <div class="pxa_partners_wr" id="">

                @foreach ($partner as $par)
                    {{-- {{ $par->title }} --}}
                    <div class="pxa_partners_item">
                        <a class="pxa_purl" href="javascript::void()">
                            <img src="{{ asset($par->image) }}" class="pxa_ptnr_img skeleton" alt=""
                                width="" height="">
                        </a>
                    </div>
                @endforeach


            </div>
        </div>
        <style>

        </style>
    </section>
    <!--===  Partners End ===-->

    <!--===  Team Start ===-->

    <section class="pxa_team mt_bgtempconatainer">
        <div class="pxa_container">
            <div class="pxa_heading_section">
                <h2 class="">Our Team</h2>
                <p class="">Amet minim mollit non deserunt ullamco est sit aliqua dolordo
                    amet sint. Velit officia consequat duis enim velit mollit Exercitation.</p>
            </div>
            <div class="row align-items-center pxa_team_wr">

                @foreach ($team as $item)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="pxa_team_item">
                            <img class="pxa_team_uimg"
                                @if ($item->image) src="{{ asset($item->image) }}" @else src="{{ asset('uploads/no-image.png') }}" @endif
                                width="" height="250px" alt="">

                            <div class="pxa_team_content">
                                <h2 class="pxa_title pxa_team_title">{{ $item->name }}</h2>
                                <p class="pxa_team_designation">{{ $item->designation }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--===  Team End ===-->


    <!--===  Pricing Plan Start ===-->
    <section class="pxa_pricingPlan mt_bgtempconatainer">
        <div class="pxa_container">
            <div class="pxa_heading_section">
                <h2 class="">Our Pricing Plan</h2>
                <p class="">Amet minim mollit non deserunt ullamco est sit aliqua dolordo amet sint. Velit
                    officia consequat duis enim velit mollit Exercitation.</p>
            </div>
            <div class="row pxa_pricingPlan_wr align-items-center justify-content-center" id="price_plan_data">

                @foreach ($pricePlan as $plan)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="pxa_pricingPlan_item">
                            <h2>Proffesional</h2>
                            <h3>$100 <span>/ Per Year</span></h3>
                            <div class="">
                                <div class="pxa_profile_check">
                                    <div class="pxa_profile_Q">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </div>
                                    <div class="pxa_pricingPlan_points">
                                        <p>Amet minim mollit non deserunt</p>
                                    </div>
                                </div>
                                <div class="pxa_profile_check">
                                    <div class="pxa_profile_Q">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </div>
                                    <div class="pxa_pricingPlan_points">
                                        <p>ullamco est sit aliqua dolor do</p>
                                    </div>
                                </div>
                                <div class="pxa_profile_check">
                                    <div class="pxa_profile_Q">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </div>
                                    <div class="pxa_pricingPlan_points">
                                        <p>amet sint. Velit officia consequat</p>
                                    </div>
                                </div>
                                <div class="pxa_profile_check">
                                    <div class="pxa_profile_Q pxa_nonecheck">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </div>
                                    <div class="pxa_pricingPlan_points">
                                        <p>duis enim velit mollit. Exercitation</p>
                                    </div>
                                </div>
                                <div class="pxa_profile_check">
                                    <div class="pxa_profile_Q pxa_nonecheck">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </div>
                                    <div class="pxa_pricingPlan_points">
                                        <p>veniam consequat sunt nostrud</p>
                                    </div>
                                </div>
                                <div class="pxa_profile_check">
                                    <div class="pxa_profile_Q pxa_nonecheck">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </div>
                                    <div class="pxa_pricingPlan_points">
                                        <p>amet. Duis aute irure dolor</p>
                                    </div>
                                </div>
                            </div>
                            <div class="pxa_btn_wr">
                                <a href="#" class="pxa_btn">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--===  Pricing Plan End ===-->


    <!--===  Testimonial Start ===-->

    <section class="pxa_testimonial mt_bgtempconatainer">
        <div class="pxa_container">
            <div class="pxa_heading_section">
                <h2 class="">Testimonial</h2>
                <p class="">Amet minim mollit non deserunt ullamco est sit aliqua dolordo
                    amet sint. Velit officia consequat duis enim velit mollit Exercitation.</p>
            </div>

            <div class="swiper-container swiper-initialized swiper-horizontal swiper-pointer-events">

                <div class="swiper-wrapper pxa_testimonial_wr" id="testimonail_data" aria-live="polite"
                    style="transition-duration: 0ms; transform: translate3d(-5265px, 0px, 0px);" data-visible="true">


                    @foreach ($testimonial as $item)
                        @if ($item->status == 'publish')
                            <div class="swiper-slide" data-swiper-slide-index="4" role="group" aria-label="5 / 7"
                                style="width: 555px; margin-right: 30px;">

                                <div class="pxa_testimonial_item">
                                    <div class="pxa_testimonial_full">
                                        <div class="pxa_profile_item">
                                            <div class="pxa_profile_BG pxa_test_BG"
                                                style="background-image: url({{ asset($item->image) }});">
                                            </div>
                                            <div class="pxa_profile_content">
                                                <h2 class="pxa_title pxa_test_title">{{ $item->client_name }}</h2>
                                                <p class="pxa_test_designation">{{ $item->designation }}</p>
                                            </div>
                                        </div>
                                        <div class="pxa_profile_Q">
                                            <i class="fas fa-quote-right" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="pxa_testimonial_content">
                                        <p class="pxa_test_desc">{!! $item->description !!}</p>
                                    </div>
                                </div>

                            </div>
                        @endif
                    @endforeach

                </div>

                <div
                    class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">

                </div>


                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>

        </div>
    </section>

    <!--===  Testimonial End ===-->


    <!--===  Faq Section Start ===-->
    <section class="pxa_accordion accordion mt_bgtempconatainer">
        <div class="pxa_container">
            <div class="pxa_heading_section">
                <h2 class="">Frequently Asked Questions</h2>
                <p class="">Amet minim mollit non deserunt ullamco est sit aliqua dolordo
                    amet sint. Velit officia consequat duis enim velit mollit Exercitation.</p>
            </div>

            <div class="accordion" id="faq_data" data-visible="true" style="">

                @foreach ($faq as $key => $item)
                    {{-- @if ($key == 0) ? 'show' : '' --}}
                    {{-- @php
                        $value = $key == 2 ? 'show' : '';
                    @endphp --}}
                                
                    <div class="accordion-item accordion-section-wr">
                        <h2 class="accordion-header" id="heading{{ $item->id }}">
                            <button class="accordion-button @if ($item->id > 0) ? 'collapsed' : '' @endif"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $item->id }}"
                                aria-expanded="@if ($item->id > 0) ? 'false' : 'true' @endif"
                                aria-controls="collapse{{ $item->id }}">
                                <h3 class="pxa_faq_que">{{ $item->title }}</h3>
                                <span>
                                    <i class="fa fa-chevron-up" aria-hidden="false"></i>
                                </span>
                            </button>
                        </h2>

                        <div id="collapse{{ $item->id }}" class="accordion-collapse collapse {{ ($item->FaqStatus == 'active') ? 'show' : 'hide' }}"
                            aria-labelledby="heading{{ $item->id }}" data-bs-parent="#faq_data">
                            <div class="accordion-body">
                                <p class="pxa_faq_ans">{!! $item->description !!}</p>
                            </div>
                        </div>
                    </div>
                    
                @endforeach

            </div>

        </div>

        <style>
            /* Faq Section Css Start */

            .pxa_accordion .accordion-button:not(.collapsed) {
                background-color: #e5e2eb;
                box-shadow: none;
            }

            .pxa_accordion {

                padding: 40px 0 55px;
                background-color: var(--pxa-body-color);
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;

            }

            .pxa_accordion .pxa_heading_section {
                max-width: 600px;
                margin: 0 auto;
                text-align: center;
                margin-bottom: 45px;
            }

            .pxa_accordion .pxa_heading_section h2 {
                color: var(--pxa-primary);
                font-size: 28px;
                font-weight: 700;
                line-height: 1.4;
                margin-bottom: 15px;
            }

            .pxa_accordion .pxa_heading_section p {
                color: var(--pxa-text-color);
                font-size: 16px;
                font-weight: 400;
                line-height: 1.4;
            }

            .pxa_accordion .accordion-item {
                border: 1px solid var(--pxa-border-color);
                margin-bottom: 25px;
                border-radius: 12px;
            }

            .pxa_accordion .accordion-item:last-of-type .accordion-button.collapsed {
                border-radius: 12px;
            }

            .pxa_accordion .accordion-button {
                border-radius: 12px;
                position: relative;
                justify-content: space-between;
                gap: 30px;
                align-items: start;
            }

            .pxa_accordion button.accordion-button span i {
                color: var(--pxa-title-color);
            }

            .pxa_accordion button.accordion-button.collapsed span i {
                transform: translateY(-50%) rotate(180deg);
                position: absolute;
                color: var(--pxa-title-color);
                right: 20px;
            }

            .pxa_accordion .accordion-button:focus {
                box-shadow: none;
            }

            .pxa_accordion .accordion-button::after {
                display: none;
            }

            .pxa_accordion .accordion-button:not(.collapsed) {
                background-color: var(--pxa-white-color);
                box-shadow: none;
            }

            .pxa_accordion .accordion-button h3 {
                font-size: 18px;
                color: var(--pxa-title-color);
            }

            .pxa_accordion .accordion-body {
                background-color: var(--pxa-white-color);
                border-radius: 12px;
            }

            .pxa_accordion .accordion-body p {
                font-size: 16px;
                color: var(--pxa-text-color);
            }

            .pxa_accordion .accordion-item:first-of-type .accordion-button {
                border-radius: 12px;
                position: relative;
            }

            .pxa_accordion button.accordion-button span i {
                top: 28px;
            }

            @media only screen and (max-width: 991px) {
                .pxa_accordion .pxa_heading_section h2 {
                    font-size: 20px;
                }

                .pxa_accordion .pxa_heading_section p {
                    font-size: 14px;
                }

                .pxa_accordion .accordion-button h3 {
                    font-size: 15px;
                }

                .pxa_accordion .accordion-body p {
                    font-size: 14px;
                }

                .pxa_accordion .pxa_heading_section {
                    margin-bottom: 30px;
                }
            }

            /* Faq Section Css End */
        </style>

    </section>
    <!--===  Faq Section End ===-->
@endsection
