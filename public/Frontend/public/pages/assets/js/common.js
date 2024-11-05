$(document).ready(function(){
    "use strict";
    $(document).on("click", function(event){
        var $trigger = $(".pxa_header_toggle");
          if($trigger !== event.target && !$trigger.has(event.target).length){
              $(".pxa_header_nav").removeClass('open');
          }            
        });
        $(".pxa_header_toggle").click(function(){
            $(".pxa_header_nav").toggleClass('open');
    });

    $(document).on('click', '.pxa_megaMenu_wraper .pxa_menu_list > li', function (e) {
        e.stopPropagation();
        $('.pxa_menu_list > li').not($(this)).closest('li').find('.pxa_drop_menu').slideUp();
        $('.pxa_menu_list > li').not($(this)).closest('li').removeClass('open');
        $(this).closest('li').find('.pxa_drop_menu').slideToggle();
        $(this).toggleClass('open');
    });
    
    $(document).on('click', '.pxa_header_wr.pxa_megaMenu_wraper .pxa_drop_menu .pxa_header_Subnav_01 > li', function (e) {
        e.stopPropagation();
        $('.pxa_header_Subnav_01 > li').not($(this)).closest('li').find('.super-erp-sub-menu').slideUp();
        $('.pxa_header_Subnav_01 > li').not($(this)).closest('li').removeClass('open');
        $(this).closest('li').find('.super-erp-sub-menu').slideToggle();
        $(this).toggleClass('open');
     
     });

    var hash = window.location.href;
    if(hash){
        $(".pxa-tabs").find('.navActive').removeClass('navActive');
        $(".pxa-tabs").find('a[href="' + hash +'"]').parent('li').addClass('navActive');
        if(hash.match(/service/)){
           $('#service_category').closest('.pxa_megamenu_list').addClass('navActive');
        }
    } 
    
});



/**
 * common add/update ajax function
 */
function add_update_details(form_id, url, postData = "", refresh_status = 1) {
    
    var form_btn_id = form_id + '-btn';

    $(document).find('#' + form_btn_id).buttonLoader('start');
    $(document).find('#' + form_btn_id).prop('disabled', true);

    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'JSON',
        data: postData,
        cache: false,
        success: function(response) {
            $('#' + form_btn_id).prop('disabled', false);
            $('#' + form_btn_id).buttonLoader('stop');
            var responseJSON = response;
            if (responseJSON.status == true) {
                if(refresh_status == 0){
                    $('#' + form_id).find("input").val("");
                    $('#' + form_id).find("textarea").val("");
                }
                success_message(responseJSON.msg, responseJSON.url ?? '', refresh_status);
            } else {
                error_message(responseJSON.msg);
            }

        },
        error: function(response) {
            $('#' + form_btn_id).prop('disabled', false);
            $('#' + form_btn_id).buttonLoader('stop');
            var responseJSON = response.responseJSON;
            if (responseJSON.status == true) {
                success_message(responseJSON.msg);
            } else {
                error_message(responseJSON.msg);
            }
        }
    });
}
/* TESTIMONIAL SLIDER */
function pxa_testimonial_slider () {
    var swiper = new Swiper(".pxa_testimonial .swiper-container", {
        slidesPerView: 2,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: ".pxa_testimonial .swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            1199: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            992: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            575: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            0: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
        },
    });
}
pxa_testimonial_slider();

function pxa_testimonial_slider01 () {
    var swiper = new Swiper(".pxa_testimonial01 .swiper-container", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: ".pxa_testimonial01 .swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            1199: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            992: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            575: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            0: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
        },
    });
}
pxa_testimonial_slider01();

function pxa_testimonial_slider02 () {
    var swiper = new Swiper(".pxa_testimonial02 .swiper-container", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: ".pxa_testimonial02 .swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            1199: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            992: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            575: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            0: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
        },
    });
}
pxa_testimonial_slider02();