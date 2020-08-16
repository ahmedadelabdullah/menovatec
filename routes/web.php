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

Route::get('/', function () {
    return view('front.index');
});


Route::group(['prefix' => 'client'], function (){
    Route::get('index' , 'clientsController@index')->name('client.index');
    Route::get('about' , 'clientsController@about')->name('client.about');
    Route::get('services' , 'clientsController@services')->name('client.services');
    Route::get('works' , 'clientsController@work')->name('client.work');
    Route::get('contact' , 'clientsController@contact')->name('client.contact');
    Route::get('freelancer' , 'clientsController@freelancer')->name('client.freelancer');

    //    index form
    Route::get('subscribed' , 'clientsController@dir')->name('client.subscribed');
    Route::post('subscribe','EmailController@store')->name('email.subscribe');
    //    contact form
    Route::get('data' , 'clientsController@confirmed')->name('contact.confirmed');
    Route::post('your_date','ContactController@store')->name('email.contact');
    //    freelancer form

    Route::get('flform' , 'clientsController@freelancer')->name('contact.freelancer');
    Route::post('flform','FreelancerController@store')->name('email.freelancer');


} );
