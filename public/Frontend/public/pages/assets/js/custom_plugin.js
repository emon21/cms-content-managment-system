"use strict";
/* Testimonial SECTION  START */
function updateTestimonialList(t, e) {
    $(t).attr("data-visible", !0),
        $.get(BASE_URL + e)
            .done(function (e) {
                if (1 == e.status) {
                    var child = jQuery(t).children(":first").clone();
                    jQuery(t).hide().html("");
                    e.data.forEach(function (e) {
                        let html = child;
                        html.find(".skeleton").removeClass(
                            "skeleton-text skeleton-text__body skeleton skeleton-short-text skeleton-icon"
                        );
                        html.find(".d-none").removeClass("d-none");
                        html.find(".pxa_test_uimg").attr("src", e.image);
                        html.find(".pxa_profile_BG").css(
                            "background-image",
                            'url("' + e.image + '")'
                        );
                        html.find(".pxa_test_title").text(e.name);
                        html.find(".pxa_test_designation").text(e.designation);
                        html.find(".pxa_test_desc").text(e.description);
                        jQuery(t)
                            .append(
                                `<div class="swiper-slide">
                                    ` +
                                    html.html() +
                                    `
                                </div>`
                            )
                            .fadeIn(2e3);
                    });
                    pxa_testimonial_slider();
                } else {
                    jQuery(t).html("No Data found").fadeIn(2e3);
                }
            })
            .fail(function (e, a, n) {
                jQuery(t).html("No Data found").fadeIn(2e3);
            });
}

/* TEAM SECTION  START */
function updateTeamList(t, e) {
    $(t).attr("data-visible", !0),
        $.get(BASE_URL + e)
            .done(function (e) {
                if (1 == e.status) {
                    var child = jQuery(t).children(":first").clone();
                    jQuery(t).hide().html("");
                    e.data.forEach(function (e) {
                        var html = child.clone();
                        html.find(".skeleton").removeClass(
                            "skeleton-text skeleton-text__body skeleton skeleton-short-text skeleton-icon"
                        );
                        html.find(".pxa_team_uimg").attr("src", e.image);
                        html.find(".pxa_team_title")
                            .text(e.name)
                            .removeClass("skeleton-text skeleton");
                        html.find(".pxa_team_designation")
                            .text(e.designation)
                            .removeClass("skeleton-text skeleton");
                        jQuery(t).append(html).fadeIn(2e3);
                    });
                } else {
                    jQuery(t).html("No Data found").fadeIn(2e3);
                }
            })
            .fail(function (e, a, n) {
                jQuery(t).html("No Data found").fadeIn(2e3);
            });
}

/* BLOG SECTION  START */
function updateBlogList(t, e) {
    $(t).attr("data-visible", !0),
        $.get(BASE_URL + e)
            .done(function (e) {
                if (1 == e.status) {
                    var child = jQuery(t).children(":first").clone();
                    jQuery(t).hide().html("");
                    e.data.forEach(function (e) {
                        var html = child.clone();
                        html.find(".skeleton").removeClass(
                            "skeleton-text skeleton-text__body skeleton skeleton-short-text skeleton-icon"
                        );
                        html.find(".d-none").removeClass("d-none");
                        html.find(".pxa_rd_url").attr(
                            "href",
                            BASE_URL + "blog/" + e.slug
                        );
                        html.find(".pxa_blog_img").attr("src", e.thumb);
                        html.find(".pxa_blog_title").text(e.title);
                        html.find(".pxa_blog_desc").text(e.description);
                        html.find(".pxa_blog_publish_at").text(e.publish_at);
                        html.find(".pxa_blog_author").text(e.author);
                        jQuery(t).append(html).fadeIn(2e3);
                    });
                } else {
                    jQuery(t).html("No Data found").fadeIn(2e3);
                }
            })
            .fail(function (e, a, n) {
                jQuery(t).html("No Data found").fadeIn(2e3);
            });
}

/* SERVICES SECTION  START */
var url = "users/details/"+id+"/view";
      $('#div-details').load(url);


