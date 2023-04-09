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


Route::get('/viewgmo', [App\Http\Controllers\GmoController::class, 'viewgmo'])->name('viewgmo');
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



/*-----------------------start heavy metal------------------------------------*/
Route::get('/heavymetal', [App\Http\Controllers\HeavymetalController::class, 'index'])->name('heavymetal');
Route::post('/heavymetal', [App\Http\Controllers\HeavymetalController::class, 'store'])->name('heavymetal.store');


Route::get('/getconsingee/{id}', [App\Http\Controllers\HeavymetalController::class, 'getconsingee'])->name('getconsingee');

Route::get('/viewheavymetal', [App\Http\Controllers\HeavymetalController::class, 'viewheavymetal'])->name('viewheavymetal');


/*
Route::get('/view-dn', [App\Http\Controllers\DnController::class, 'viewdn'])->name('viewdn');
*/
Route::get('/editheavymetal/{id}', [App\Http\Controllers\HeavymetalController::class, 'editheavymetal'])->name('editheavymetal');

Route::put('heavymetalupdate/{id}', [App\Http\Controllers\HeavymetalController::class, 'heavymetalupdate'])->name('heavymetalupdate');
/*------------------------end heavymetal----------------------------------*/


/*------------------------start contract----------------------------------*/



Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index_contact'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');


/*------------------------end contract----------------------------------*/



/*------------------------start proforma ----------------------------------*/


Route::post('/proforma', [App\Http\Controllers\ProformaController::class, 'index'])->name('proforma');

Route::post('/proforma', [App\Http\Controllers\ProformaController::class, 'store'])->name('proforma.store');

Route::get('/view-proforma', [App\Http\Controllers\ProformaController::class, 'viewproforma'])->name('viewproforma');
Route::get('/editproforma/{id}', [App\Http\Controllers\ProformaController::class, 'editproforma'])->name('editproforma');
Route::put('proformaupdate/{id}', [App\Http\Controllers\ProformaController::class, 'proformaupdate'])->name('proformaupdate');

/*------------------------end proforma----------------------------------*/


