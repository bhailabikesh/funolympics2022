@extends('front.layouts.master')
@section('content')
<link rel="stylesheet" href="{{ asset('front_assets/assets/css/countrySelect.css') }}">
<link rel="stylesheet" href="{{ asset('front_assets/assets/css/intTelInput.css') }}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" />
<!-- JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.min.js"></script>

<!-- Breadcrumb Begin -->
<nav aria-label="breadcrumb" class="mt-4 bdcmd">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
        </ol>
    </div>
</nav>
<!-- Breadcrumb End -->

<!-- Login Begin -->
<section class="login spad">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 mx-auto">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="login__form text-center">
                    <h3>Sign Up</h3>
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="input__item">
                            <input type="text" placeholder="Full Name" name="name" required>
                        </div>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <div class="input__item">
                            <input type="text" placeholder="Email address" name="email" required>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="form-group">
                            <!-- <label for="name">Country:</label> -->
                            <div class="input__item">
                                <input id="country_selector" type="text" class="form-control" name="country">
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- <label for="name">Country code:</label><br> -->
                            <div class="input__item">
                                <input type="tel" id="telephone" name="phone_code" class="form-control pl-5">
                            </div>
                        </div>
                        <div class="input__item">
                            <input type="password" placeholder="Password" name="password">
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <div class="input__item">
                            <input type="password" placeholder=" Confirm Password" name="password_confirmation">

                        </div>
                        <input type="hidden" value="c" name="is_admin">
                        <input type="hidden" value="1" name="status">
                        <button type="submit" class="site-btn">Register</button>

                        <div class="login__register">
                            <h4>Already Have An Account?</h4>
                            <a href="{{ url('user/login') }}" class="primary-btn">Login</a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- <div class="col-lg-6">
                <div class="login__register">
                    <h3>Already Have An Account?</h3>
                    <a href="{{ url('user/login') }}" class="primary-btn">Login</a>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- Login End -->

<!-- /.content -->
<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('front_assets/assets/js/countrySelect.js') }}"></script>
<script src="{{ asset('front_assets/assets/js/intlTelInput.js') }}"></script>
<script>
    $("#country_selector").countrySelect({
        defaultCountry: "us"
    });
</script>
<script>
    var input = document.querySelector("#telephone");
    intlTelInput(input, {
        initialCountry: "auto",
        geoIpLookup: function(success, failure) {
            $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "us";
                success(countryCode);
            });
        },
    });
</script>

@endsection