<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredDealerController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('rejestracja', [
        RegisteredDealerController::class,
        'create',
    ])->name('register');

    Route::post('rejestracja', [RegisteredDealerController::class, 'store']);

    Route::get('logowanie', [
        AuthenticatedSessionController::class,
        'create',
    ])->name('login');

    Route::post('logowanie', [AuthenticatedSessionController::class, 'store']);

    Route::get('przypominanie-hasla', [
        PasswordResetLinkController::class,
        'create',
    ])->name('password.request');

    Route::post('przypominanie-hasla', [
        PasswordResetLinkController::class,
        'store',
    ])->name('password.email');

    Route::get('resetowanie-hasla/{token}', [
        NewPasswordController::class,
        'create',
    ])->name('password.reset');

    Route::post('resetowanie-hasla', [
        NewPasswordController::class,
        'store',
    ])->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('weryfikacja-email', [
        EmailVerificationPromptController::class,
        '__invoke',
    ])->name('verification.notice');

    Route::get('weryfikacja-email/{id}/{hash}', [
        VerifyEmailController::class,
        '__invoke',
    ])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/weryfikacja-powiadomienie', [
        EmailVerificationNotificationController::class,
        'store',
    ])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('potwierdzanie-hasla', [
        ConfirmablePasswordController::class,
        'show',
    ])->name('password.confirm');

    Route::post('potwierdzanie-hasla', [
        ConfirmablePasswordController::class,
        'store',
    ]);

    Route::post('wylogowywanie', [
        AuthenticatedSessionController::class,
        'destroy',
    ])->name('logout');
});
