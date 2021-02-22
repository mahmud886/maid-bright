@extends('layouts.app')

@section('title')
Maid Bangladesh | Home
@endsection


@section('content')

{{-- < Banner Area Start > --}}
    <div class="banner-area">
        <div class="container">
            <div class="banner-contents">
                <div class="row">
                    <div class="col-50 banner-spaces">
                        <div class="col-4 banner-overlay-color">
                            <div class="banner-contents-div">
                                <h1><b>Let's Get Your Home Cleaned!</b> </h1>
                            </div>
                            <p style="text-align: justify">Whether you require a one-time or recurring cleaning for your house or apartment, we’re available to personalize your service based on your needs. Make an appointment with a Maid Bright representative for a free in-home evaluation to discuss how we can customize your cleaning.</p>
                            <div class="button-div">
                                <button  type="button" class="default-button1"><a href="http://"></a>Book Your Cleaning</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-50 banner-spaces">
                        <div class="spaces">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- </ Banner Area End > --}}

{{-- < Achivement Area Start > --}}
    <div class="achivement-area">
        <div class="container">
            <div class="achivement-contents">
                <div class="row">
                    <div class="col-8">
                        <div class="single-content">
                            <p>Proudly serving clients in Northern Virginia, Maryland and Washington D.C.</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="single-content">
                            <button class="default-button2">Oder Gift Certificates</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="achivement-container">
        <div class="row">
            <div class="col-3">
                <div class="single-achivement">
                    <h3>Award Winning Service</h3>
                    <p>We a proven track record of results and for providing superior customer service. Our efforts are recognized by top consumer organizations such as Consumer’s Checkbook, Houzz, Yelp, Angie’s List and EBSCO Research.</p>
                </div>
            </div>
            <div class="col-3">
                <div class="single-achivement">
                    <h3>Our Mission Statement</h3>
                    <p>To offer specialized customer friendly cleaning services to residents in the Washington, DC area ensuring a positive experience every time.</p>
                </div>
            </div>
            <div class="col-3">
                <div class="single-achivement">
                    <h3>Family Owned Since 2004</h3>
                    <p>Family owned and operated, we are a professional cleaning company specializing in a variety of services ensuring your home is cleaned to your satisfaction.</p>
                </div>
            </div>
            <div class="col-3">
                <div class="single-achivement">
                    <h3>Community Engagement</h3>
                    <p>Maid Bright recently partnered with Children’s National Hospital by donating a portion of its proceeds towards raising pediatric care standards.</p>
                </div>
            </div>
        </div>
    </div>
{{-- </ Achivement Area End > --}}

{{-- < Exceptional Quality Service Start > --}}
    <div class="service-area">
        <div class="service-contaienr">
            <h2>Exceptional Quality Service</h2>
            <div class="row">
                <div class="col-3">
                    <div class="single-service">
                        <img src="/assets/images/services/service1.jpg" alt="">
                        <h4>Housekeeping Serivce</h4>
                        <p>Between work, family and time for you, it is difficult to keep your space clean.  Maid Bright designed housekeeping services so you can spend more time doing the things you love.</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="single-service">
                        <img src="/assets/images/services/service2.jpg" alt="">
                        <h4>Recurring Service</h4>
                        <p>We understand life can be hectic and you may not have time to keep your home tidy let alone do a deeper clean. Maid Bright offers the flexibility to schedule visits every week, every two weeks or monthly.</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="single-service">
                        <img src="/assets/images/services/service3.jpg" alt="">
                        <h4>Moving Cleaning</h4>
                        <p>Moving is a stressful event. You have multiple to-do lists leaving you with little to no energy to clean or tidy up your home before or after a move.</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="single-service">
                        <img src="/assets/images/services/service4.jpg" alt="">
                        <h4>One-Time Cleaning</h4>
                        <p>Preparing for a family gathering?  Need your home fall or spring cleaned?  Let Maid Bright be your house cleaning go-to. We will deliver the clean your home requires before a special event or occasion.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- < Exceptional Quality Service Start > --}}

{{-- < Maid Cleaning Checklist Start > --}}
<div class="container">
    <div class="checklist-services-area">
        <h2>Maid Bright Cleaning Checklist</h2>
        <div class="single-checklist">
            <div class="row">
                <div class="col-3">

                </div>
                <div class="col-3 cleaning-margin">
                   <div class="cleaning-content  cleaning-content1 cleaning-content-bg">
                    <h3>Bathrooms</h3>
                   </div>
                </div>
                <div class="col-3 cleaning-margin">
                    <div class="cleaning-content  cleaning-content2 cleaning-content-bg">
                    <h3>Bathrooms</h3>
                   </div>
                </div>
                <div class="col-3">

                </div>
            </div>
            <div class="row">
                <div class="col-3">

                </div>
                <div class="col-3 cleaning-margin  mt-5 ">
                   <div class="cleaning-content  cleaning-content3 cleaning-content-bg">
                    <h3>Bathrooms</h3>
                   </div>
                </div>
                <div class="col-3 cleaning-margin  mt-5">
                    <div class="cleaning-content  cleaning-content4 cleaning-content-bg">
                    <h3>Bathrooms</h3>
                   </div>
                </div>
                <div class="col-3">

                </div>
            </div>
        </div>
    </div>
</div>
{{-- </ Maid Cleaning Checklist End > --}}
@endsection
