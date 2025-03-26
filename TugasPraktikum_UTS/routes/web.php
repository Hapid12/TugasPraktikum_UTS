<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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



    Route::get('/dataPaket', [MainController::class, 'dataPaket'])->name('dataPaket');

    //dataPaket
    Route::get('/dataPaketProses', [MainController::class, 'dataPaketProses'])->name('dataPaketProses');
    Route::post('/simpanPaket', [MainController::class, 'storePaket'])->name('simpanPaket');
    Route::get('/data_paket/hapusPaket/{id}', [MainController::class, 'destroyPaket'])->name('hapusPaket');
    Route::get('/data_paket/editDataPaket/{id}', [MainController::class, 'editPaket'])->name('editPaket');   
    Route::post('/data_paket/updatePaket/{id}', [MainController::class, 'updatePaket'])->name('updatePaket');
