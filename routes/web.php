<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Makeupstudio;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/index','App\Http\Controllers\MakeupstudioController@index');
Route::get('/FAQ','App\Http\Controllers\MakeupstudioController@FAQ');
Route::get('/Description','App\Http\Controllers\MakeupstudioController@Description');
Route::get('/PrivacyPolicy','App\Http\Controllers\MakeupstudioController@PrivacyPolicy');
Route::get('/TermsAndConditions','App\Http\Controllers\MakeupstudioController@TermsAndConditions');
Route::get('/Thankyou','App\Http\Controllers\MakeupstudioController@Thankyou');
Route::POST('/Signin','App\Http\Controllers\MakeupstudioController@Signin');
Route::POST('Signup','App\Http\Controllers\MakeupstudioController@Signup');
Route::POST('submit', 'App\Http\Controllers\MakeupstudioController@store');
Route::POST('/adminpanel', 'App\Http\Controllers\MakeupstudioController@store');
/*Route::post(url:'adminpanel',[MakeupstudioController::class, 'store']);


Route::get('Signup', function () {
    return view('Signup');
});*/
Route::get('/',function(){
return view('Signup');
});

Route::get('adminpanel',function(){
return view('adminpanel');
});

/*
Route::get('adminpanel', function () {
    return view('adminpanel');
});

*/
/*

Route::get('Cart', function () {
    return view('Cart');
});

Route::get('Checkout', function () {
    return view('Checkout');
});

Route::get('Contact Us', function () {
    return view('Contact Us');
});


Route::get('Description', function () {
    return view('Description');
});

Route::get('faceproduct', function () {
    return view('faceproduct');
});

Route::get('FAQ', function () {
    return view('FAQ');
});

Route::get('filterproducts', function () {
    return view('filterproducts');
});

Route::get('PrivacyPolicy', function () {
    return view('PrivacyPolicy');
});

Route::get('Products', function () {
    return view('Products');
});

Route::get('Signin', function () {
    return view('Signin');
});

Route::get('Signup', function () {
    return view('Signup');
});

Route::get('adminpanel', function () {
    return view('adminpanel');
});



Route::get('Thankyou', function () {
    return view('Thankyou');
});
*/