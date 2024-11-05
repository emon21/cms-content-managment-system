"use strict";
/**
* set csrf token in header
*/
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

//Error Message toster
function error_message(msg) {
var html = `<div class="pxn-notification success"><div class="pxn-notification-content">
                <div class="pxn-notification-icon ">
                    <img class="" src="`+ SAD_STRIKER +`">
                </div>
                <div class="pxn-notification-msg">
                    <h4>Oh no! Error</h4>
                    <p>`+ msg + `</p>
                </div>
                <div class="pxn-notification-close">
                <a href="#"><img src="`+ASSET_URL+`assets/images/cancel.svg"></a>
                </div>
            </div></div>`;
    $(document).find('#msg-toast').html(html);

    setTimeout(() => {
        $(document).find('#msg-toast').html("");
    }, 2000);
}

//Success Message toster
function success_message(msg = "", url = "", reload = "") {
    var html = `<div class="pxn-notification success">
    <div class="pxn-notification-content">
                    <div class="pxn-notification-icon ">
                        <img class="" src="`+ HAPPY_STRIKER +`">
                    </div>
                    <div class="pxn-notification-msg ">
                        <h4>Great Success!</h4>
                        <p>`+ msg + `</p>
                    </div>
                    <div class="pxn-notification-close">
                        <a href="#"><img src="`+ASSET_URL+`assets/images/cancel.svg"></a>
                    </div>
                </div></div>`;
    $(document).find('#msg-toast').html(html);

    if (url != "") {
        setTimeout(() => {
            window.location.href = url;
        }, 1000);
    }
    else if (reload == 1) {
        setTimeout(() => {
            location.reload();
        }, 1000);
    } else {
        setTimeout(() => {
            $(document).find('#msg-toast').html("");
        }, 2000);
    }

}

//Remove toaster message
$(document).on('click', '.tp_close_icon', function () {
    $(document).find('#msg-toast').html("");
})

/**
*  show hide password
*/
$(".toggle-password").click(function () {
    var eyeslash = ASSET_URL + 'assets/images/auth/password.svg';
    var eye = ASSET_URL + 'assets/images/auth/eye.svg';
    var input = $(this).siblings('input');
    if (input.attr("type") == "password") {
        input.attr("type", "text");
        $(this).attr('src', eye);
    } else {
        input.attr("type", "password");
        $(this).attr('src', eyeslash);
    }
});


/**
*  Post newsletter ajax function
*/
function submit_newletter(){
    var postData = $('#newsletter_form').serializeArray();
    add_update_details('newsletter_form', postData, refresh_status = 0);
    setTimeout(() => {
        $('#newletter_email').val("");
    }, 1000);
}


