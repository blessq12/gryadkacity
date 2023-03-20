<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;

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
//subdomains group
Route::domain('fr.gryadkacity.dd')->group(function(){
    Route::any('/',function(){
        return 'asdasd';
    });
});

Route::get('/',[MainController::class,'index'])->name('index');
Route::get('/about',[MainController::class,'about'])->name('about');

Route::get('/news',[MainController::class,'news'])->name('news');
Route::get('/news/{uri}',[NewsController::class,'single']);

Route::get('/contact',[MainController::class,'contact'])->name('contact');

