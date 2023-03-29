<?php

// controllers
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LifeController;
use App\Http\Controllers\PartnershipController;
use App\Http\Controllers\VisitController;
// fasades
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
        Route::get('/','index')->name('index');
        Route::get('/kids','kids')->name('kids');
        Route::get('/parent','parent')->name('parent');
        Route::get('/team','team')->name('team');
    };
    // end about

    // Types visit group
    $visitRoutes = function(){
        Route::get('/','index')->name('index');
        Route::get('/individual','individual')->name('individual');
        Route::get('/group','group')->name('group');
        Route::get('/happybirthday','happybirthday')->name('happybirthday');
        Route::get('/holidays','holidays')->name('holidays');
        Route::get('/graduation','graduation')->name('graduation');
        Route::get('/newyear','newyear')->name('newyear');
    };
    // end Types visit group

    // gryadkacity life group
    $lifeRoutes = function(){
        Route::get('/','index')->name('index');
        Route::get('/professions','professions')->name('professions');
        Route::get('/career','career')->name('career');
        Route::get('/events','events')->name('events');
    };
    // end gryadkacity life group

    // partnership group
    $partnerRoutes = function(){
        Route::get('/','index')->name('index');
        Route::get('/partnership','partnership')->name('partnership');
        Route::get('/franchise','franchise')->name('franchise');
        Route::get('/corporate-clients','corporate')->name('corporate-clients');
    };
    // end partnership group

    // AboutController routes group
    Route::controller(AboutController::class)
        ->prefix('about')
        ->name('about.')
        ->group($aboutRoutes);
    // VisitController routes group
    Route::controller(VisitController::class)
        ->prefix('visit')
        ->name('visit.')
        ->group($visitRoutes);
    // LifeController routes group
    Route::controller(LifeController::class)
        ->prefix('life')
        ->name('life.')
        ->group($lifeRoutes);
    // PartnershipController routes group
    Route::controller(PartnershipController::class)
        ->prefix('cooperation')
        ->name('cooperation.')
        ->group($partnerRoutes);
    // MainController routes group
    Route::controller(MainController::class)
        ->group(function(){
            Route::get('/','index')->name('index');
            Route::get('/contact','contact')->name('contact');
        });
});



