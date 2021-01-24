@extends('layouts.app')

@section('content')

<!--===============================================================================================-->
<link rel="icon" type="image/png" href="{{ asset('login_v1/images/icons/favicon.ico') }}" />
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('login_v1/vendor/bootstrap/css/bootstrap.min.cs') }}s">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.cs') }}s">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('login_v1/vendor/animate/animate.cs') }}s">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('login_v1/vendor/css-hamburgers/hamburgers.min.cs') }}s">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('login_v1/vendor/select2/select2.min.cs') }}s">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('login_v1/css/util.cs') }}s">
<link rel="stylesheet" type="text/css" href="{{ asset('login_v1/css/main.cs') }}s">
<!--===============================================================================================-->

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{ asset('login_v1/images/img-01.png') }}" alt="IMG">
            </div>

            <form class="login100-form validate-form" method="post" action="{{ route('login') }}">
                @csrf
                <span class="login100-form-title">
                    Member Login
                </span>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="email" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-12">
                    <span class="txt1">
                        Forgot
                    </span>
                    <a class="txt2" href="#">
                        Username / Password?
                    </a>
                </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="#">
                        Create your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="{{ asset('login_v1/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('login_v1/vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('login_v1/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('login_v1/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('login_v1/vendor/tilt/tilt.jquery.min.js') }}"></script>
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="{{ asset('login_v1/js/main.js') }}"></script>

@endsection
