@extends('front.layouts.master')
@section('content')
@php

$liveVideos=App\Models\Video::where('status',1)->get();
$Videos=App\Models\Video::all();
@endphp

<div class="site-video">
    <div class="video-wrapper">
        <div class="video-bg"></div>
        <video class="bg-video__content" autoplay="" muted="" loop="">
            <source src="{{ asset('front_assets/videos/promo.mp4')}}" type="video/mp4" />
            <source src="{{ asset('front_assets/videos/promo.webm')}}" type="video/mp4" />
            Your browser is not supported!
        </video>
    </div>

    <div class="video-caption">
        <h1 class="bg-text-line">
            Welcome to Funolympics 2022<br />City of Bayjing
        </h1>
        <p class="mt-3">
            <a href="#match-section" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Explore More</a>
        </p>
    </div>
</div>
<!-- Hero Section End -->


<!-- Highlights Static -->
<div class="site-section pt-0 feature-blocks-1" data-aos="fade" data-aos-delay="100">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg bg-sec-1">
                    <div class="text">
                        <h2 class="h5 text-white">Summary of the Games</h2>
                        <p>
                            Relive the Bayjing 2022 Games and enjoy the most exciting moments all over again and enjoy with all your friends and family partcipating from virtual as well
                        </p>
                        <p class="mb-0">
                            <a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg bg-sec-2">
                    <div class="text">
                        <h2 class="h5 text-white">City of Bayjing for Funolympics 2022</h2>
                        <p>
                            The bidding calendar was announced by the IOC in October 2012, with the application deadline set for 14 November 2013.
                        </p>
                        <p class="mb-0">
                            <a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg bg-sec-3">
                    <div class="text">
                        <h2 class="h5 text-white">Three Tough Competition Zones</h2>
                        <p>
                            Bayking hosted four snow events (snowboard big air and freestyle skiing big air, men’s and women’s), plus all the ice events
                        </p>
                        <p class="mb-0">
                            <a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Highlights Static -->


<!-- Match Section -->
<section class="match-section" id="match-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3> <span>Upcoming Match</span></h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="owl-carousel owl-theme match-carousel">
            <div class="item">
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
            <div class="item">
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
            <div class="item">
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

        <div class="text-center mt-3">
            <a href="{{ url('/schedule') }}" class="view-more">View All →</a>
        </div>
</section>
<!-- Match Section End -->

<!-- Soccer Section Begin -->
<section class="soccer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3><span>Streaming Now</span></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach($liveVideos as $liveVideo)
            <!-- <div class="col-lg-3 col-sm-6 p-0">
                <div class="soccer-item set-bg" data-setbg="{{ url('/') }}/public/storage/posts/{{  $liveVideo->thumbnail  }}">
                    <div class="si-tag">{{ $liveVideo->category }}</div>
                    <div class="si-text">
                        <h5><a href="{{ route('videoDetail',$liveVideo->id) }}">{{ $liveVideo->title }}</a></h5>
                    </div>
                </div>
            </div> -->
            <div class="col-md-4">
                <div class="video-live-container">
                    <div class="video-container">
                        <a href="{{ route('videoDetail',$liveVideo->id) }}">
                            <img src="{{ url('/') }}/public/storage/posts/{{  $liveVideo->thumbnail  }}" alt="" class="img-fluid" />
                            <div class="play-button-secondary"></div>
                        </a>
                    </div>
                    <div class="video-container-info">
                        <a href="{{ route('videoDetail',$liveVideo->id) }}">
                            <div class="category">{{ $liveVideo->category }}</div>
                            <h2 class="title">
                                {{ $liveVideo->title }}
                            </h2>
                            <div class="live-text-badge"></div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="text-center mt-3">
            <a href="{{ url('/watch_live') }}" class="view-more">View All →</a>
        </div>
    </div>
</section>
<!-- Soccer Section End -->

<!-- Video Section Begin -->
<section class="video-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3><span>Latest Videos</span></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($Videos as $Video)
            <div class="col-lg-3 mb-4">
                <div class="video-item set-bg" data-setbg="{{ url('/') }}/public/storage/posts/{{  $Video->thumbnail  }}">
                    <div class="vi-title">
                        <h5>{{ $Video->title }}</h5>
                    </div>
                    <a href="{{ route('videoDetail',$Video->id) }}" class="play-btn"><img src="{{ asset('front_assets/img/play.png') }}" alt=""></a>
                </div>
            </div>
            @endforeach


        </div>

        <div class="text-center mt-3">
            <a href="{{ url('/video') }}" class="view-more">View All →</a>
        </div>
    </div>
</section>
<!-- Video Section End -->


<!-- Latest Section Begin -->
<section class="latest-section">
    <div class="container">
        <div class="section-title-wrapper">
            <div class="section-title latest-title">
                <h3><span>Latest News</span></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="news-item popular-item set-bg" data-setbg="{{ asset('front_assets/img/news-1.jpg') }}">
                    <div class="ni-tag tenis">Badminaton</div>
                    <div class="ni-text">
                        <h5><a href="#">England reach World Cup last 16 with hard-fought win over
                                Argentina</a></h5>
                        <ul>
                            <li><i class="fa fa-calendar"></i> July 10, 2022</li>
                            <!-- <li><i class="fa fa-edit"></i> 13 Comment</li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-item popular-item set-bg" data-setbg="{{ asset('front_assets/img/news-2.jpg') }}">
                    <div class="ni-tag tenis">Baseball</div>
                    <div class="ni-text">
                        <h5><a href="#">USA reach final at 16 with hard-fought win over
                                Brazil</a></h5>
                        <ul>
                            <li><i class="fa fa-calendar"></i> Sep 10, 2022</li>
                            <!-- <li><i class="fa fa-edit"></i> 8 Comment</li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-item popular-item set-bg" data-setbg="{{ asset('front_assets/img//news-3.jpg') }}">
                    <div class="ni-tag tenis">Ice Ski</div>
                    <div class="ni-text">
                        <h5><a href="#">Nepal and India to battle again in Tennis final</a></h5>
                        <ul>
                            <li><i class="fa fa-calendar"></i> Sep 19, 2022</li>
                            <!-- <li><i class="fa fa-edit"></i> 2 Comment</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <a href="{{ url('/news') }}" class="view-more">View All →</a>
        </div>
    </div>
</section>
<!-- Latest Section End -->


@endsection