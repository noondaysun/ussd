<?php

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

Route::get('/', IndexAction::class)->name('homepage');

Route::group(['namespace' => 'ContactDetail'], function() {
    $this->get('contact_details', ContactDetailListAction::class)
         ->name('contact.details');
    $this->post('contact_details', ContactDetailStoreAction::class)
         ->name('contact.detail.create');
    $this->get('contact_details/{contactDetailId}', ContactDetailShowAction::class)
         ->name('contact.detail');
    $this->patch('contact_details/{contactDetailId}', ContactDetailAmendAction::class)
         ->name('contact.detail.update');
});

Route::group(['namespace' => 'Auth'], function() {

    Route::group(['middleware' => 'guest'], function() {

        // Login Routes
        $this->get('login', LoginShowAction::class)
             ->name('login.show');
        $this->post('login', LoginStoreAction::class)
             ->name('login.store');

        // Registration Routes
        $this->get('register', RegisterShowAction::class)
             ->name('register.show');
        $this->post('register', RegisterStoreAction::class)
             ->name('register.store');

        // Password Reset Routes
        $this->get('password/reset', PasswordShowAction::class)
             ->name('password.request');
        $this->post('password/email', PasswordStoreAction::class)
             ->name('password.email');
        $this->get('password/reset/{token}', ResetShowAction::class)
             ->name('password.reset');
        $this->post('password/reset', ResetStoreAction::class);
    });

    // Logout Route
    $this->get('logout', LogoutAction::class)
         ->middleware('auth')
         ->name('logout');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', Dashboard\IndexAction::class)
        ->name('dashboard');

    Route::get('/account/settings', Account\SettingEditAction::class)
        ->name('settings.edit');
    Route::post('/account/settings', Account\SettingUpdateAction::class)
        ->name('settings.update');
});
