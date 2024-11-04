/*
*
* Template Name: Minton - Responsive Bootstrap 4 Admin Dashboard
* Author: Firstname Lastname
* File: Custom Js
*

# Color Scheme
# Sweet Alert 2
# Toastify
# Select2
# Datatables
# Dropzone
# Summernote
# Datetimepicker
# Chart.js
# CkEditor
# Dropify
# Nestable
# Tippy
# Clipboard
# Select2


*/

// ============ DataTables  & Plugins ============

$(function () {
    // 1st Data Table
    $("#example1")
        .DataTable({
            responsive: true,
            lengthChange: false,
            autoWidth: false,
            buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
        })
        .buttons()
        .container()
        .appendTo("#example1_wrapper .col-md-6:eq(0)");

    // 2nd Data Table
    $("#example2").DataTable({
        paging: true,
        lengthChange: true,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: true,
        responsive: true,
    });
});

// ================= Sweet Alert 2  ==============

// Data Insert Message

// Data Delete Message with Alert box into get url

// ===================

// =================  End of Sweet Alert 2 ==============

// <!-- Toastify -->

// =============  Start Toaster Flash Message ==================

// if (Session.has("success")) {
//     toastr.success("{{ Session::get('success') }}", "success", {
//         timeOut: 3000,
//         progressBar: true,
//         closeButton: true,
//         positionClass: "toast-top-right",
//         hideDuration: "1000",
//     });
// } else if (Session.has("error")) {
//     toastr.error("{{ Session::get('error') }}", "error", {
//         timeOut: 2000,
//         progressBar: true,
//         closeButton: true,
//         positionClass: "toast-top-right",
//         hideDuration: "1000",
//     });
// }

// # Switch case for all alert type

if (session.has("message")) {
    let type = "{{ Session::get('alert-type') }}";
    switch (type) {
        case "success":
            // toastr.success("{{ Session::get('message') }}");
            toastr.success(
                "{{ Session::get('message') }}",
                "{{ Session::get('data') }}",
                "{{ Session::get('alert-type') }}",
                {
                    timeOut: 2000,
                    progressBar: true,
                    closeButton: true,
                    positionClass: "toast-top-right",
                    hideDuration: "1000",
                }
            );
            break;

        case "error":
            toastr.error(
                "{{ Session::get('message') }}",
                "{{ Session::get('data') }}",
                "{{ Session::get('alert-type') }}",
                {
                    timeOut: 2000,
                    progressBar: true,
                    closeButton: true,
                    positionClass: "toast-top-right",
                    hideDuration: "1000",
                }
            );
            break;

        case "warning":
            toastr.warning("{{ Session::get('message') }}");
            break;

        case "info":
            toastr.info("{{ Session::get('message') }}");
            break;
    }
}

// Sweet Alert Dailog Box
Swal.fire({
    title: "Congratulations",
    text: "{{ Session::get('message') }}",
    icon: "success",
    confirmButtonText: "Ok",
    confirmButtonColor: "#3085d6",
    showCloseButton: true,
});

// =============  End of Toaster Flash Message ==================

// =============  Start of Toastify js Flash Message ==================

// =============  End of Toastify js Flash Message ==================


Swal.fire({
    title: "Congratulations",
    text: "{{ Session::get('message') }}",
    icon: "success",
    confirmButtonText: "Ok",
    confirmButtonColor: "#3085d6",
    showCloseButton: true,
});