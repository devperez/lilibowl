<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MenuController;

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
Route::post('/getmail', [MailController::class, 'getmail'])->name('getmail');


//Routes du back office
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/mails', [MailController::class, 'displaymails'])->name('displaymails');
Route::delete('/mails/{id}', [MailController::class,'destroymail'])->name('destroymail');
Route::get('/mail', [MailController::class, 'searchmail'])->name('searchmail');
Route::get('/newadmin', [HomeController::class, 'newadmin'])->name('newadmin');
Route::post('/newadmin', [HomeController::class, 'create'])->name('createnewadmin');
Route::get('/adminindex', [HomeController::class, 'adminindex'])->name('adminindex');
Route::delete('/adminindex/{id}', [HomeController::class, 'admindestroy'])->name('admindestroy');
Route::get('/menu', [MenuController::class, 'index'])->name('menuindex');
Route::post('/menu', [MenuController::class, 'maj'])->name('maj');
Route::post('/menu/maj2', [MenuController::class, 'maj2'])->name('maj2');
