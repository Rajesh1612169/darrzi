
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
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('backend/images/favicon.png')}}">
    <title>Resolver || Registered</title>

    <!-- page css -->
    <link href="{{asset('backend/css/pages/login-register-lock.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('backend/css/style.min.css')}}" rel="stylesheet">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="skin-default card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Resolver</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<section id="wrapper">
    @if(session('success'))
        <div class="alert alert-success" style="width: 20%;position: absolute;right: 10px;top: 10px;">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger" style="width: 20%;position: absolute;right: 10px;top: 10px;">
            {{ session('error') }}
        </div>
    @endif
    <div class="login-register" style="background-image:url('{{asset('backend/images/background/login-register.jpg')}}');">
        <div class="login-box card w-50">
            <div class="card-body">
                <h2 class="text-center m-b-20">Account Created Successfully</h2>
                <hr>
                <h3 class="text-center m-b-20">Check Your Email To Verify Account!</h3>
            </div>
        </div>
    </div>
</section>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('backend/js/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('backend/js/popper.min.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
<script type="text/javascript">
    $(function() {
        $(".preloader").fadeOut();
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });

    $(document).ready(function(){
        setTimeout(function(){
            $(".alert-success").fadeOut("slow");
        }, 6000);
    });
</script>
</body>

</html>
