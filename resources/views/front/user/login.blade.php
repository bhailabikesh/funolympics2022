@extends('front.layouts.master')
@section('content')
<!-- Breadcrumb Begin -->
<nav aria-label="breadcrumb" class="mt-4 bdcmd">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Login</li>
        </ol>
    </div>
</nav>
<!-- Breadcrumb End -->

<!-- Login Begin -->
<section class="login spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <div class="login__form text-center">
                    <h3>Login</h3>
                    <form action="{{ route('login') }}" method="post">
                        @csrf

                        <div class="input__item">
                            <input type="text" placeholder="Email address" name="email" require>
                            <!-- <span class="fa fa-envelope"></span> -->
                        </div>

                        <div class="input__item">
                            <input type="password" placeholder="Password" name="password" require>
                            <!-- <span class="fa fa-lock"></span> -->
                        </div>
                        <a href="{{ route('password.request') }}" class="forget_link">Forgot Your Password?</a><br>
                        <button type="submit" class="site-btn">Login</button>
                    </form>


                    <div class="login__register text-center mt-3">
                        <h4>Dont’t Have An Account?</h4>
                        <a href="{{ url('user/register') }}" class="primary-btn">Sign Up</a>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-6">
                <div class="login__register">
                    <h3>Dont’t Have An Account?</h3>
                    <a href="{{ url('user/register') }}" class="primary-btn">Sign Up</a>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- Login End -->
@endsection