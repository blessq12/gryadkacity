<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use Illuminate\Http\Request;

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
Route::group(['domain' => '{sub}.' .env('APP_URL')],function($sub){
    Route::get('/',function($sub){
        return 'subdomain';
    })->name('subroute');
});

//main domain group routes
Route::group(['domain'=> env('APP_URL')],function(){

    Route::get('/',function(){return 'main page';})->name('index');
    // About group
    $aboutRoutes = function(){
        Route::get('/about',function(){ return 'about';})->name('index');
        Route::get('/about/kids',function(){ return 'about kids';})->name('kids');
        Route::get('/about/parent',function(){ return 'about parent';})->name('parent');
        Route::get('/about/team',function(){ return 'about team';})->name('team');
    };
    Route::group(['prefix'=>'about','as'=>'about.'],$aboutRoutes);
    // end about

    // Types visit group
    $visitRoutes = function(){
        Route::get('/',function(){return 'визиты главная';})->name('index');
        Route::get('/individual',function(){ return 'свободное посещения';})->name('individual');
        Route::get('/group',function(){return 'груповое посещения';})->name('group');
        Route::get('/happybirthday',function(){return 'День рождения';})->name('happybirthday');
        Route::get('/holydays',function(){return 'Каникулы';})->name('holydays');
        Route::get('/graduation',function(){return 'Выпускной(дети заканчиваю школу/четверть и тд)';})->name('graduation');
        Route::get('/newyear',function(){return 'Новый год 2024';})->name('newyear');
    };
    Route::group(['prefix'=>'visit','as'=>'visit.'],$visitRoutes);
    // end Types visit group

    // gryadkacity life group
    $lifeRoutes = function(){
        Route::get('/life/professions',function(){return 'Описание профессий';})->name('professions');
        Route::get('/life/career',function(){return 'Описание профессий';})->name('career');
        Route::get('/life/events',function(){return 'городские мероприятия';})->name('events');
    };
    Route::group(['prefix'=>'life','as'=>'life.'],$lifeRoutes);
    // end gryadkacity life group

    // partnership group
    $partnerRoutes = function(){
        Route::get('/cooperation/partnership',function(){return 'Партнерство';})->name('partnership');
        Route::get('/cooperation/franchise',function(){return 'Франшиза';})->name('franchise');
        Route::get('/cooperation/corporate-clients',function(){return 'Корпоративные клиенты';})->name('corporate-clients');
    };
    Route::group(['prefix'=>'cooperation','as'=>'cooperation.'],$partnerRoutes);
    // end partnership group

    Route::get('/contact',[MainController::class,'contact'])->name('contact');
});



