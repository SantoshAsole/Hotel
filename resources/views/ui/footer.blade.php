</div>

</main>

<!-- SCRIPTS -->
<!-- Global Required Scripts Start -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="{{ url('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/js/datatables.min.js') }}"></script>
<script src="{{ url('assets/js/dataTables.buttons.min.js') }}"></script>
<script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
<script src="{{ url('assets/js/buttons.flash.min.js') }}"></script>
<script src="{{ url('assets/js/jszip.min.js') }}"></script>
<script src="{{ url('assets/js/pdfmake.min.js') }}"></script>
<script src="{{ url('assets/js/vfs_fonts.js') }}"></script>
<script src="{{ url('assets/js/buttons.html5.min.js') }}"></script>
<script src="{{ url('assets/js/buttons.print.min.js') }}"></script>
<script src="{{ url('assets/js/popper.min.js') }}"></script>
<script src="{{ url('assets/js/select2.min.js') }}"></script>
<script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ url('assets/js/perfect-scrollbar.js') }}"></script>
<script src="{{ url('assets/js/jquery-ui.min.js') }}"></script>
<!-- Global Required Scripts End -->

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
<!-- Page Specific Scripts Start -->
<script src="{{ url('assets/js/jquery.steps.min.js') }}"></script>
<script src="{{ url('assets/js/form-wizard.js') }}"></script>
<script src="{{ url('assets/js/Chart.bundle.min.js') }}"></script>
<script src="{{ url('assets/js/sweetalert2.min.js') }}"></script>
<script src="{{ url('assets/js/sweet-alerts.js') }}"></script>
<script src="{{ url('assets/js/widgets.js') }}"></script>
<script src="{{ url('assets/js/clients.js') }}"></script>
<script src="{{ url('assets/js/d3.v3.min.js') }}"></script>
<script src="{{ url('assets/js/topojson.v1.min.js') }}"></script>
<script src="{{ url('assets/js/html5-qrcode.min.js') }}"></script>
<!-- Page Specific Scripts Finish -->
<!-- Costic core JavaScript -->
<script src="{{ url('assets/js/framework.js') }}"></script>
<!-- Settings -->
<script src="{{ url('assets/js/settings.js') }}"></script>
{{-- Toaster --}}
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
    // Get the container element
    // var btnContainer = document.getElementById("myDIV");/

    // Get all buttons with class="btn" inside the container
    var btns = document.getElementsByClassName("activa");

    // Loop through the buttons and add the active class to the current/clicked button
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>

<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            order: [
                [0, 'asc']
            ],

        });
    });



</script>
<script>
    $('.accordion li.active').removeClass('active');
    $(this).parent().addClass('active')
</script>












<!-- Global Required Scripts Start -->
<script src="{{url('public/assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('public/assets/js/datatables.min.js')}}"></script>
<script src="{{url('public/assets/js/dataTables.buttons.min.js')}}"></script>
<script src="{{url('public/assets/js/buttons.flash.min.js')}}"></script>
<script src="{{url('public/assets/js/jszip.min.js')}}"></script>
<script src="{{url('public/assets/js/pdfmake.min.js')}}"></script>
<script src="{{url('public/assets/js/vfs_fonts.js')}}"></script>
<script src="{{url('public/assets/js/buttons.html5.min.js')}}"></script>
<script src="{{url('public/assets/js/buttons.print.min.js')}}"></script>
<script src="{{url('public/assets/js/popper.min.js')}}"></script>
<script src="{{url('public/assets/js/select2.min.js')}}"></script>
<script src="{{url('public/assets/js/bootstrap.min.js')}}"></script>
<script src="{{url('public/assets/js/perfect-scrollbar.js')}}"></script>
<script src="{{url('public/assets/js/jquery-ui.min.js')}}"></script>
<!-- Global Required Scripts End -->
<!-- Page Specific Scripts Start -->
<script src="{{url('public/assets/js/jquery.steps.min.js')}}"></script>
<script src="{{url('public/assets/js/form-wizard.js')}}"></script>
<script src="{{url('public/assets/js/Chart.bundle.min.js')}}"></script>
<script src="{{url('public/assets/js/sweetalert2.min.js')}}"></script>
<script src="{{url('public/assets/js/sweet-alerts.js')}}"></script>
<script src="{{url('public/assets/js/d3.v3.min.js')}}"></script>
<script src="{{url('public/assets/js/topojson.v1.min.js')}}"></script>
<script src="https://cdn.datatables.net/select/1.6.0/js/dataTables.select.min.js"></script>
<!-- Page Specific Scripts Finish -->
<!-- Costic core JavaScript -->
<script src="{{url('public/assets/js/framework.js')}}"></script>
<!-- Settings -->
<script src="{{url('public/assets/js/settings.js')}}"></script>
</body>

</html>
