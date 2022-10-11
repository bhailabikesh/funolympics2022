@extends('front.layouts.master')
@section('content')
<!-- Breadcrumb Begin -->
<nav aria-label="breadcrumb" class="mt-4 bdcmd">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Schedule</li>
        </ol>
    </div>
</nav>
<!-- Breadcrumb End -->


<!-- Match Section -->
<section class="match-section mt-4" id="match-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3> <span>Match Schedule</span></h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-12 mb-4">
                <div class="widget-next-match">
                    <div class="widget-body mb-3">
                        <div class="widget-vs">
                            <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                                <div class="team-1 text-center">
                                    <img src="{{ asset('front_assets/img/match/tf-6.png')}}" alt="Image">
                                    <h3>Nepal</h3>
                                </div>
                                <div>
                                    <span class="vs"><span>VS</span></span>
                                </div>
                                <div class="team-2 text-center">
                                    <img src="{{ asset('front_assets/img/match/tf-1.png')}}" alt="Image">
                                    <h3>United States</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center widget-vs-contents mb-4">
                        <h4>Freestyle Skiing</h4>
                        <p class="mb-5">
                            <span class="d-block">October 15th, 2022</span>
                            <span class="d-block">08:15 AM GMT+0</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 mb-4">
                <div class="widget-next-match">
                    <div class="widget-body mb-3">
                        <div class="widget-vs">
                            <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                                <div class="team-1 text-center">
                                    <img src="{{ asset('front_assets/img/match/tf-2.png')}}" alt="Image">
                                    <h3>United Kingdom</h3>
                                </div>
                                <div>
                                    <span class="vs"><span>VS</span></span>
                                </div>
                                <div class="team-2 text-center">
                                    <img src="{{ asset('front_assets/img/match/tf-4.png')}}" alt="Image">
                                    <h3>China</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center widget-vs-contents mb-4">
                        <h4>Ice Hockey</h4>
                        <p class="mb-5">
                            <span class="d-block">October 29th, 2021</span>
                            <span class="d-block">11:30 PM GMT+0</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 mb-4">
                <div class="widget-next-match">
                    <div class="widget-body mb-3">
                        <div class="widget-vs">
                            <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                                <div class="team-1 text-center">
                                    <img src="{{ asset('front_assets/img/match/tf-3.png')}}" alt="Image">
                                    <h3>Netherland</h3>
                                </div>
                                <div>
                                    <span class="vs"><span>VS</span></span>
                                </div>
                                <div class="team-2 text-center">
                                    <img src="{{ asset('front_assets/img/match/tf-5.png')}}" alt="Image">
                                    <h3>Italy</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center widget-vs-contents mb-4">
                        <h4>Alpine Skiing</h4>
                        <p class="mb-5">
                            <span class="d-block">November 1st, 2022</span>
                            <span class="d-block">11:30 AM GMT+0</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

</section>
<!-- Match Section End -->




@endsection