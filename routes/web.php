<?php

use App\Http\Controllers\AksesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentController;
use Faker\Provider\ar_EG\Payment;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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



Route::middleware(['guest'])->group(function(){
    Route::get('/login' , [AuthController::class, "login"])->name('login');
    Route::post('/login' , [AuthController::class, "login_action"]);
    
});

Route::middleware(['auth'])->group(function () {
    
    Route::get('/home', function (){
            return redirect('/dashboard');
    }) ;
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/dashboard', [DashboardController::class, "index"]);
    Route::get('/payment', [PaymentController :: class, "index"]);
    Route::get('/payment/tambah', [PaymentController :: class, "create"]);
    Route::post('/payment/tambah', [PaymentController :: class, "create_action"]);
    Route::get('/payment/update' , [PaymentController::class, "update"]);
    Route::post('/payment/update' , [PaymentController::class, "update_action"]);

    Route::get('/akses' , [AksesController::class, "index"]);
    Route::get('/akses/create' , [AksesController::class, "create"]);
    Route::post('/akses/create' , [AksesController::class, "create_action"]);
    Route::get('/akses/update' , [AksesController::class, "update"]);
    Route::post('/akses/update' , [AksesController::class, "update_action"]);
    
  
    
});