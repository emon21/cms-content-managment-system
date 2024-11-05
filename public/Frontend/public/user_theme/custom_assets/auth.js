"use strict";
/* valid password validation rules */
jQuery.validator.addMethod("validpass", function (value) {
    $req = $("#password").attr('required');
    if (value.length > 0) {
        var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/;
        return regex.test(value);
    }
    return true;
},
    "Password should contains at least 6 characters, 1 number, 1 lowercase ,1 uppercase letter and one special character"
);

$(document).ready(function(){
//login validation 
$(document).find('#login-form').validate({
    rules: {
        email: {
            required: true,
            email:true
            // validEmail: true,
        },
        password: {
            required: true,
        },
    },
    messages: {
        email: {
            required: 'Email is required.',
        },
        password: {
            required: 'Password is required.',
        },
    },
    submitHandler: function(form) {
        common_auth('login-form');
    }
});

//registration  validation 
$(document).find("#registration-form").validate({
    rules: {
        full_name: {
            required: true,
            minlength:2,
            maxlength:50,
        },
        email: {
            required: true,
            minlength:4,
            maxlength:100,
            email: true,
        },
        password: {
            required: true,
            minlength:6,
            validpass: true,
            maxlength:50,
        },
        confirmpassword: {
            required: true,
            equalTo: '[name="password"]'
        },
    },
    messages: {
        full_name: {
            required: "Full Name is required.",
        },
        email: {
            required: "Email is required.",
            email: "It does not seem to be a valid email.",
            maxlength: "The email should be or equal to 100 chars.",
        },
        password: {
            required: 'Password is required.',
            minlength: 'Password should contains at least 6 characters, 1 number, 1 lowercase ,1 uppercase letter and one special character',
            notEqual: 'Current Password and New Password will not be same.',
        },
        confirmpassword: {
            required: 'Confirm Password is required.',
            equalTo: 'Password & Confirm Password must be same.',
        },
    },
    submitHandler: function(form) {
        common_auth('registration-form');
    }
})

//forgot  validation
$(document).find('#forgot-form').validate({
    rules: {
        email: {
            required: true,
            email:true
        },
        password: {
            required: true,
        },
    },
    messages: {
        email: {
            required: 'Email is required.',
        },
        password: {
            required: 'Password is required.',
        },
    },
    submitHandler: function(form) {
        common_auth('forgot-form',1);
    }
});

//reset validation 
$(document).find('#reset-password-form').validate({
    rules: {
        password: {
            required: true,
            minlength: 6,
            validpass: true,
            maxlength: 50,
        },
        confirmpassword: {
            required: true,
            equalTo: '[name="password"]'
        },
    },
    messages: {
        password: {
            required: 'Password is required.',
            minlength: 'Password should contains at least 6 characters, 1 number, 1 lowercase ,1 uppercase letter and one special character',
        },
        confirmpassword: {
            required: 'Confirm Password is required.',
            equalTo: 'Password & Confirm Password must be same.',
        },
    },
    submitHandler: function(form) {
        common_auth('reset-password-form');
    }
});

})


//Common add update function 
function common_auth(form_id, refresh_status = 1) {
    var url = $('#'+form_id).attr('action');
    var postData = $('#'+form_id).serializeArray();
    let form_btn_id = form_id + '-btn';
    $(document).find('#' + form_btn_id).buttonLoader('start');
    $(document).find('#' + form_btn_id).prop('disabled', true);

    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'JSON',
        data: postData,
        cache: false,
        success: function (response) {
            $('#' + form_btn_id).prop('disabled', false);
            $('#' + form_btn_id).buttonLoader('stop');
            var responseJSON = response;
            if (responseJSON.status == true) {
                success_message(responseJSON.msg, responseJSON.url ?? '', refresh_status);
            }
            else {
                error_message(responseJSON.msg);
            }

        },
        error: function (response) {
            $('#' + form_btn_id).prop('disabled', false);
            $('#' + form_btn_id).buttonLoader('stop');
            var responseJSON = response.responseJSON;
            if (responseJSON.status == true) {
                success_message(responseJSON.msg);
            }
            else {
                error_message(responseJSON.msg);
            }
        }
    });
}
