<!-- jQuery -->
<script src="{{ asset('backend') }}/plugins/jquery/jquery.min.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script> --}}
{{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> --}}
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
<!-- bootstrap color picker -->
<script src="{{ asset('backend') }}/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
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


<!-- ChartJS -->
<script src="{{ asset('backend') }}/plugins/chart.js/Chart.min.js"></script>

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


    @if (Session::has('success'))
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "{{ Session::get('success') }}",
            showConfirmButton: false,
            timer: 1500
        });
    @endif
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
        height: 250

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

    //Colorpicker
    $('#color1,#color2,#color3,#color4,#color5,#color6,.my-colorpicker2').colorpicker()
    // $('.colorpicker1').colorpicker()
    //color picker with addon
    // $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    //      $(function () {
    //     $('#cp2, #cp3a, #cp3b').colorpicker();
    //     const color = $('#cp4').data('color');

    //     $('#cp4').colorpicker({"color": "#16813D"});
    //   });

    // # Color Picker with Alpha Channel


    // $('#cp2, #cp3a, #cp3b').colorpicker();
</script>

<script src="{{ asset('Backend') }}/dist/js/custom.js"></script>
<script>
    $(function() {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        //--------------
        //- AREA CHART -
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

        var areaChartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                    label: 'Digital Goods',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [28, 48, 40, 19, 86, 27, 90]
                },
                {
                    label: 'Electronics',
                    backgroundColor: 'rgba(210, 214, 222, 1)',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
            ]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        })

        //-------------
        //- LINE CHART -
        //--------------
        var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
        var lineChartOptions = $.extend(true, {}, areaChartOptions)
        var lineChartData = $.extend(true, {}, areaChartData)
        lineChartData.datasets[0].fill = false;
        lineChartData.datasets[1].fill = false;
        lineChartOptions.datasetFill = false

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })

        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData = {
            labels: [
                'Chrome',
                'IE',
                'FireFox',
                'Safari',
                'Opera',
                'Navigator',
            ],
            datasets: [{
                data: [700, 500, 400, 600, 300, 100],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
            }]
        }
        var donutOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })

        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieData = donutData;
        var pieOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        })

        //-------------
        //- BAR CHART -
        //-------------
        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = $.extend(true, {}, areaChartData)
        var temp0 = areaChartData.datasets[0]
        var temp1 = areaChartData.datasets[1]
        barChartData.datasets[0] = temp1
        barChartData.datasets[1] = temp0

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        //---------------------
        //- STACKED BAR CHART -
        //---------------------
        var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
        var stackedBarChartData = $.extend(true, {}, barChartData)

        var stackedBarChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }

        new Chart(stackedBarChartCanvas, {
            type: 'bar',
            data: stackedBarChartData,
            options: stackedBarChartOptions
        })
    })
</script>

