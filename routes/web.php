<?php

use Illuminate\Support\Facades\Route;
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

    // About group
    $aboutRoutes = function(){
        Route::get('/',function(){ return 'about';})->name('index');
        Route::get('/kids',function(){ return 'about kids';})->name('kids');
        Route::get('/parent',function(){ return 'about parent';})->name('parent');
        Route::get('/team',function(){ return 'about team';})->name('team');
    };
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
    // end Types visit group

    // gryadkacity life group
    $lifeRoutes = function(){
        Route::get('/professions',function(){return 'Описание профессий';})->name('professions');
        Route::get('/career',function(){return 'Описание профессий';})->name('career');
        Route::get('/events',function(){return 'городские мероприятия';})->name('events');
    };
    // end gryadkacity life group

    // partnership group
    $partnerRoutes = function(){
        Route::get('/partnership',function(){return 'Партнерство';})->name('partnership');
        Route::get('/franchise',function(){return 'Франшиза';})->name('franchise');
        Route::get('/corporate-clients',function(){return 'Корпоративные клиенты';})->name('corporate-clients');
    };
    // end partnership group

    Route::get('/',function(){return 'main page';})->name('index');
    Route::group(['prefix'=>'about','as'=>'about.'],$aboutRoutes);
    Route::group(['prefix'=>'visit','as'=>'visit.'],$visitRoutes);
    Route::group(['prefix'=>'life','as'=>'life.'],$lifeRoutes);
    Route::group(['prefix'=>'cooperation','as'=>'cooperation.'],$partnerRoutes);
    Route::get('/contact',function(){return 'contact';})->name('contact');
});



