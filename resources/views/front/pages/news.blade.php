@extends('front.layouts.master')
@section('content')
<!-- Breadcrumb Begin -->
<nav aria-label="breadcrumb" class="mt-4 bdcmd">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">News</li>
        </ol>
    </div>
</nav>
<!-- Breadcrumb End -->

<!-- Latest Section Begin -->
<section class="latest-section mt-4">
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
    </div>
</section>
<!-- Latest Section End -->







@endsection