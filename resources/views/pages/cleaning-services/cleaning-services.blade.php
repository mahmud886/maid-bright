@extends('layouts.app')

@section('title')
Maid Bangladesh | Cleaning Services
@endsection

@section('content')

<section class="banner-static banner-static3" style="background: url('/assets/images/banner/contact.jpg');">
    <div class="container">
        <div class="banner-contents">
            <div class="row">
                <div class="col-50 banner-space banner-space2">
                    <div class="banner-overlay-color">
                        <div class="banner-contents-div">
                            <h1><b>Our Professional House Cleaning Services</b></h1>
                        </div>
                        <p style="text-align: justify">Whether you require a one-time or recurring cleaning for your house or apartment, we’re available to personalize your service based on your needs. Make an appointment with a Maid Bright representative for a free in-home evaluation to discuss how we can customize your cleaning.</p>
                        <div class="button-div">
                            <button  type="button" class="default-button1"><a href="http://"></a>Schedule A Free Estimate</button>
                        </div>
                    </div>
                </div>
                <div class="col-50 banner-space banner-space3">
                    <div class="spaces">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mid-sec">
    <div class="mid-text">
        <h2 class="text-head">How It Works</h2>
        <h4 class="text-h4">
            We offer a range of house cleaning services.  From an initial deep cleaning to recurring weekly bi-weekly or monthly cleaning to a move-in or move out cleaning or even a one time cleaning for a special event/season, Maid Bright services your residential cleaning needs.
        </h4>
    </div>
    <div class="row p-tb20">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 text-works">
            <span class="round-icon border border-primary">
                <i class="fa fa-home" aria-hidden="true"></i>
            </span>
            <h2>In-Home Estimate</h2>
            <p>After you schedule your free in-home consultation, a Maid Bright manager will come to your home and provide a personalized estimate.</p>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 text-works">
            <span class="round-icon border border-primary">
                <i class="fas fa-clipboard-check" aria-hidden="true"></i>
            </span>
            <h2>Review Official Paperwork</h2>
            <p>During the evaluation, you will be presented proof of Maid Bright’s certificate of insurance, bonding and references.</p>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 text-works">
            <span class="round-icon border border-primary">
                <i class="fas fa-dollar-sign" aria-hidden="true"></i>
            </span>
            <h2>Deliver Your Cost</h2>
            <p>After the consultation, the Maid Bright manager will share a total cleaning cost based on home size, location,condition and frequency of service.</p>
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