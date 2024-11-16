@extends('layouts.website')
@section('content')

<!--===  About Start ===-->
<section class="pxa_about_section mt_bgtempconatainer">
    <!--===  Header End ===-->
    <!--===  Page Title Start ===-->
    <section class="pxa_page_title mt_bgtempconatainer" style="background-image: url({{ asset('frontend') }}/public/pages/assets/images/Breadcrumbs.jpg)">
        <div class="pxa_container">
            <div class="pxa_page_title_opacity">
                <h2 class="">Our About</h2>
                <ul>
                    <li><a class="" href="home.html">Home /</a></li>
                    <li><a class="" href="javascript:void(0);">About</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--===  Page Title End ===-->
    
    <!--===  About Start ===-->
    <section class="pxa_about">
        <div class="pxa_container">
            <div class="row pxa_about_wr align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="pxa_about_right">
                        <img class="" src="{{ asset('frontend')}}/public/pages/assets/images/about.png" alt="about" width="570" height="477">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="pxa_about_text pxa_about_left">
                        <h3 class="pxa_sub_title">About Us</h3>
                        <h2 class="pxa_title">We Provide Best Business
                            Solution in Town</h2>

                        <p class="">Amet minim mollit non deserunt ullamco est sit
                            aliqua dolordo amet sint. Velit officia consequat duis enim velit mollit Exercitation.</p>
                        <p class="">Amet minim mollit non deserunt ullamco est sit
                            aliqua dolordo amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id es.
                        </p>
                        <p class="">Amet minim mollit non deserunt ullamco est sit
                            aliqua dolordo amet sint. Velit officia consequat duis enim velit mollit. Exercitation 
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--===  About Start  ===-->

@endsection
