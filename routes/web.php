<?php

use App\Http\Controllers\jogoscontroller;
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

Route::prefix('jogos')->group(function(){


    Route::get('/',[jogoscontroller::class,'index'])->name('jogos-index');
    Route::get('/create',[jogoscontroller::class,'create'])->name('jogos-create');
    Route::post('/',[jogoscontroller::class,'store'])->name('jogos-store');
    Route::delete('/{id}',[jogoscontroller::class,'destroy'])->where('id','[0-9]+')->name('jogos-destroy');


});
