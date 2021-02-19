<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'BaseController@home')->name('home');


// Normal Pages

Route::get('/offers', 'BaseController@offers')->name('offers');
Route::get('/gift-certificates', 'BaseController@giftcertificates')->name('gift-certificates');
Route::get('/blog', 'BaseController@blog')->name('blog');

// About Us Pages

Route::get('/aboutus/why-maid-bright', 'BaseController@whymaidbright')->name('why-maid-bright');
Route::get('/aboutus/meet-the-team', 'BaseController@meettheteam')->name('meet-the-team');
Route::get('/aboutus/our-testimonials', 'BaseController@ourtestimonials')->name('our-testimonials');
Route::get('/aboutus/our-videos', 'BaseController@ourvideos')->name('ourvideos');

// Cleaning Services Pages

Route::get('/cleaning-services/house-keeping-services', 'BaseController@housekeepingservices')->name('house-keeping-services');
Route::get('/cleaning-services/recurring-cleaning', 'BaseController@recurringcleaning')->name('recurring-cleaning');
Route::get('/cleaning-services/moving-cleaning', 'BaseController@movingcleaning')->name('moving-cleaning');
Route::get('/cleaning-services/one-time-cleaning', 'BaseController@onetimecleaning')->name('one-time-cleaning');
Route::get('/cleaning-services/apartment-cleaning-services', 'BaseController@apartmentcleaningservices')->name('apartment-cleaning-services');
Route::get('/cleaning-services/special-cleaning', 'BaseController@specialcleaning')->name('special-cleaning');
Route::get('/cleaning-services/seasonal-cleaning', 'BaseController@seasonalcleaning')->name('seasonal-cleaning');

// Contact Us Pages

Route::get('/contactus/schedule-cleaning', 'BaseController@schedulecleaning')->name('schedule-cleaning');
Route::get('/contactus/request-estimate', 'BaseController@requestestimate')->name('request-estimate');
Route::get('/contactus/provide-feedback', 'BaseController@providefeedback')->name('provide-feedback');
Route::get('/contactus/faq', 'BaseController@faq')->name('faq');
Route::get('/contactus/careers', 'BaseController@careers')->name('careers');


// Ending