function updateServicesList(t, e) {
    $(t).attr("data-visible", !0),
        $.get(BASE_URL + e)
            .done(function (e) {
                if (1 == e.status) {
                    var child = jQuery(t).children(":first").clone();
                    jQuery(t).hide().html("");
                    e.data.forEach(function (e) {
                        var html = child.clone();
                        html.find(".skeleton").removeClass(
                            "skeleton-text skeleton-text__body skeleton skeleton-short-text skeleton-icon"
                        );
                        html.find(".d-none").removeClass("d-none");
                        html.find(".fa-lock")
                            .removeClass("fa fa-lock")
                            .addClass(e.icon);
                        html.find(".pxa_srv_title").text(e.title);
                        html.find(".pxa_srv_heading").text(e.heading);
                        html.find(".pxa_surl").attr(
                            "href",
                            BASE_URL + "service/" + e.id
                        );
                        jQuery(t).append(html).fadeIn(2e3);
                    });
                } else {
                    jQuery(t).html("No Data found").fadeIn(2e3);
                }
            })
            .fail(function (e, a, n) {
                jQuery(t).html("No Data found").fadeIn(2e3);
            });
}

/* HEADER SERVICES SECTION  START */
function updateHeaderServicesCatList(t, e) {
    $(t).attr("data-visible", !0),
        $.get(BASE_URL + e)
            .done(function (e) {
                if (1 == e.status) {
                    jQuery(t).hide().html("");
                    e.data.forEach(function (e) {
                        var html =
                            `<ul class="pxa_megamenu_item pxa_header_Subnav_01">
                        <h2 class="pxa_sc_title">` +
                            e.name +
                            `</h2>`;
                        e.get_services.forEach(function (e) {
                            html +=
                                `<li><a href="` +
                                BASE_URL +
                                "service/" +
                                e.slug +
                                `"> <span><i class="` +
                                e.icon +
                                `" aria-hidden="true"></i></span>
                                <h4 class="pxa_megamenu_details">
                                    ` +
                                e.title +
                                `
                                </h4>
                                </a>
                            </li>`;
                        });

                        html += `</ul>`;
                        jQuery(t).append(html).fadeIn(2e3);
                    });
                } else {
                    jQuery(t).html("No Data found").fadeIn(2e3);
                }
            })
            .fail(function (e, a, n) {
                jQuery(t).html("No Data found").fadeIn(2e3);
            });
}

/* PARTNERS SECTION  START */
function updatePartnersList(t, e) {
    $(t).attr("data-visible", !0),
        $.get(BASE_URL + e)
            .done(function (e) {
                if (1 == e.status) {
                    var child = jQuery(t).children(":first").clone();
                    jQuery(t).hide().html("");
                    e.data.forEach(function (e) {
                        var html = child.clone();
                        html.find(".skeleton").removeClass(
                            "skeleton-text skeleton-text__body skeleton skeleton-short-text skeleton-icon"
                        );
                        html.find(".pxa_ptnr_img").attr("src", e.image);
                        if (e.url != "")
                            html.find(".pxa_purl").attr("href", e.url);
                        jQuery(t).append(html).fadeIn(2e3);
                    });
                } else {
                    jQuery(t).html("No Data found").fadeIn(2e3);
                }
            })
            .fail(function (e, a, n) {
                jQuery(t).html("No Data found").fadeIn(2e3);
            });
}

/* PLAN SECTION  START */
function updatePlanList(t, e) {
    $(t).attr("data-visible", !0),
        $.get(BASE_URL + e)
            .done(function (e) {
                if (1 == e.status) {
                    // var child = jQuery(t).children(":first").clone();
                    jQuery(t).hide().html("");
                    e.data.forEach(function (e) {
                        var html =
                            `<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="pxa_pricingPlan_item">
                            <h2>` +
                            e.title +
                            `</h2>
                            <h3>$` +
                            e.price +
                            ` <span>/ Per ` +
                            e.plan_type +
                            `</span></h3>
                            <div class="">
                            ` +
                            e.features +
                            `
                            </div>
                            <div class="pxa_btn_wr">
                                <a href="#" class="pxa_btn">Choose Plan</a>
                            </div>
                        </div>
                    </div>`;

                        jQuery(t).append(html).fadeIn(2e3);
                    });
                } else {
                    jQuery(t).html("No Data found").fadeIn(2e3);
                }
            })
            .fail(function (e, a, n) {
                jQuery(t).html("No Data found").fadeIn(2e3);
            });
}

