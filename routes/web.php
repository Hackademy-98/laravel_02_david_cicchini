<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ChiSiamoController;
use App\Http\Controllers\ContattoController;
use App\Http\Controllers\ServizioController;
use App\Http\Controllers\DetailController;

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
// route index
Route::get('/', [IndexController::class, 'Index'])->name('index');
// route Servizi
Route::get('/servizi', [ServizioController::class, 'Servizi'])->name('index.servizi');
// route Chi siamo
Route::get('/chisiamo', [ChiSiamoController::class, 'ChiSiamo'])->name('index.chisiamo');
// route Contatti
Route::get('/contatti', [ContattoController::class, 'Contatti'])->name('index.contatti');
// route Details contatti
Route::get('/contatti/details/{name}', [DetailController::class, 'ShowContactDetails'])->name('index.details');
