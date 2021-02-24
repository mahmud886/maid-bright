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
                    <div class="col-xl-5 col-lg-5 col-md-11 col-sm-11 col-11">
                        <div class="banner-contents">
                            <div class="banner-overlay-color">
                                <div class="banner-contents-div">
                                    <h1><b>Questions or Concerns?</b></h1>
                                </div>
                                <p style="text-align: justify">We are happy to assist you. Ou goal is to provide professional cleaning services along with exceptional customer service.  Your feedback is very important to us and will help us grow.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-1 col-sm-1 col-1"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mid-sec">
    <div class="mid-text">
        <h2 class="contact-text">For your convenience, we are available by phone, fax, and email:</h2>
    </div>
    <div class="row p-tb20">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 text-works">
            <span class="round-icon border border-primary">
                <i class="far fa-building" aria-hidden="true"></i>
            </span>
            <h2>Office</h2>
            <p>10 Spring St. Suite 120 Herndon VA 20170<br>
                Monday - Friday 8 AM to 5 PM<br>
                Saturday 8AM to 3 PM</p>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 text-works">
            <span class="round-icon border border-primary">
                <i class="fas fa-phone-alt" aria-hidden="true"></i>
            </span>
            <h2>Call</h2>
            <p>Main Office 1-888-624-3274<br>
                Fax 571-926-9189<br>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 text-works">
            <span class="round-icon border border-primary">
                <i class="fas fa-mail-bulk" aria-hidden="true"></i>
            </span>
            <h2>Email</h2>
            <p>Service - service@maidbright.com<br>
                Billing - billing@maidbright.com<br>
                Feedback - feedback@maidbright.com</p>
        </div>
    </div>
</section>
@endsection