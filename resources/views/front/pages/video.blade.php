@extends('front.layouts.master')
@section('content')
@php
$Videos=App\Models\Video::all();
@endphp

<nav aria-label="breadcrumb" class="mt-4 bdcmd">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Latest Videos</li>
        </ol>
    </div>
</nav>


<!-- Video Section Begin -->
<section class="video-section mt-5">
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
            <div class="col-lg-4 mb-4">
                <div class="video-item set-bg" data-setbg="{{ url('/') }}/public/storage/posts/{{  $Video->thumbnail  }}">
                    <div class="vi-title">
                        <h5>{{ $Video->title }}</h5>
                    </div>
                    <a href="{{ route('videoDetail',$Video->id) }}" class="play-btn"><img src="{{ asset('front_assets/img/play.png') }}" alt=""></a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- Video Section End -->
@endsection