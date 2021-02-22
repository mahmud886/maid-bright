<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function offers(){
        return view('pages.offers');
    }
    public function giftcertificates(){
        return view('pages.gift-certificates');
    }
    public function blog(){
        return view('pages.blog');
    }

    // About Us Pages
    public function company(){
        return view('pages.aboutus.company');
    }
    public function whymaidbright(){
        return view('pages.aboutus.why-maid-bright');
    }
    public function meettheteam(){
        return view('pages.aboutus.meet-the-team');
    }
    public function ourtestimonials(){
        return view('pages.aboutus.our-testimonials');
    }
    public function ourvideos(){
        return view('pages.aboutus.our-videos');
    }

    // Cleaning Services Pages

    public function cleaningservices(){
        return view('pages.cleaning-services.cleaning-services');
    }
    public function housekeepingservices(){
        return view('pages.cleaning-services.house-keeping-services');
    }
    public function recurringcleaning(){
        return view('pages.cleaning-services.recurring-cleaning');
    }
    public function movingcleaning(){
        return view('pages.cleaning-services.moving-cleaning');
    }
    public function onetimecleaning(){
        return view('pages.cleaning-services.one-time-cleaning');
    }
    public function apartmentcleaningservices(){
        return view('pages.cleaning-services.apartment-cleaning-services');
    }
    public function specialcleaning(){
        return view('pages.cleaning-services.special-cleaning');
    }
    public function seasonalcleaning(){
        return view('pages.cleaning-services.seasonal-cleaning');
    }

    // Contact Us Pages
    
    public function contact(){
        return view('pages.contactus.contact');
    }
    public function schedulecleaning(){
        return view('pages.contactus.schedule-cleaning');
    }
    public function requestestimate(){
        return view('pages.contactus.request-estimate');
    }
    public function providefeedback(){
        return view('pages.contactus.provide-feedback');
    }
    public function faq(){
        return view('pages.contactus.faq');
    }
    public function careers(){
        return view('pages.contactus.careers');
    }
}