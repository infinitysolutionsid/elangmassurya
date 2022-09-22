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

Route::prefix('sc/dev')->group(function () {
    Route::get('/uat', function () {
        return Redirect::to('https://docs.google.com/spreadsheets/d/e/2PACX-1vTSANWYAzhvdIu6A8GSpy5KhjsZeUamYlbvWWhmES13PUwAsDy0-TJ4uErmZgxSLR5DUOIZckGO5G20/pubhtml');
    });
});

// Social media link
Route::get('/linkedin', function () {
    return Redirect::to('https://linkedin.com/company/');
});
Route::get('/instagram', function () {
    return Redirect::to('http://www.instagram.com/ptelangmas');
});
Route::get('/facebook', function () {
    return Redirect::to('http://www.facebook.com/');
});

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

// General Menu
Route::get('/', 'webpageController@index');
Route::get('/news', 'webpageController@news');
Route::get('/events', 'webpageController@events');
Route::get('/gallery', 'webpageController@gallery');
Route::get('/about-us', 'webpageController@aboutUs');
Route::get('/contact-us', 'webpageController@contactUs');
Route::post('/contact', 'webpageController@contact');


// additional
Route::get('/terms-conditions', 'additionalController@terms');
Route::get('/privacy-policy', 'additionalController@privacy');
// Route::get('/faqs', 'additionalController@faqs');
// Route::get('/plans', 'additionalController@plans');
