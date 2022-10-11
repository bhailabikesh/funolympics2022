@extends('front.layouts.master')
@section('content')
<!-- Breadcrumb Begin -->
<nav aria-label="breadcrumb" class="mt-4 bdcmd">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </div>
</nav>
<!-- Breadcrumb End -->

<!-- Profile Begin -->
<section class="profile">
    <div class="container">
        <div class="basic-information">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <img src="{{ asset('front_assets/img/chat.png') }}" alt="" class="img-responsive">
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="profile-content">
                        <h2>{{ Auth::user()->name }}</h2>
                        <ul class="information">
                            <li><span>Name:</span>{{ Auth::user()->name }}</li>
                            <li><span>Email:</span>{{ Auth::user()->email }}</li>
                            <li><span>Country:</span>{{ Auth::user()->country }}</li>
                            <li><span>Phone No:</span>{{ Auth::user()->phone_code }}</li>
                            <li><span>User Type:</span>User</li>
                        </ul>
                        @php
                        $userId=Auth::user()->id;
                        @endphp
                        <div class="mt-4">
                            <a href="{{ route('userProfile',$userId) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('change.passwordPage') }}" class="btn btn-danger">Change Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Profile End -->



@endsection