<!-- iconpicker JS -->
{{-- fontawesome-iconpicker.js --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.10.0/js/bootstrap-iconpicker.min.js"> --}}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.10.0/js/bootstrap-iconpicker.bundle.min.js">
</script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.10.0/js/bootstrap-iconpicker.bundle.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.10.0/js/bootstrap-iconpicker.js"></script> --}}


<!-- Font Awesome iconpicker CSS -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js"></script> --}}

<script>
    // $(function(){

    //   $('.iconpicker').iconpicker();

    //   $('.demo').iconpicker();

    // });

    $('.demo').iconpicker();


    $('.iconpicker').iconpicker();

    // $('#target').iconpicker();


    // $('.iconpicker').iconpicker({
    //     arrowClass: 'btn-danger',
    //     arrowPrevIconClass: 'fas fa-angle-left',
    //     arrowNextIconClass: 'fas fa-angle-right',
    //     cols: 10,
    //     footer: true,
    //     header: true,
    //     icon: 'fas fa-bomb',
    //     iconset: 'fontawesome5',
    //     labelHeader: '{0} of {1} pages',
    //     labelFooter: '{0} - {1} of {2} icons',
    //     placement: 'bottom',
    //     rows: 5,
    //     search: true,
    //     searchText: 'Search',
    //     selectedClass: 'btn-success',
    //     unselectedClass: ''
    // });

    // Default options
    // $('#target').iconpicker();

    // Custom options
    // $('#target').iconpicker({
    //     align: 'center', // Only in div tag
    //     arrowClass: 'btn-danger',
    //     // arrowPrevIconClass: 'fas fa-angle-left',
    //     // arrowNextIconClass: 'fas fa-angle-right',
    //     cols: 10,
    //     footer: true,
    //     // header: true,
    //     // icon: 'fas fa-bomb',
    //     iconset: 'fontawesome5',
    //     // labelHeader: '{0} of {1} pages',
    //     labelFooter: '{0} - {1} of {2} icons',
    //     placement: 'bottom', // Only in button tag
    //     rows: 6,
    //     // search: true,
    //     searchText: 'Search',
    //     selectedClass: 'btn-success',
    //     unselectedClass: ''
    // });

    //     $('.iconpicker').iconpicker({

    //   // Icon picker title

    //   title:false,

    //   // Selected icon on init

    //   selected:false,

    //   // Default icon

    //   defaultValue:false,

    //   // inline

    //   // topLeftCorner

    //   // topLeft

    //   // top (center)

    //   // topRight

    //   // topRightCorner

    //   // rightTop

    //   // right (center)

    //   // rightBottom

    //   // bottomRightCorner

    //   // bottomRight

    //   // bottom (center)

    //   // bottomLeft

    //   // bottomLeftCorner

    //   // leftBottom

    //   // left (center)

    //   // leftTop

    //   placement:"bottom",

    //   // Determine whether to re-position the icon picker

    //   collision:"none",

    //   // Enable animation

    //   animation:true,

    //   // Hide the icon picker on select

    //   hideOnSelect:false,

    //   // Show popover footer

    //   showFooter:false,

    //   // Place the search filed in the footer

    //   searchInFooter:false,

    //   // Pick the icon when click the accept button in the footer

    //   mustAccept:false,

    //   // CSS class for the selected icon

    //   selectedCustomClass:"bg-primary",

    //   // List of icon objects

    //   icons: [],

    //   // Custom class formatter

    //   fullClassFormatter:function (e) {

    //     return e;

    //   },

    //   // Input selector

    //   input:"input,.iconpicker-input",

    //   // Determine whether to use this the input as a search box

    //   inputSearch:false,

    //   // Append the icon picker to a specific element

    //   container:false,

    //   // Default selector

    //   component:".input-group-addon,.iconpicker-component",

    //   // Customize the template here

    //   templates: {

    //     popover:'<div class="iconpicker-popover popover" role="tooltip"><div class="arrow"></div>' +'<div class="popover-title"></div><div class="popover-content"></div></div>',

    //     footer:'<div class="popover-footer"></div>',

    //     buttons:'<button class="iconpicker-btn iconpicker-btn-cancel btn btn-default btn-sm">Cancel</button>' +' <button class="iconpicker-btn iconpicker-btn-accept btn btn-primary btn-sm">Accept</button>',

    //     search:'<input type="search" class="form-control iconpicker-search" placeholder="Type to filter" />',

    //     iconpicker:'<div class="iconpicker"><div class="iconpicker-items"></div></div>',

    //     iconpickerItem:'<a role="button" href="javascript:;" class="iconpicker-item"><i></i></a>'

    //   }

    // });


    // $('#convert_example_1').iconpicker({
    //     arrowClass: 'btn-danger',
    //     arrowPrevIconClass: 'fas fa-angle-left',
    //     arrowNextIconClass: 'fas fa-angle-right',
    //     cols: 10,
    //     footer: true,
    //     header: true,
    //     icon: 'fas fa-bomb',
    //     iconset: 'fontawesome5',
    //     labelHeader: '{0} of {1} pages',
    //     labelFooter: '{0} - {1} of {2} icons',
    //     placement: 'bottom',
    //     rows: 5,
    //     search: true,
    //     searchText: 'Search',
    //     selectedClass: 'btn-success',
    //     unselectedClass: ''
    // });

    // $('#target').on('change', function(e) {
    //     console.log(e.icon);
    // });
</script>

{{-- <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxtHTPuxfqGKDeyp0d-N-EmE7Luy9ELJA&callback=initMap&v=weekly"></script> --}}

 
<script>
   

     function initMap() {

          const myLatLng = { lat:23.0626318, lng: 89.8829389 };

          const map = new google.maps.Map(document.getElementById("googleMap"), {

            zoom: 10,

            center: myLatLng,

          });

  

          new google.maps.Marker({

            position: myLatLng,

            map,

            title: "Hello Rajkot!",

          });

        }

  

        window.initMap = initMap;

</script>


<script
      src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap&v=weekly"
      defer
    ></script>


</body>

</html>
