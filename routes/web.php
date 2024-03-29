<?php

use App\Http\Controllers\CommitmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', 'App\Http\Controllers\IndexController@index')->name('index');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/update_profile', [ProfileController::class, 'update_profile'])->name('profile.update_profile');
    Route::get('/profile/admin_delete/{userid}', [ProfileController::class, 'admin_destroy'])->name('profile.admin_destroy');
    Route::post('/profile/admin_delete_post', [ProfileController::class, 'admin_destroy_post'])->name('profile.admin_destroy_post');
    Route::post('/profile/admin_toggle_activation/{userid}', [ProfileController::class, 'admin_toggle_activation'])->name('profile.admin_toggle_activation');

    Route::get('/calendar/add', 'App\Http\Controllers\CalendarController@add')->name('calendar.add');
    Route::get('/calendar/year/{year}', 'App\Http\Controllers\CalendarController@index')->name('calendar.index');
    Route::get('/calendar/edit/{id}', 'App\Http\Controllers\CalendarController@edit')->name('calendar.edit');
    Route::post('/calendar/store', 'App\Http\Controllers\CalendarController@store')->name('calendar.store');
    Route::post('/calendar/update', 'App\Http\Controllers\CalendarController@update')->name('calendar.update');
    Route::get('/calendar/{id}', 'App\Http\Controllers\CalendarController@view')->name('calendar.view');

    Route::get('/monthly_fee', 'App\Http\Controllers\MonthlyFeeController@index')->name('monthly_fee.index');
    Route::get('/monthly_fee/pay/{user_id}/{year}/{month}')->name('monthly-fee.pay');

    Route::post('/set_commitment', [CommitmentController::class, 'set_commitment'])->name('set_commitment');

    Route::get('/members', [\App\Http\Controllers\MemberController::class, 'index'])->name('members.index');
});

require __DIR__.'/auth.php';
