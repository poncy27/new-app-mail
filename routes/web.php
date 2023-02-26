<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;
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

Route::get('/',[PageController::class,'Page'])->name('Page');
Route::get('/chi-siamo',[PageController::class,'chisiamo'])->name('chisiamo');
Route::get('/contattaci',[FormController::class,'form'])->name('form');
Route::post('/contattaci/invia',[FormController::class,'send'])->name('send');

Route::get('/prova',function(){
    return view('prova');
});