<?php

use App\Http\Controllers\AdminAuth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SslCommerzPaymentController;
use Illuminate\Support\Facades\Artisan;
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


    Route::get('/souvenirs', [AdminController::class, 'souvenirs']);


    Route::get('/all-students', [AdminController::class, 'AllStudent']);
    Route::get('/payment-students', [AdminController::class, 'paymentStudent']);
    Route::get('/non-payment-students', [AdminController::class, 'nonpaymentStudent']);
    Route::get('/check-payment/{id}', [AdminController::class, 'checkPayment']);
    Route::post('/validate-sslc', [AdminController::class, 'sslcValidate']);
    Route::get('/admin-student-edit/{id}', [AdminController::class, 'adminStudentEdit']);
    Route::post('/admin-student-update', [AdminController::class, 'adminStudentUpdate']);
    Route::post('/admin-student-academic-info-update', [AdminController::class, 'adminStudentAcademicUpdate']);
    Route::post('/admin-student-professional-info-update', [AdminController::class, 'adminStudentProfessionUpdate']);



    Route::get('/payment', [AdminController::class, 'paymentData']);
    Route::get('/export-all-data', [AdminController::class, 'exportData']);
    Route::get('/export-user', [AdminController::class, 'export']);
    Route::get('/admin-student-new-ticket/{id}', [AdminController::class, 'NewTicketDownload']);
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {


});


Route::get('/', [Controller::class, 'home']);
Route::any('/privacy-policy', [Controller::class, 'privacypolicy']);
Route::any('/terms-condition', [Controller::class, 'termscondition']);
Route::any('/refund-policy', [Controller::class, 'refundpolicy']);
Route::get('/post-details/{id}', [Controller::class, 'postDetails']);
Route::get('/registration', [Controller::class, 'registration']);


##New Routes start

Route::any('/download/ticket', [Controller::class, 'downloadTicket']);
Route::any('/otp-verify/{phone}', [Controller::class, 'otpVerify']);
Route::any('/otp-check/{phone}/{otp}', [Controller::class, 'otpCheck']);

Route::any('/guest/ticket', [Controller::class, 'guestTicket']);
Route::any('/guest/payment', [Controller::class, 'guestPayment']);
Route::any('/guest/ticket-download', [Controller::class, 'guestTicketDownload']);

Route::any('/souvenir', [Controller::class, 'souvenir']);

##New Routes end

Route::group(['prefix' => 'student'], function () {
    Route::any('/registeration', [Controller::class, 'personalInfo']);
    Route::any('/personal-info-update', [Controller::class, 'personalInfoUpdate']);
    Route::any('/academic-info', [Controller::class, 'academicInfo']);
    Route::any('/academic-info-update', [Controller::class, 'academicInfoUpdate']);
    Route::any('/professional-info', [Controller::class, 'professionalInfo']);
    Route::any('/professional-info-update', [Controller::class, 'professionalInfoUpdate']);
    Route::any('/guest-info', [Controller::class, 'guestInfo']);
    Route::any('/gift-info', [Controller::class, 'giftInfo']);
    Route::any('/gift-info-update', [Controller::class, 'giftInfoUpdate']);
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
Route::get('/test', [Controller::class, 'test']);

Route::get('/clear', function () {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');

    return "Cleared!";

});
