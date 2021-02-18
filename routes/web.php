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
Route::get('/giftcertificates', 'BaseController@giftcertificates')->name('gift-certificates');
Route::get('/blog', 'BaseController@blog')->name('blog');

// About Us Pages

Route::get('/aboutus/whymaidbright', 'BaseController@whymaidbright')->name('why-maid-bright');
Route::get('/aboutus/meettheteam', 'BaseController@meettheteam')->name('meet-the-team');
Route::get('/aboutus/ourtestimonials', 'BaseController@ourtestimonials')->name('our-testimonials');
Route::get('/aboutus/ourvideos', 'BaseController@ourvideos')->name('ourvideos');

// Cleaning Services Pages

Route::get('/cleaning-services/housekeepingservices', 'BaseController@housekeepingservices')->name('house-keeping-services');
Route::get('/cleaning-services/recurringcleaning', 'BaseController@recurringcleaning')->name('recurring-cleaning');
Route::get('/cleaning-services/movingcleaning', 'BaseController@movingcleaning')->name('moving-cleaning');
Route::get('/cleaning-services/onetimecleaning', 'BaseController@onetimecleaning')->name('one-time-cleaning');
Route::get('/cleaning-services/apartmentcleaningservices', 'BaseController@apartmentcleaningservices')->name('apartment-cleaning-services');
Route::get('/cleaning-services/specialcleaning', 'BaseController@specialcleaning')->name('special-cleaning');
Route::get('/cleaning-services/seasonalcleaning', 'BaseController@seasonalcleaning')->name('seasonal-cleaning');

// Contact Us Pages

Route::get('/contactus/schedulecleaning', 'BaseController@schedulecleaning')->name('schedule-cleaning');
Route::get('/contactus/requestestimate', 'BaseController@requestestimate')->name('request-estimate');
Route::get('/contactus/providefeedback', 'BaseController@providefeedback')->name('provide-feedback');
Route::get('/contactus/faq', 'BaseController@faq')->name('faq');
Route::get('/contactus/careers', 'BaseController@careers')->name('careers');


// Ending