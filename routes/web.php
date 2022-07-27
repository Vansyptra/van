<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\MerekController;

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

// Route::get('/m', function () {
//     return view('page.barang.index');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Merek
Route::get('/merek', [MerekController::class, 'index']);
Route::get('/merek/form', [MerekController::class, 'create']);
Route::post('/merek/store', [MerekController::class, 'store']);
Route::get('/merek/edit/{id}', [MerekController::class, 'edit']);
Route::put('/merek/{id}', [MerekController::class, 'update']);
Route::delete('/merek/{id}', [MerekController::class, 'destroy']);


//Barang
Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang/form', [BarangController::class, 'create']);
Route::post('/barang/store', [BarangController::class, 'store']);
Route::get('/barang/edit/{id}', [BarangController::class, 'edit']);
Route::put('/barang/{id}', [BarangController::class, 'update']);
Route::delete('/Barang/{id}', [BarangController::class, 'destroy']);
