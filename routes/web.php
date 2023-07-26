<?php

use App\Http\Controllers\AdminKacab\DataAnakController;
use App\Http\Controllers\AdminKacab\DataController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});



Route::controller(AuthController::class)->group(function(){
    Route::get('register','register')->name(('register'));
    Route::post('register','registerSave')->name(('register.save'));

    Route::get('/login','login')->name(('login'));
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'user-access:adminkacab'])->group(function () {
    Route::get('/tables', [DataAnakController::class, 'index'])->name('adminkacab.tables');
    Route::post('/store', [DataAnakController::class, 'store'])->name('adminkacab.store');
    //Route::get('ajax-crud-table', [DataAnakController::class, 'index']);
});