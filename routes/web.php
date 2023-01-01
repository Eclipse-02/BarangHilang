<?php

use App\Http\Controllers\AdminKehilanganController;
use App\Http\Controllers\AdminMenemukanController;
use App\Http\Controllers\KehilanganController;
use App\Http\Controllers\MenemukanController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('main');
});

Route::resource('menemukans', MenemukanController::class);
Route::resource('kehilangans', KehilanganController::class);

Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function ()
{
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::resource('admin/menemukans', AdminMenemukanController::class, [ 'as' => 'admin']);
    Route::resource('admin/kehilangans', AdminKehilanganController::class, [ 'as' => 'admin']);
});
