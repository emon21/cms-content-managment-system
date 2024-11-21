@extends('layouts.website')
@section('content')
    <!--===  Page Title Start ===-->
    <section class="pxa_page_title"
        style="background-image: url({{ asset('frontend') }}/public/pages/assets/images/Breadcrumbs.jpg)">
        <div class="pxa_container">
            <div class="pxa_page_title_opacity">
                <h2>{{ $service->title }}</h2>
                <ul>
                    <li><a href="https://preview.kamleshyadav.com/pixacms">Home /</a></li>
                    <li><a href="all.html">service /</a></li>
                    <li><a href="all.html">{{ $service->category->name }} /</a></li>
                    <li><a href="javascript:void(0);">{{ $service->slug }} </a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--===  Page Title End ===-->

    <!--===  Services Start ===-->

    <section class="pxa_services_single_page">
        <div class="pxa_container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

                    <!-- SideBar start -->

                    @include('website.components.service-sidebar')

                    <!-- SideBar End -->

                </div>

                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="pxa_services_single_page_bg">
                                <div class="pxa_services_full">
                                    <img class="pxa_services_singlePage_fullImg" src="{{ asset($service->image) }}"
                                        alt="Advance cybersecurity" width="100%" height="550" />
                                </div>
                                <h4 class="pxa_metacontent_heading mb-2">{{ $service->title }}</h4>

                                <div class="pxa_metacontent">
                                    <div>{{ $service->heading }}</div>
                                </div>
                                <div class="pxa_metacontent pt-3">
                                    <p class="text-justify">{{ $service->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

    </section>
    <!--===  Services End ===-->

    <!--===  Pricing Plan Start ===-->
    <section class="pxa_pricingPlan">
        <div class="pxa_container">
            <div class="pxa_heading_section">
                <h2>Our Pricing Plan</h2>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolordo amet sint. Velit officia consequat duis
                    enim velit mollit Exercitation.</p>
            </div>
            <div class="row align-items-center pxa_pricingPlan_wr">
                <div>
                    @foreach ($service->plans as $plan)
                        {{-- 
                @if ($plan->id)

yes

@else

no
                @endif --}}
                        {{-- @foreach ($plans as $pp)


                        @if ($plan->id == $pp->id) checked
                        
                        @endif

                        @endforeach --}}

                        {{-- {{ $plan->title }} --}}
                        {{-- @if ($plan_id) --}}
                        @if ($plan->id)
                            {{-- {{ $plan->title }} --}}
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 ">
                                {{-- {{ $plan->status == 'publish' ? '' : 'draft' }} --}}
                                {{-- Status : {{ $plan->status }} --}}

                                {{-- <div class="pxa_pricingPlan_item {{ $plan->type == 'yearly' ? 'bg-success' : '' }}"> --}}
                                <div class="pxa_pricingPlan_item">
                                    <h2 class="">{{ $plan->title }}</h2>
                                    <h3>{{ $plan->price }} <span>/Per {{ $plan->type }}</span></h3>

                                    <div class="pxa_profile_check">
                                        <div class="pxa_profile_Q">
                                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        </div>
                                        <div class="pxa_pricingPlan_points">
                                            <p>amet. Duis aute irure dolor</p>

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

                                    <div class="pxa_btn_wr">
                                        <a href="#" class="pxa_btn">Choose Plan</a>
                                    </div>
                                </div>
                            </div>
                </div>
            @else
                <span>No data Found</span>
                @endif
                @endforeach


            </div>
    </section>
@endsection
