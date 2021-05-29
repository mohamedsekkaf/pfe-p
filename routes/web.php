<?php
use App\Http\Controllers\Controller;

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
Auth::routes(['register'=>true]);


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
Route::get('/home','Controller@home');
Route::get('logout', 'Controller@logout');
Route::get('/details/{departement}','Controller@show');
Route::get('/showdetails/{id}','Controller@showdetails');
Route::post('/traitementetat','Controller@traitementetat');
Route::post('/traitementreponse','Controller@traitementreponse');
Route::get('/statistique','Controller@statistique');
Route::post('/delete','Controller@delete');
Route::post('/recherche','Controller@recherche');
Route::get('/recherche','Controller@rechercher');
Route::get('/statistique', 'Controller@statistique');
Route::post('/sendmail' , 'Controller@sendmail');

Route::get('sendbasicemail','Controller@basic_email');
});
