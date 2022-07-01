<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Lov's Medical</title>

        <meta name="description" content="Lov's Medical">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta property="og:title" content="Lov's Medical">
        <meta property="og:site_name" content="Lov's Medical">
        <meta property="og:description" content="Lov's Medical">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <link rel="shortcut icon" href="{{asset('assets/media/logo.png')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/media/logo.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/media/logo.png')}}">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="{{asset('assets/css/codebase.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.css')}}">

    </head>
    <body>

        <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-narrow">
            
            @include('partials.side-bar')

            
            @yield('content')


        </div>
        <script src="{{asset('assets/js/codebase.core.min.js')}}"></script>
        <script src="{{asset('assets/js/codebase.app.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/chartjs/Chart.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/pages/be_pages_dashboard.min.js')}}"></script>

        <script src="{{asset('assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/js/pages/be_tables_datatables.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/pwstrength-bootstrap/pwstrength-bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/select2/js/select2.full.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/masked-inputs/jquery.maskedinput.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/dropzonejs/dropzone.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/flatpickr/flatpickr.min.js')}}"></script>

        <script src="{{asset('assets/js/pages/be_forms_plugins.min.js')}}"></script>
        <script>jQuery(function(){ Codebase.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']); });</script>
    </body>
</html>
