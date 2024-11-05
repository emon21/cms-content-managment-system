$(document).ready(function(){
    "use strict";
    $(document)
    .find("#frmContactUs")
    .validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
                maxlength: 25,
            },
            email: {
                required: true,
                email: true,
            },
            subject: {
                required: true,
            },
            message: {
                required: true,
            }
        },
        messages: {
            name: {
                required: "Please Enter Full Name",
            },
            email: {
                required: "Email is required.",
                email: "Please enter valid email address.",
            },
            message: {
                required: "Message is required.",
            },
            subject: {
                required: "Subject is required.",
            }
        },
        submitHandler: function (form) {
            var postData = $("#frmContactUs").serializeArray();
            var url = BASE_URL + 'post-contact-us';
            add_update_details("frmContactUs",url, postData,0);
        },
    });
});