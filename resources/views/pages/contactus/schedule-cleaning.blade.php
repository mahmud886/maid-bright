@extends('layouts.app')

@section('title')
Maid Bangladesh | Contact Us
@endsection

@section('content')

<div class="contact-us-area">
    <div class="contact-us-banner">
        <div class="row ">
            <div class="col">
                <div class="contact-us-form pb-5">
                    <div class="contact-us-banner-content pb-5">
                        <h2 class="text-center">Schedule Your Next Cleaning In 5 Easy Steps</h2>
                        <p>If You are an existing Maid Bright customer, you can easily schedule your next cleaning using
                            the
                            form bellow. We offer easy schedule changes online. Simply fill out the form below and a
                            Maid Bright
                            representative will contact you with a confirmation.</p>
                        <div class="row pt-5">
                            <div class="col">
                                <div class="form-container ">
                                    <form action="" class="pb-4">
                                        <div class="form-content pt-3">
                                            <p><span>Your Information*</span></p>
                                            <div class="row">
                                                <div class="col-6 p-2">
                                                    <input type="text" class="form-control" placeholder="First name">
                                                </div>
                                                <div class="col-6 p-2">
                                                    <input type="text" class="form-control" placeholder="Last name">
                                                </div>
                                                <div class="col-12 p-2">
                                                    <input type="email" class="form-control" placeholder="Your email">
                                                </div>
                                                <div class="col-12 p-2">
                                                    <input type="phone" class="form-control"
                                                        placeholder="Your phone number">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="form-footer pt-3">
                                        <div class="row">
                                            <div class="col-2">

                                            </div>
                                            <div class="col-8">
                                                <div class="footer-content-para">
                                                    <p class="text-center">There are incomplete required fields. Please
                                                        complete <br> them.</p>
                                                </div>
                                            </div>
                                            <div class="col-2 pt-4 footer-content-button">
                                                <a href="">NEXT -></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection