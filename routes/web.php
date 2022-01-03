<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;


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

Route::get('/', [NavController::class, 'homepage'])->name('homepage');
Route::post('/', [MailController::class, 'getMail'])->name('getMail');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/mails', [MailController::class, 'index'])->name('index');