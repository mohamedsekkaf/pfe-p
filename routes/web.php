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
Auth::routes(['register'=>false]);


Route::get('/', function () {
    return view('welcome');
});
Route::post('/add','Controller@add');
Route::get('/succes','Controller@succes');
Route::get('/suivez','Controller@suivez');
Route::get('/notfound','Controller@notfound');
Route::post('/check','Controller@check');
Route::get('/result','Controller@result');
Route::group(['middleware' => ['auth']], function(){
// Route::get('/home','Controller@home');
// Route::get('logout', 'Controller@logout');
// Route::get('/details/{departement}','Controller@show');
});
