<?php

use App\Http\Controllers\VoituresController;
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

Route::get('/', [VoituresController::class,'index'])->name('voitures');
Route::get('/create',[VoituresController::class,'create'])->name('ajoutervoiture');
Route::post('/createvoiture',[VoituresController::class,'store']);
Route::get('/show/{id}',[VoituresController::class,'show']);
Route::get('/edit/{id}',[VoituresController::class,'edit']);
Route::put('/update/{id}',[VoituresController::class,'update']);
Route::delete('/{id}/delete',[VoituresController::class,'destroy']);
