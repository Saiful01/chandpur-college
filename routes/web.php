<?php

use App\Http\Controllers\AdminAuth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SslCommerzPaymentController;
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

Route::any('/login', [AdminAuth::class, 'login']);
Route::any('/admin/login', [AdminAuth::class, 'login']);
Route::any('/forget-password', [AdminAuth::class, 'forgetPassword']);
Route::any('/reset-password/{id}', [AdminAuth::class, 'resetPassword']);


Route::group(['middleware' => 'admin'], function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::resource('/posts', PostController::class);
    Route::resource('/categories', CategoryController::class);

    Route::get('/profile', [AdminController::class, 'profile']);
    Route::post('/profile-update', [AdminController::class, 'profileUpdate']);
    Route::get('/log-out', [AdminController::class, 'logOut']);


    Route::get('/students', [AdminController::class, 'student']);
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {


});


Route::get('/', [Controller::class, 'home']);
Route::any('/privacy-policy', [Controller::class, 'privacypolicy']);
Route::any('/terms-condition', [Controller::class, 'termscondition']);
Route::any('/refund-policy', [Controller::class, 'refundpolicy']);
Route::get('/post-details/{id}', [Controller::class, 'postDetails']);
Route::get('/registration', [Controller::class, 'registration']);

Route::group(['prefix' => 'student'], function () {
    Route::any('/personal-info', [Controller::class, 'personalInfo']);
    Route::any('/academic-info', [Controller::class, 'academicInfo']);
    Route::any('/professional-info', [Controller::class, 'professionalInfo']);
    Route::any('/guest-info', [Controller::class, 'guestInfo']);
    Route::any('/gift-info', [Controller::class, 'giftInfo']);
    Route::any('/fee-info', [Controller::class, 'feeInfo']);

    Route::any('/payment/{amount}', [Controller::class, 'payment']);

});

Route::group(['prefix' => 'current-student'], function () {
    Route::any('/personal-info', [Controller::class, 'CurrentPersonalInfo']);
    Route::any('/fee-info', [Controller::class, 'CurrentFeeInfo']);
    Route::any('/payment/{amount}', [Controller::class, 'CurrentPayment']);


});
Route::any('/success', [Controller::class, 'invitationInfo']);


// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

/*Route::post('/success', [SslCommerzPaymentController::class, 'success']);*/
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


Route::any('/download', [Controller::class, 'pdf']);

Route::get('/mail', [Controller::class, 'mail']);
