<?php

use App\Http\Livewire\Dashboard\Home;
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

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return redirect()->route('login');
});

Route::group([
    'middleware' => ['auth', 'can:is-s'],
], function () {
    Route::view('/user-management', 'user-management.index')->name('user.management');
    Route::view('/society-restrictions', 'society-management.assign')->name('society.management.assign');
});

Route::group([
    'middleware' => ['auth', 'can:is-sa'],
], function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::view('/society-management', 'society-management.index')->name('society.management');
    Route::view('/plot-management', 'plot-management.index')->name('plot.management');
    Route::view('/plot-types-management', 'plot-types-management.index')->name('plot.types.management');
    Route::view('/expense-management', 'expense-management.index')->name('expense.management');
    Route::view('/expense-types-management', 'expense-types-management.index')->name('expense.types.management');
});
