<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="gTLshIospmgWRPo8AGfiHKY9mnEmgzs5l9HuQ9IB">
    <title>Build Your Website With Dynamic Modules</title>

    <meta name="keywords" content="Page Builder  Unleash creativity   Dynamic Modules" />
    <meta name="description"
        content="Empower your online presence with dynamic modules and an intuitive page builder." />

    <meta property="og:type" content=website />
    <meta property="og:site_name" content="Pixa CMS" />
    <meta property="og:title" content="Build  Your Website With Dynamic Modules" />
    <meta property="og:description"
        content="Empower your online presence with dynamic modules and an intuitive page builder. Unleash creativity to design your unique website effortlessly. Start now!" />
    <meta property="og:url" content="https://preview.kamleshyadav.com/pixacms" />
    <meta property="og:image"
        content="{{ asset('frontend') }}/public/storage/site_images/grMN6fzmbN0caP1iP7qvXloCxSZXtIUPBWEDDQbp.jpg" />
    <!-- favicon -->
    <link href="{{ asset('frontend') }}/public/storage/site_images/ASFNtkGNXTuVDGPTNhoD2ZPNsoxHTFHseJLpSeKc.png"
        rel="icon">
    <link href="{{ asset('frontend') }}/public/storage/site_images/ASFNtkGNXTuVDGPTNhoD2ZPNsoxHTFHseJLpSeKc.png"
        rel="apple-touch-icon">


    <!-- stylesheet -->
    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- Font Awesome --->
    {{-- 
      <link rel="stylesheet" href="{{ asset('frontend') }}/public/font/all.css">
      --}}
    {{-- 
      <link rel="stylesheet" href="{{ asset('frontend') }}/public/font-awesome.min.css">
      --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    {{-- 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
      --}}


    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend') }}/public/admin_theme/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/public/common/css/buttonLoader.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/public/common/css/swiper-bundle.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/public/common/css/buttonLoader.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/public/common/css/style.css" />

    <!-- page css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/public/pages/assets/css/section-style.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/public/pages/assets/css/common.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/public/pages/assets/css/skeleton.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/public/pages/assets/css/style.css">
    <!-- page css -->


    {{-- 
      <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.6/swiper-bundle.css">
      --}}
    <!-- custom css -->
    {{-- 
      <link rel="stylesheet" href="{{ asset('frontend') }}/public/common/css/style.css" />
      --}}

    <link rel="stylesheet" href="{{ asset('frontend') }}/public/common/css/jquery.fancybox.css">


    <!-- custom css -->
    <style>
        :root {
            --pxa-light-primary: 238, 55, 112;
            --pxa-primary: #ee3770;
            --pxa-secondary: #000000;
            --pxa-body-color: #f9f7fd;
            --pxa-title-color: #222222;
            --pxa-text-color: #797979;
            --pxa-white-color: #ffffff;
            --pxa-gray-color: #FAFAFA;
            --pxa-border-color: #E8E8E8;
            --all-transition: all 0.3s;
            --transition: all 0.3s ease-in-out;
            --pxa-header-background: #ffffff;
            --pxa-header-text: #797979;
            --pxa-footer-backgournd: #000000;
            --pxa-footer-text: #ffffff;
            --pxa-danger: #e81a46;
            --pxa-success: #6ca329;
            --pxa-sec-body-color: #F7F2FF;
        }
    </style>
    <!-- custom css -->


</head>

<body>
    @yield('content')

    {{-- @include('frontend.components.footer') --}}


    <!--===  Footer Start ===-->
    <section class="pxa_footer mt_bgtempconatainer"
        style="background-image: url({{ asset('frontend') }}/public/pages/assets/images/bg_footer.png)">
        <div class="pxa_container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="pxa_footer_item">
                        <a href="#" class="">
                            <img class=""
                                src="{{ asset('frontend') }}/public/pages/assets/images/footer_logo.png" alt="Logo"
                                width="150" height="40">
                        </a>
                        <p class="">Amet minim mollit non deserunt ullamco
                            sit aliqua dolor amet. officia consequat
                            enim velit mollit.
                        </p>
                        <ul class="pxa_social_footer">
                            <li>
                                <a href="https://www.facebook.com/" class="" target="_blank">
                                    <img class=""
                                        src="{{ asset('frontend') }}/public/pages/assets/images/footer_fb.png"
                                        alt="Facebook" width="20" height="20">
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/i/flow/login" class="" target="_blank">
                                    <img class=""
                                        src="{{ asset('frontend') }}/public/pages/assets/images/footer_twitter.png"
                                        alt="Twitter" width="20" height="20">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" class="" target="_blank">
                                    <img class=""
                                        src="{{ asset('frontend') }}/public/pages/assets/images/footer_instagram.png"
                                        alt="Instagram" width="20" height="20">
                                </a>
                            </li>
                            <li>
                                <a href="https://in.linkedin.com/" class="" target="_blank">
                                    <img class=""
                                        src="{{ asset('frontend') }}/public/pages/assets/images/footer_linkdin.png"
                                        alt="Linkdin" width="20" height="20">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="pxa_footer_item">
                        <h3 class="">Services</h3>
                        <ul class="pxa_footer_links">
                            <li>
                                <a class="" href="javascript:void(0);">Cyber Security</a>
                            </li>
                            <li>
                                <a class="" href="javascript:void(0);">Network Infrastructure</a>
                            </li>
                            <li>
                                <a class="" href="javascript:void(0);">Data Management</a>
                            </li>
                            <li>
                                <a class="" href="javascript:void(0);">Data Analytics Derive</a>
                            </li>
                            <li>
                                <a class="" href="javascript:void(0);">IT Professionals</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="pxa_footer_item">
                        <h3 class="">Pages</h3>
                        <ul class="pxa_footer_links">
                            <li>
                                <a class="" href="{{ route('website.about-us') }}">About</a>
                            </li>
                            <li>
                                <a class="" href="{{ route('website.blog') }}">Blog</a>
                            </li>
                            <li>
                                <a class="" href="{{ route('website.service') }}">Services</a>
                            </li>
                            <li>
                                <a class="" href="{{ route('website.gallery') }}">Gallery</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="pxa_footer_item">
                        <h3 class="">Policy Pages</h3>
                        <ul class="pxa_footer_links">
                            <li>
                                <a class="" href="{{ route('website.privacy-policy') }}">Privacy Policy</a>
                            </li>
                            <li>
                                <a class="" href="{{ route('website.terms-and-conditions') }}">Terms And
                                    Conditions</a>
                            </li>
                            <li>
                                <a class="" href="{{ route('website.contact-us') }}">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="pxa_footer_copyRight">
                        <p class="">Copyright © 2024. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===  Footer Plan End ===-->


    <!-- Custom Js-->
    <script src="{{ asset('frontend') }}/public/user_theme/assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="{{ asset('frontend') }}/public/admin_theme/assets/js/bootstrap.min.js"></script>

    <!-- button laoder validation -->
    <script src="{{ asset('frontend') }}/public/common/js/jquery.buttonLoader.min.js"></script>
    <!-- jquery validation -->
    <script src="{{ asset('frontend') }}/public/common/js/jquery.validate.js"></script>
    <script src="{{ asset('frontend') }}/public/common/js/jquery-additional-methods.min.js"></script>
    <!-- jquery validation -->
    <!-- auth js -->
    <script src="{{ asset('frontend') }}/public/user_theme/custom_assets/auth.js"></script>
    <!-- auth js -->


    <script src="{{ asset('frontend') }}/public/user_theme/custom_assets/common.js"></script>
    <script src="{{ asset('frontend') }}/public/common/js/swiper-bundle.min.js"></script>



    <!-- Pages JS -->

    <script src="{{ asset('frontend') }}/public/pages/assets/js/page.js"></script>
    <script src="{{ asset('frontend') }}/public/pages/assets/js/common.js"></script>
    <script src="{{ asset('frontend') }}/public/pages/assets/js/custom_plugin.js"></script>
    <!-- Pages JS End-->

    <script src="{{ asset('frontend') }}/public/common/js/fontawesome-iconpicker.min.js"></script>
    <script src="{{ asset('frontend') }}/public/common/js/iconpicker.js"></script>

    <!-- Isotope && Fancy Box with Img Gallery -->
    <script src="{{ asset('frontend') }}/public/common/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/public/common/js/jquery.fancybox.min.js"></script>
    <script>
        $(window).on("load", function() {
            $(".gallery_grid").isotope({
                itemSelector: ".grid-item",
                filter: "*",
            });
            $(".pxa_project_gallery > .gallery_nav > ul > li").on(
                "click",
                "a",
                function() {
                    // filter button click
                    var filterValue = $(this).attr("data-filter");
                    $(".gallery_grid").isotope({
                        filter: filterValue
                    });

                    //active class added
                    $("a").removeClass("gallery_active");
                    $(this).addClass("gallery_active");
                }
            );
        });
    </script>
{{-- 
    <script>
        var ASSET_URL = "{{ url('public/user_theme/index.html') }}";
        var BASE_URL = {{ route('website') }};
        var PAGE_URL = "{{ url('public/pages/index.html') }}";
        var HAPPY_STRIKER = "{{ asset('frontend') }}/public/user_theme/assets/images/success.png"
        var SAD_STRIKER = "{{ asset('frontend') }}/public/user_theme/assets/images/oops.png"
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script> --}}


</body>

</html>
