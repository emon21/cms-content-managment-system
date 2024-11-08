<section class="pxa_header_wr pxa_megaMenu_wraper pxa_dropdown_menu mt_bgtempconatainer">
        <div class="pxa_header_full">
            <div class="pxa_header_flex">
                <div class="pxa_header_logo">
                    <a href="{{ route('website.home') }}" class="">
                        <img class="" src="{{ asset('frontend') }}/public/pages/assets/images/pxa_logo.png"
                            alt="Logo" height="40" width="158">
                    </a>
                </div>
                <div class="pxa_header_nav">
                    <ul class="pxa_menu_list pxa_dropdown_flex pxa-tabs">
                        <li class="navActive">
                            <a class="" href="{{ route('website.home') }}">Home</a>
                        </li>

                        <li>
                            <a class="" href="{{ route('website.about-us') }}">About</a>
                        </li>

                        <li class="pxa_megamenu_list">
                            <a href="#">Service</a>
                            <div class="pxa_header_Subnav pxa_drop_menu" style="display: none;">
                                <div class="pxa_megamenu_grid" id="service_category">
                                   {{-- @foreach($service as $item) --}}
                                    <ul class="pxa_megamenu_item pxa_header_Subnav_01">
                                        {{-- <h2 class="pxa_sc_title">{{ $item->title }}</h2> --}}
                                        <li>
                                            <a href="#">
                                                <span>
                                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                                </span>
                                                <h4 class="pxa_megamenu_details">
                                                    
                                                </h4>
                                            </a>
                                        </li>
{{--                                         
                                        <li>
                                            <a href="#">
                                                <span>
                                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                                </span>
                                                <h4 class="pxa_megamenu_details">
                                                    Cyber Security
                                                </h4>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>
                                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                                </span>
                                                <h4 class="pxa_megamenu_details">
                                                    Cyber Security
                                                </h4>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>
                                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                                </span>
                                                <h4 class="pxa_megamenu_details">
                                                    Cyber Security
                                                </h4>
                                            </a>
                                        </li> --}}
                                    </ul>
                                   {{-- @endforeach --}}
                                </div>
                            </div>
                        </li>

                        <li><a class="" href="{{ route('website.blog') }}">Blog</a></li>
                        <li><a class="" href="{{ route('website.gallery') }}">Gallery</a></li>
                        <li><a class="" href="{{ route('website.contact-us') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="pxa_header_toggle">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>