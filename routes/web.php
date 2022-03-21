<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CsvController;

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

Route::view('/accueil', 'homepage', ['name'=>'homepage']);
Route::get('/restaurant', [NavController::class, 'restaurant'])->name('restaurant');
Route::get('/sensibilisation-cuisine-bio-saine-ecoresponsable', [NavController::class, 'sensibilisation'])->name('sensibilisation');
Route::get('/formation-cuisine-vegetale', [NavController::class, 'formations'])->name('formations');
Route::get('/le-menu', [NavController::class, 'menus'])->name('menus');
Route::get('/mentions-legale', [NavController::class, 'mentions'])->name('mentions');
Route::post('/getmail', [MailController::class, 'getmail'])->name('getmail');

//Routes du back office
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/mails', [MailController::class, 'displaymails'])->name('displaymails');
Route::delete('/mails/{id}', [MailController::class,'destroymail'])->name('destroymail');
Route::get('/mail', [MailController::class, 'searchmail'])->name('searchmail');
Route::get('/newadmin', [HomeController::class, 'newadmin'])->name('newadmin');
Route::post('/createnewadmin', [HomeController::class, 'create'])->name('createnewadmin');
Route::get('/adminindex', [HomeController::class, 'adminindex'])->name('adminindex');
Route::delete('/adminindex/{id}', [HomeController::class, 'admindestroy'])->name('admindestroy');
Route::get('/menu', [MenuController::class, 'index'])->name('menuindex');
Route::post('/menu', [MenuController::class, 'maj'])->name('maj');
Route::post('/mails/export',[CsvController::class, 'export'])->name('export');
Route::post('/home/export',[CsvController::class, 'partial'])->name('partial');


// Méthode fallback() en dernière position
Route::fallback(function() {
    return view('404'); // la vue 404.blade.php
});