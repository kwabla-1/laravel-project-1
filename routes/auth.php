<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Company\CompleteCompanyProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Individual\CompleteIndividualProfileController;
use App\Http\Controllers\RegisterCompanyController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function(){
    // for both Individual and Company
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
    
    Route::get('/company/register', [RegisterCompanyController::class, 'create'])->name('register.company');
    Route::post('/company/register', [RegisterCompanyController::class, 'store']);

    Route::post('/individual/register', [RegisteredUserController::class, 'store'])->name('register.individual');
    Route::post('/individual/register', [RegisteredUserController::class, 'store']);
});


Route::middleware('auth')->group(function() {
    //GET REQUEST
    Route::get('/complete_profille/company', [CompleteCompanyProfileController::class, 'show'])->name('companyRegister');
    Route::get('/complete_profille/individual', [CompleteIndividualProfileController::class, 'show'])->name('individualRegister');

    //POST REQUEST
    Route::post('complete_profile/company', [CompleteCompanyProfileController::class, 'store'])->name('companyRegisterStore');
    Route::post('complete_profile/individual', [CompleteIndividualProfileController::class, 'store'])->name('individualRegisterStore');
});


// DASHBOARD ROUTES
Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'home'])->name('dashboard');
    Route::get('/projects', [DashboardController::class, 'projects'])->name('projects');
    Route::get('/estimates',[DashboardController::class, 'estimates'])->name('estimates');
    Route::get('/invoice', [DashboardController::class, 'invoices'])->name('invoices');
});













Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])->name('verification.notice');
    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])->middleware(['signed', 'throttle:6,1'])->name('verification.verify');
    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')->name('verification.send');
    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

    