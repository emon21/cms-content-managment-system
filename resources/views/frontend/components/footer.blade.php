  
  <!--===  Footer Start ===-->

  <section class="pxa_footer mt_bgtempconatainer"
      style="background-image: url({{ asset('frontend') }}/public/pages/assets/images/bg_footer.png)">

      <div class="pxa_container">
          <div class="row">
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="pxa_footer_item">
                      <a href="#" class="">
                          <img class="" src="{{ asset('frontend') }}/public/pages/assets/images/footer_logo.png"
                              alt="Logo" width="150" height="40">
                      </a>
                      
                      <p class="">Amet minim mollit non deserunt ullamco
                          sit aliqua dolor amet. officia consequat
                          enim velit mollit.</p>
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
                                  <img class="" src="{{ asset('frontend') }}/public/pages/assets/images/footer_twitter.png" alt="Twitter"
                                      width="20" height="20">
                              </a>
                          </li>
                          <li>
                              <a href="https://www.instagram.com/" class="" target="_blank">
                                  <img class="" src="{{ asset('frontend') }}/public/pages/assets/images/footer_instagram.png"
                                      alt="Instagram" width="20" height="20">
                              </a>
                          </li>
                          <li>
                              <a href="https://in.linkedin.com/" class="" target="_blank">
                                  <img class="" src="{{ asset('frontend') }}/public/pages/assets/images/footer_linkdin.png" alt="Linkdin"
                                      width="20" height="20">
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
                              <a class="" href="#">Services</a>
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
                              <a class="" href="{{ route('website.terms-and-conditions') }}">Terms And Conditions</a>
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


  <script src="{{ asset('frontend') }}/public/user_theme/assets/js/jquery.min.js"></script>
  <script src="{{ asset('frontend') }}/public/admin_theme/assets/js/bootstrap.min.js"></script>

  <script>
      var ASSET_URL = "public/user_theme/index.html";
      var BASE_URL = "index.html";
      var PAGE_URL = "public/pages/index.html";
      var HAPPY_STRIKER = "{{ asset('frontend') }}/public/user_theme/assets/images/success.png"
      var SAD_STRIKER = "{{ asset('frontend') }}/public/user_theme/assets/images/oops.png"
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
  </script>

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

  <script src="{{ asset('frontend') }}/public/pages/assets/js/page.js"></script>
  <script src="{{ asset('frontend') }}/public/pages/assets/js/common.js"></script>
  <script src="{{ asset('frontend') }}/public/pages/assets/js/custom_plugin.js"></script>
  <script src="{{ asset('frontend') }}/public/common/js/fontawesome-iconpicker.min.js"></script>
  <script src="{{ asset('frontend') }}/public/common/js/iconpicker.js"></script>

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