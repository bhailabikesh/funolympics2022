@extends('front.layouts.master')
@section('content')
<!-- Breadcrumb Begin -->
<nav aria-label="breadcrumb" class="mt-4 bdcmd">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </div>
</nav>
<!-- Breadcrumb End -->

<!-- Login Begin -->
<section class="login spad">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-6">
                <div class="contact__info">
                    <h3>Contact Info</h3>
                    <p>
                        The City of Bayjing won the bid to host the next FunOlympic Games in 2022. During the buildup to the planned games in 2022 the city had already invested hugely in IT infrastructure and
                        systems to make sure that the games would have been well organised, staffed, attended, and
                        accessible to everyone
                    </p>
                    <ul>
                        <li><i class="fa fa-envelope mr-3"></i> support@funolympics.com </li>
                        <li><i class="fa fa-phone mr-3"></i> +(12) 345 6789 </li>
                        <li><i class="fa fa-map-marker mr-3"></i> 930 City of Bayjing, Bayjing, China</li>
                    </ul>
                </div>
            </div> -->
            <div class="col-lg-6 mx-auto">
                <div class="login__form text-center">
                    <h3>Your Message</h3>
                    <form action="{{ url('/create') }}" method="post">
                        @csrf

                        <div class="input__item">
                            <input type="text" placeholder="Your Full Name" name="name">
                            <!-- <span class="fa fa-user"></span> -->
                        </div>
                        <div class="input__item">
                            <input type="email" placeholder="Your Email Address" name="email">
                            <!-- <span class="fa fa-envelope"></span> -->
                        </div>
                        <div class="input__item">
                            <input type="text" name="subject" placeholder="Subject*">
                            <!-- <span class="fa fa-list"></span> -->
                        </div>
                        <div class="input__item textarea-item">
                            <textarea name="message" id="" rows="5" placeholder="Message..." class="form-control"></textarea>
                        </div>
                        <button type="submit" class="site-btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login End -->


@endsection