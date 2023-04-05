<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Customer\CustomerHomeController;
use App\Http\Controllers\Customer\Auth\PasswordController;
use App\Http\Controllers\Customer\Auth\NewPasswordController;
use App\Http\Controllers\Customer\Auth\VerifyEmailController;
use App\Http\Controllers\Customer\Auth\RegisteredUserController;
use App\Http\Controllers\Customer\Auth\PasswordResetLinkController;
use App\Http\Controllers\Customer\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Customer\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Customer\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Customer\Auth\EmailVerificationNotificationController;

Route::middleware('guest:customer')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('customer.register.index');

    Route::post('register', [RegisteredUserController::class, 'store'])
        ->name('customer.register.post');;

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('customer.login.index');

    Route::post('login', [AuthenticatedSessionController::class, 'store'])
        ->name('customer.login.post');;

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('customer.password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('customer.password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('customer.password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('customer.password.store');
});

Route::middleware('auth:customer')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');
    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('customer.logout');
});

Route::middleware(['auth:customer', 'customer-verified'])->group(function () {
    Route::get('home', [CustomerHomeController::class, 'home'])->name('customer.home');
    Route::post('change-password', [CustomerHomeController::class, 'customer_change_password_update'])->name('customer.change-password.post');
    Route::get('change-password', [CustomerHomeController::class, 'customer_change_password_index'])->name('customer.change-password.index');
    Route::post('profile-customer', [CustomerHomeController::class, 'profile_customer_update'])->name('customer.profile-customer.post');
    Route::get('profile-customer', [CustomerHomeController::class, 'profile_customer_index'])->name('customer.profile-customer.index');
    Route::post('view-all-notifications', [CustomerHomeController::class, 'viewallnotifications'])->name('customer.view-all-notifications.post');
    Route::get('view-all-notifications', [CustomerHomeController::class, 'viewallnotifications'])->name('customer.view-all-notifications.index');
    Route::get('orders', [CustomerHomeController::class, 'orders'])->name('customer.orders.index');
    Route::post('orders', [CustomerHomeController::class, 'orders'])->name('customer.orders.post');
    Route::get('courses-enrolled', [CustomerHomeController::class, 'course'])->name('customer.courses-enrolled.index');
    Route::post('courses-enrolled', [CustomerHomeController::class, 'course'])->name('customer.courses-enrolled-post');
});

Route::middleware('auth:customer')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
