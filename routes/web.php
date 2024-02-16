<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ui\JobController;
use App\Http\Controllers\ui\UiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('layouts');
// });

//auth
Route::get('/login',[ AuthController::class, 'login'])->name('login');
Route::post('/login',[ AuthController::class, 'loginCreate'])->name('login');
Route::get('/register',[ AuthController::class, 'register'])->name('register');
Route::post('/register',[ AuthController::class, 'registerCreate'])->name('register');
Route::post('/logout',[ AuthController::class, 'logout'])->name('logout');


//admin panel
Route::group(['prefix'=> 'admin'], function(){
    Route::get('/dashboard',[ DashboardController::class, 'index'])->name('dashboard');
    Route::get('payments',[ DashboardController::class, 'payment'])->name('payments');
    Route::get('payments/payment-info',[ DashboardController::class, 'paymentInfo'])->name('paymentInfo');

    //job categories crud
    Route::resource('categories', CategoryController::class);

    //job crud
    Route::resource('jobs', JobController::class);
});

//ui panel
Route::get('/',[ UiController::class, 'index'])->name('index');
Route::get('/jobs',[ UiController::class, 'jobs'])->name('jobs');
Route::get('/job-details',[ UiController::class, 'detail'])->name('job.details');
