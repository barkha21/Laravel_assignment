<?php

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
use App\Http\Controllers\AchievementController;
//Route::get('/', [AchievementController::class,'index']); 
Route::get('/', "AchievementController@index");   
/*Route::get('/', function () {
    return view('home');
});*/
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/test', function () {
    return view('test');
});

Route::get('/{name}', "welcomecontroller@index");

