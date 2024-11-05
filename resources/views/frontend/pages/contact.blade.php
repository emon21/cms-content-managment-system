@extends('layouts.website')
@section('content')
  <!--===  Header Start ===-->
    @include('frontend.components.TopHeader')
    <!--===  Header End ===-->
<section class="pxa_contact_Page mt_bgtempconatainer">
  <!--===  Page Title Start ===-->
  <section class="pxa_page_title" style="background-image: url({{ asset('frontend') }}/public/pages/assets/images/Breadcrumbs.jpg)">
    <div class="pxa_container">
        <div class="pxa_page_title_opacity">
          <h2 class="">Contact</h2>
          <ul>
            <li><a class="" href="home.html">Home /</a></li>
            <li><a href="javascript:void(0);" class="">Contact</a></li>
          </ul>
        </div>
    </div>
  </section>
  <!--===  Page Title End ===-->


                
<section class="pxa_contact_Page mt_bgtempconatainer">

  <!--===  Contact Start ===-->
  <div class="pxa_contact_wr">
    <div class="pxa_container">
      <div class="pxa_contact_bg">
        <div class="row align-items-center">
          <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-12">
            <div class="pxa_contact_center">
              <img class="" src="{{ asset('frontend')}}/public/pages/assets/images/contactImg.jpg" alt="Contact" width="500px" height="655px">
            </div>
          </div>
          <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-12">
            <div class="pxa-contact-form pxa-bg-design pxa-marTop30">
              <div class="pxa_subTitle">
                <h3 class="">Hello, Welcome Back!</h3>
                <h4 class="">Enter your details below to continue.</h4>
              </div>
              <form id="frmContactUs" class="pxa_formBox pxa-marTop30" method="POST">
                <div class="row">
                  <div class="col-md-6 col-12">
                    <div class="pxa_main_input">
                      <label class="">Name</label>
                      <input type="text" id="pxa-name" name="name" class="pxa_custom_input" placeholder="Enter Name Here...">
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="pxa_main_input">
                      <label class="">Email</label>
                      <input type="email" id="pxa-email" name="email" class="pxa_custom_input" placeholder="Enter Email Here...">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 col-12">
                    <div class="pxa_main_input">
                      <label class="">Subject</label>
                      <input type="text" id="pxa-subject" name="subject" class="pxa_custom_input" placeholder="Enter Subject Here...">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 col-12">
                    <div class="pxa_main_input">
                      <label class="">Message</label>
                      <textarea id="pxa-msg" rows="2" name="message" class="pxa_custom_textarea" placeholder="Message Here..."></textarea>
                    </div>
                  </div>
                </div>
                <div class="pxa_contact_btn">
                  <button type="submit" class="pxa_btn me-2" id="frmContactUs-btn">
                    <span class="">Submit</span>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===  Contact End ===-->

</section>
@endsection
