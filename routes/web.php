<?php

use App\Http\Controllers\CommitmentController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/calendar', 'App\Http\Controllers\CalendarController@index')->name('calendar.index');
    Route::get('/calendar/{id}', 'App\Http\Controllers\CalendarController@view')->name('calendar.view');
    Route::get('/calendar/edit/{id}', 'App\Http\Controllers\CalendarController@edit')->name('calendar.edit');
    Route::post('/calendar/store', 'App\Http\Controllers\CalendarController@store')->name('calendar.store');
    Route::get('/calendar/add', 'App\Http\Controllers\CalendarController@add')->name('calendar.add');
    Route::post('/calendar/update', 'App\Http\Controllers\CalendarController@update')->name('calendar.update');

    Route::get('/monthly_fee', 'App\Http\Controllers\MonthlyFeeController@index')->name('monthly_fee.index');
    Route::get('/monthly_fee/pay/{user_id}/{year}/{month}')->name('monthly-fee.pay');

    Route::post('/set_commitment', [CommitmentController::class, 'set_commitment'])->name('set_commitment');
});

require __DIR__.'/auth.php';
