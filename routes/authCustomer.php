<?php

use App\Http\Controllers\Auth\Customer\AuthenticatedSessionController;
use App\Http\Controllers\Auth\Customer\ConfirmablePasswordController;
use App\Http\Controllers\Auth\Customer\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\Customer\EmailVerificationPromptController;
use App\Http\Controllers\Auth\Customer\NewPasswordController;
use App\Http\Controllers\Auth\Customer\PasswordResetLinkController;
use App\Http\Controllers\Auth\Customer\RegisteredUserController;
use App\Http\Controllers\Auth\Customer\VerifyEmailController;
use Illuminate\Support\Facades\Route;


Route::prefix('/customer')->name('customer.')->group(function(){

    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->middleware('guest:customer')
        ->name('login');// Full route /customer/login  <--> route_name: customer.login
    
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware('guest:customer')
        ->name('login');
    
    Route::get('/register', [RegisteredUserController::class, 'create'])
        ->middleware('guest:customer')
        ->name('register');

    Route::post('/register', [RegisteredUserController::class, 'store'])
        ->middleware('guest:customer')
        ->name('register');
});








Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->middleware('guest')
                ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest')
                ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->middleware('auth')
                ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['auth', 'signed', 'throttle:6,1'])
                ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth', 'throttle:6,1'])
                ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->middleware('auth')
                ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware('auth');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');
