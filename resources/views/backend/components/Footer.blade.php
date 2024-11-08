<!-- jQuery -->
<script src="{{ asset('backend') }}/plugins/jquery/jquery.min.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script> --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('backend') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('backend') }}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('backend') }}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ asset('backend') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('backend') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('backend') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('backend') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('backend') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('backend') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('backend') }}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('backend') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="{{ asset('backend') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('backend') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('backend') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend') }}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('backend') }}/dist/js/pages/dashboard.js"></script>

<!-- Select2 -->
<script src="{{ asset('backend') }}/plugins/select2/js/select2.full.min.js"></script>
<!-- Ionicons -->

<script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>

<script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>

<!-- DataTables  & Plugins -->
<script></script>

<!-- Toastify js -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
{{-- <script>
    // Data Insert Toast
    @if (Session::has('success'))
        Toastify({
            text: "{{ Session::get('success') }}",
            close: true,
            style: {
                background: "linear-gradient(to right, #00b09b, #96c93d)",
                padding: "20px",
                textTransform: "capitalize",
                fontSize: "18px",
            },

        }).showToast();
    @endif
</script> --}}

<!-- toaster -->
<script src="{{ asset('backend') }}/plugins/toastr/toastr.min.js"></script>
<script>
    @if (Session::has('message'))
        let type = "{{ Session::get('alert-type') }}";
        switch (type) {
            case "success":
                // toastr.success("{{ Session::get('message') }}");
                toastr.success(
                    "{{ Session::get('message') }}",
                    "{{ Session::get('data') }}",
                    "{{ Session::get('alert-type') }}", {
                        timeOut: 2000,
                        progressBar: true,
                        closeButton: true,
                        positionClass: "toast-top-right",
                        hideDuration: "1000",
                    });
                break;

            case "error":
                toastr.error(
                    "{{ Session::get('message') }}",
                    "{{ Session::get('data') }}",
                    "{{ Session::get('alert-type') }}", {
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
    @endif
</script>

<!-- Sweet Alert 2 -->
<script src="{{ asset('backend') }}/plugins/sweetalert2/sweetalert2.min.js"></script>

<script>
    // <!--  Sweet Alert 2 useing Data Delete Alert Message --->
    function confirmDelete(ev) {
        ev.preventDefault();
        let urlToRedirect = ev.currentTarget.getAttribute('href');

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
            timer: 2000
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "danger",
                    timer: 1000,
                    showConfirmButton: true,
                }).then((result) => {
                    if (result.isConfirmed || result.isDismissed === true) {
                        window.location.href = urlToRedirect;
                    }
                });
            }
        });
    }

    // <!-- Sweet Alert 2 useing Data Delete Message into form sumit -->

    function DeleteConfirm(ev) {
        ev.preventDefault();
        let form = ev.currentTarget.closest('form');
        // let urlToRedirect = ev.currentTarget.getAttribute('href');
        // console.log(urlToRedirect);

        // sweet alert js code
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
            timer: 2000
        }).then((result) => {


            if (result.isConfirmed) {

                Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "danger",
                        timer: 1000,
                        showConfirmButton: true,

                    })

                    .then((result) => {
                        if (result.isConfirmed || result.isDismissed === true) {
                            // window.location.href = urlToRedirect;

                            form.submit();
                        }
                    });
            }


        });
    }


    // @if (Session::has('success'))
    // Swal.fire({
    // position: "top-end",
    // icon: "success",
    // title: "{{ Session::get('success') }}",
    // showConfirmButton: false,
    // timer: 1500
    // });
    // @endif
</script>


<!-- dropify -->
<script src="{{ asset('backend') }}/dropify/dropify.min.js"></script>

<!-- Custom JS -->

<script>
    // $(".dropify").dropify();
    $('.dropify').dropify({
        messages: {
            'default': 'Drag and drop a file here or click',
            'replace': 'Drag and drop or click to replace',
            'remove': 'Remove',
            'error': 'Ooops, something wrong happended.'
        },
        height:250

    });
</script>

<script>
    $(function() {

        //Initialize Select2 Elements
        $('.select2').select2()

        // //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        // Summernote
        $('#summernote').summernote({
            placeholder: 'write here...',
            height: 250, // set editor height
            // minHeight: 600, // set minimum height of editor
            // maxHeight: 600,
            disableResizeEditor: true,
            // width:'450px'

        });

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });


        
    })
</script>

<script src="{{ asset('Backend') }}/dist/js/custom.js"></script>

</body>

</html>
