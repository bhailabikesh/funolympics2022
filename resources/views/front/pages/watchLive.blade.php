@extends('front.layouts.master')
@section('content')
@php
$liveVideos=App\Models\Video::where('status',1)->get();
@endphp

<nav aria-label="breadcrumb" class="mt-4 bdcmd">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Live Streaming</li>
        </ol>
    </div>
</nav>

<!-- Soccer Section Begin -->
<section class="soccer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3><span>Live Now</span></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($liveVideos as $liveVideo)
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
    </div>
</section>
<!-- Soccer Section End -->
@endsection