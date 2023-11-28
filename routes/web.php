<?php

use App\Http\Controllers\Backend\Auth\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserProfileController;
use App\Http\Controllers\Frontend\HomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', [HomeController::class, 'index'])->name('home.index');
//Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs.index');
//Route::get('/team', [HomeController::class, 'ourTeam'])->name('our-team.index');
//Route::get('/about', [HomeController::class, 'aboutUs'])->name('about.index');
//Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact.index');


Route::group(['middleware' => ['web', 'guest']], function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login/post', [AuthController::class, 'loginPost'])->name('login.post');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/register/success', [AuthController::class, 'registerSuccess'])->name('register.success');
    Route::post('/register/post', [AuthController::class, 'registerStore'])->name('register.store');

    Route::get('/account/verification/{id}', [AuthController::class, 'accountVerification'])->name('account.verification');
    Route::post('/account/verification/post/{id}', [AuthController::class, 'accountVerificationPost'])->name('account.verification.post');

});


Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/user/profile', [UserProfileController::class, 'index'])->name('user.profile');
    Route::post('/user/profile/avatar/post', [UserProfileController::class, 'saveAvatar'])->name('user.profile.avatar');
    Route::post('/user/profile/nic/front', [UserProfileController::class, 'nicFront'])->name('user.profile.nic.front');
    Route::post('/user/profile/nic/back', [UserProfileController::class, 'nicBack'])->name('user.profile.nic.back');
    Route::post('/user/profile/matric/marksheet', [UserProfileController::class, 'matricMarksheet'])->name('user.profile.matric.marksheet');
    Route::post('/user/profile/matric/certificate', [UserProfileController::class, 'matricCertificate'])->name('user.profile.matric.certificate');
    Route::post('/user/profile/enter/marksheet', [UserProfileController::class, 'enterMarksheet'])->name('user.profile.enter.marks');
    Route::post('/user/profile/enter/certificate', [UserProfileController::class, 'enterCertificate'])->name('user.profile.enter.certificate');
});
