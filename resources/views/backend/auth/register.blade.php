
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
    <title>Resolver || Register</title>

    <!-- page css -->
    <link href="{{asset('backend/css/pages/login-register-lock.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('backend/css/style.min.css')}}" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
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
        <p class="loader__label">Elite admin</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<section id="wrapper">
    <div class="login-register" style="background-image:url('{{asset('backend/images/background/login-register.jpg')}}');">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material" id="loginform" action="{{route('register.store')}}" method="POST">
                    @csrf
                    @if(session('success'))
                        <div class="alert alert-info p-2" style="width: 100%;">
                            Account Created ! Check Your By Email To Verify.
                        </div>
                    @endif
                    <h3 class="text-center m-b-20">Sign Up</h3>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text"  name="name" value="{{old('name')}}" placeholder="Name">
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text"  name="email" value="{{old('email')}}" placeholder="Email">
                        </div>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text"  name="passport_or_nic" value="{{old('passport_or_nic')}}" placeholder="Username">
                        </div>
                        @error('passport_or_nic')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="number"  name="phone" value="{{old('phone')}}" placeholder="Phone">
                        </div>
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="password"  name="password" placeholder="Password">
                        </div>
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password"  name="confirm_password" placeholder="Confirm Password">
                        </div>
                        @error('confirm_password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
{{--                    <div class="form-group row">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input type="checkbox" class="custom-control-input" id="customCheck1">--}}
{{--                                <label class="custom-control-label" for="customCheck1">I agree to all <a href="javascript:void(0)">Terms</a></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="form-group text-center p-b-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            Already have an account? <a href="{{route('login')}}" class="text-info m-l-5"><b>Sign In</b></a>
                        </div>
                    </div>
                </form>
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
</script>
</body>

</html>
