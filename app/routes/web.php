<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GmoController;
use App\Http\Controllers\ProformaController;

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
    return view('welcome');
});
Route::resource('gmo', GmoController::class);
Route::resource('proforma', ProformaController::class);


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('theme', [App\Http\Controllers\UserController::class, 'index']);


Route::get('/gmoform', [App\Http\Controllers\GmoController::class, 'index'])->name('gmoform');
Route::post('/gmoform', [App\Http\Controllers\GmoController::class, 'store'])->name('gmoform');


Route::get('/view-gmo', [App\Http\Controllers\GmoController::class, 'viewgmo'])->name('viewgmo');
Route::get('/editgmo/{id}', [App\Http\Controllers\GmoController::class, 'editgmo'])->name('editgmo');

Route::put('gmoupdate/{id}', [App\Http\Controllers\GmoController::class, 'gmoupdate'])->name('gmoupdate');

// Route::get('/proforma', [App\Http\Controllers\ProformaController::class, 'index_proforma'])->name('proforma');


/*-----------------------start debitnote-------------------------------------*/
Route::get('/dnform', [App\Http\Controllers\DnController::class, 'index'])->name('dnform');
Route::post('/dnform', [App\Http\Controllers\DnController::class, 'store'])->name('dnform');


Route::get('/view-dn', [App\Http\Controllers\DnController::class, 'viewdn'])->name('viewdn');
Route::get('/editdn/{id}', [App\Http\Controllers\DnController::class, 'editdn'])->name('editdn');

Route::put('dnupdate/{id}', [App\Http\Controllers\DnController::class, 'dnupdate'])->name('dnupdate');
/*------------------------end debit note-------------------------------------*/



Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index_contact'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');





Route::post('/proforma', [App\Http\Controllers\ProformaController::class, 'index'])->name('proforma');

Route::post('/proforma', [App\Http\Controllers\ProformaController::class, 'store'])->name('proforma.store');

Route::get('/view-proforma', [App\Http\Controllers\ProformaController::class, 'viewproforma'])->name('viewproforma');
Route::get('/editproforma/{id}', [App\Http\Controllers\ProformaController::class, 'editproforma'])->name('editproforma');
Route::put('proformaupdate/{id}', [App\Http\Controllers\ProformaController::class, 'proformaupdate'])->name('proformaupdate');
