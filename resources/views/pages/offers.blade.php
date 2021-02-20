@extends('layouts.app')

@section('title')
Maid Bangladesh | Offers
@endsection

@section('content')

<div class="banner-static" style="background: url('/assets/images/banner/offers.jpg');">
    <div class="container">
        <div class="banner-contents">
            <div class="row">
                <div class="col-4 banner-overlay-color">
                    <div class="banner-contents-div">
                        <h1>Save with Current Offers</h1>
                    </div>
                    <p class="text-justify">Whether you’re scheduling your first cleaning or your fourth, take advantage of these Maid Bright promotions.</p>
                    <div class="button-div">
                        <button  type="button" class="default-button1"><a href="http://"></a>Contact Us</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="widget-div">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-6">
            <div class="widget-box">
                <h3 class="widget-head">New Customer Special</h3>
                <p>Receive 10% OFF Your First Cleaning, Move-In or Move-Out Cleaning. </p>
            </div>

        </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 col-6">
        <div class="widget-box">
            <h3 class="widget-head">e-Gift Certificates</h3>
            <p>For every e-gift certificate you buy, we will donate $10 to Children’s National Hospital.</p>
        </div>
    </div>
</div>

@endsection