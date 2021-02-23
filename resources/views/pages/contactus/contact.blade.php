@extends('layouts.app')

@section('title')
Maid Bangladesh | Contact Us
@endsection

@section('content')
<section class="">
    <div class="row banner-static" style="background: url('/assets/images/banner/contact.jpg');">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-11 col-sm-11 col-11">
                        <div class="banner-contents">
                            <div class="banner-overlay-color">
                                <div class="banner-contents-div">
                                    <h1><b>Questions or Concerns?</b></h1>
                                </div>
                                <p style="text-align: justify">We are happy to assist you. Ou goal is to provide professional cleaning services along with exceptional customer service.  Your feedback is very important to us and will help us grow.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-1 col-sm-1 col-1"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-light">
    <div class="mid-sec">
        <div class="mid-text">
            <h2 class="text-head">Services Offered</h2>
        </div>
        <div class="row cleaning-services text-works">
            <div class="col25 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <h2>Extensive First Time Cleaning</h2>
                <p>Our initial cleaning is the first deep clean your house will experience.</p>
                <button class="default-button2">Read More</button>
            </div>
            <div class="col25 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <h2>Recurring Cleaning</h2>
                <p>Choose from weekly, bi-weekly or on a monthly basis.</p>
                <button class="default-button2">Read More</button>
            </div>
            <div class="col25 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <h2>One-Time Cleaning</h2>
                <p>Get your house cleaned for events, parties or for the holidays.</p>
                <button class="default-button2">Read More</button>
            </div>
            <div class="col25 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <h2>Moving Cleaning</h2>
                <p>Stress less with a thorough cleaning before and/or after a move.</p>
                <button class="default-button2">Read More</button>
            </div>
        </div>
    </div>
</section>
@endsection