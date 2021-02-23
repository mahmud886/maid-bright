@extends('layouts.app')

@section('title')
Maid Bangladesh | About Us
@endsection

@section('content')

<section class="banner-static banner-static2" style="background: url('/assets/images/banner/company.jpg');">
    <div class="container">
        <div class="banner-contents">
            <div class="row">
                <div class="col-50 banner-space banner-space2">
                    <div class="banner-overlay-color">
                        <div class="banner-contents-div">
                            <h1><b>Family-Owned and Trusted Since 2004</b></h1>
                        </div>
                        <p style="text-align: justify">For more than 17 years, Maid Bright has offered residential cleaning services in the Washington, DC metro area.  Family owned and operated, we are a professional cleaning company specializing in a variety of services ensuring your home is cleaned to your satisfaction.</p>
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
        <h2 class="text-head">Award-Winning Cleaning Service</h2>
        <p class="text-p">
            Maid Bright has a proven track record of results and for providing superior customer service. Our efforts are recognized by top consumer organizations such as Consumer’s Checkbook, Houzz, Yelp, Angie’s List and EBSCO Research.
        </p>
        <h4 class="p-head">
            Recognition Awards:
        </h4>
        <p class="text-p">
            “Best Maid Service in Northern Virginia” – NOVA magazine, 2014
        </p>
        <p class="text-p">
            “Small Business Award” – Reston Chamber of Commerce, 2015
        </p>
        <p class="text-p">
            “Super Service Award” for 10 consecutive years – Angie’s List
        </p>
    </div>
    <div class="row">
        <div class="col-4">
            <img class="mid-img" src="{{ asset('/assets/images/awards/award-1.jpg')}}" alt="">
        </div>
        <div class="col-4">
            <img class="mid-img" src="{{ asset('/assets/images/awards/award-2.jpg')}}" alt="">
        </div>
        <div class="col-4">
            <img class="mid-img" src="{{ asset('/assets/images/awards/award-3.jpg')}}" alt="">
        </div>
    </div>
</section>
<section class="mission">
    <div class="mid-sec mid-text">
        <h2 class="text-head">
            Our Mission
        </h2>
        <h4 class="text-h4">
            To offer specialized customer friendly cleaning services to residents in the Washington, DC area ensuring a positive experience every time.
        </h4>
    </div>
</section>
<section class="mid-sec p-lf20">
    <h2 class="text-head mid-text">A Professional Cleaning Team</h2>
    <div class="row">
        <div class="col-5">
            <img src="{{ asset('/assets/images/others/mission.jpg')}}" alt="">
        </div>
        <div class="col-7 professional">
            <p class="text-p text-justify">
                Every Maid Bright employee has been carefully chosen with quality service top of mind. We thoroughly screen each cleaning team member for a friendly personality and make sure previous employment and references align with our strict standards. New employees are trained by experienced supervisors teaching them Maid Bright’s esteemed cleaning techniques. When the Maid Bright team arrive to your home, you will be greeted by a Maid Bright supervisor along with the cleaning team for quality and safety reassurance. All Maid Bright members will be in uniform bringing top-grade eco-friendly cleaning supplies and necessary equipment.
            </p>
        </div>
    </div>

</section>

@endsection