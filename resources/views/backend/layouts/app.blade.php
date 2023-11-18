<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('frontend/images/favicons/fav_180.png')}}">
    <title>Resolver</title>
    <!-- This page CSS -->
    <!-- This page CSS -->
    <link href="{{asset('backend/css/morris.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{asset('backend/css/pages/icon-page.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('backend/css/style.min.css')}}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{asset('backend/css/dashboard4.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/dropify.min.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="horizontal-nav skin-megna fixed-layout">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Elite admin</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" style="width: 100%">
    @include('backend.layouts.topbar')
    @include('backend.layouts.header')
    <div class="page-wrapper" >
        @yield('content')
    </div>
    @include('backend.layouts.footer')
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('backend/js/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="{{asset('backend/js/popper.min.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('backend/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('backend/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('backend/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('backend/js/custom.min.js')}}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--Sky Icons JavaScript -->
<script src="{{asset('backend/js/skycons.js')}}"></script>
<!--morris JavaScript -->
<script src="{{asset('backend/js/raphael-min.js')}}"></script>
<script src="{{asset('backend/js/dropify.min.js')}}"></script>
<script src="{{asset('backend/js/morris.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.sparkline.min.js')}}"></script>
<!-- Chart JS -->
<script src="{{asset('backend/js/dashboard4.js')}}"></script>
<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>
</body>

</html>
