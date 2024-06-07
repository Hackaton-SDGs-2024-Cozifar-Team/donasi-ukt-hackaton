<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DonaturController;
use App\Http\Controllers\Admin\PeriodController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SubmissionController;
use App\Http\Controllers\Admin\TimelineController;
use App\Http\Controllers\Admin\UserController;
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

Route::prefix('admin')->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/management-submission',[SubmissionController::class,'index'])->name('submission.index');
    Route::get('/management-donatur',[DonaturController::class,'index'])->name('donatur.index');
    Route::get('/time-line',[TimelineController::class,'index'])->name('timeline.index');
    Route::get('/periode',[PeriodController::class,'index'])->name('periode.index');
    Route::get('/user',[UserController::class,'index'])->name('user.index');
    Route::get('/report',[ReportController::class,'index'])->name('report.index');
});