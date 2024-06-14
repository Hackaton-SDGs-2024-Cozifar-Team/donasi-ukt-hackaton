<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DonaturController;
use App\Http\Controllers\Admin\PeriodController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SubmissionController;
use App\Http\Controllers\Admin\TimelineController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Mahasiswa\DashboardMahasiswaController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegisterFormController;
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

Route::get('/',[MainController::class,'index'])->name('landing-page');
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/add-register',[LoginController::class,'addRegister']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/authenticate',[LoginController::class,'authenticate']);

Route::middleware('auth')->group(function () {
    Route::get('/form-register',[RegisterFormController::class,'index']);
    Route::get('/form-donasi',[DonationController::class,'index']);
    Route::post('/add-recipient',[RegisterFormController::class,'addRecipient']);

    Route::prefix('admin')->group(function () {
        Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
        Route::get('/management-submission',[SubmissionController::class,'index'])->name('submission.index');
        Route::get('detail-submission/{id_user}', [SubmissionController::class, 'detailSubmission'])->name('submission.detail');
        Route::put('/update-status/{id_donation_registration}', [SubmissionController::class, 'updateStatus'])->name('submission.updateStatus');
        Route::get('/management-donatur',[DonaturController::class,'index'])->name('donatur.index');
        Route::get('/periode',[PeriodController::class,'index'])->name('periode.index');
        Route::get('/user',[UserController::class,'index'])->name('user.index');
        Route::get('/report',[ReportController::class,'index'])->name('report.index');

        Route::prefix('time-line')->group(function () {
            Route::get('/',[TimelineController::class,'index'])->name('timeline.index');
            Route::get('/create',[TimelineController::class,'create'])->name('timeline.create');
        });
    });

    Route::prefix('mahasiswa')->group(function () {
        Route::get('/dashboard',[DashboardMahasiswaController::class,'index'])->name('mahasiswa.index');
    });
});