/* FAQ SECTION  START */
function updateFAQList(t, e) {
    $(t).attr("data-visible", !0),
        $.get(BASE_URL + e)
            .done(function (e) {
                if (1 == e.status) {
                    var child = jQuery(t).children(":first").clone();
                    jQuery(t).hide().html("");
                    e.data.forEach(function (e, index) {
                        var show, aria_expanded, collapsed;
                        if (index == 0) {
                            show = "show";
                            aria_expanded = true;
                            collapsed = "";
                        } else {
                            show = "";
                            aria_expanded = false;
                            collapsed = "collapsed";
                        }
                        var html =
                            `<div class="accordion-item accordion-section-wr">
                        <h2 class="accordion-header" id="heading_` +
                            e.id +
                            `">
                            <button class="accordion-button ` +
                            collapsed +
                            `" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse` +
                            e.id +
                            `" aria-expanded="` +
                            aria_expanded +
                            `" aria-controls="collapse` +
                            e.id +
                            `">
                                <h3 class="pxa_faq_que">` +
                            e.title +
                            `</h3>
                                <span ><i class="fa fa-chevron-up" aria-hidden="` +
                            aria_expanded +
                            `"></i></span>
                            </button>
                        </h2>
                        <div id="collapse` +
                            e.id +
                            `" class="accordion-collapse collapse ` +
                            show +
                            `" aria-labelledby="heading_` +
                            e.id +
                            `"
                            data-bs-parent="#faq_data">
                            <div class="accordion-body">
                                <p class="pxa_faq_ans">` +
                            e.description +
                            `</p>
                            </div>
                        </div>
                    </div>`;
                        jQuery(t).append(html).fadeIn(2e3);
                    });
                } else {
                    jQuery(t).html("No Data found").fadeIn(2e3);
                }
            })
            .fail(function (e, a, n) {
                jQuery(t).html("No Data found").fadeIn(2e3);
            });
}

/* FAQ SECTION END */
function isInView(id) {
    var el = document.getElementById(id);
    var t = "#" + id;
    if (el != null)
        return (
            $(t).offset().top -
                $(window).scrollTop() -
                $(window).height() / 1.5 <
                $(t).height() &&
            (void 0 === $(t).attr("data-visible") ||
                !1 === $(t).attr("data-visible"))
        );
}

$(window).bind("load", function () {
    isInView("service_category") &&
        updateHeaderServicesCatList("#service_category", "get-services-cat");
    isInView("testimonail_data") &&
        updateTestimonialList("#testimonail_data", "get-testimonial");
    isInView("teams_data") && updateTeamList("#teams_data", "get-teams");
    isInView("partners_data") &&
        updatePartnersList("#partners_data", "get-partners");
    isInView("blog_data") && updateBlogList("#blog_data", "get-blog");
    isInView("services_data") &&
        updateServicesList("#services_data", "get-services");
    isInView("price_plan_data") &&
        updatePlanList("#price_plan_data", "get-price-plan");
    isInView("faq_data") && updateFAQList("#faq_data", "get-faq");
});

$(window).scroll(function () {
    isInView("testimonail_data") &&
        updateTestimonialList("#testimonail_data", "get-testimonial");
    isInView("teams_data") && updateTeamList("#teams_data", "get-teams");
    isInView("partners_data") &&
        updatePartnersList("#partners_data", "get-partners");
    isInView("blog_data") && updateBlogList("#blog_data", "get-blog");
    isInView("services_data") &&
        updateServicesList("#services_data", "get-services");
    isInView("price_plan_data") &&
        updatePlanList("#price_plan_data", "get-price-plan");
    isInView("faq_data") && updateFAQList("#faq_data", "get-faq");
});
