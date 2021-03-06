<?php



Auth::routes();
//
Route::get('/tachistoskop-facial', 'HomeController@index')->name('home');

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/register', function () {
    return view('auth.voyager.register');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/voyager/gravy','ProductTestingController@index');
Route::get('/voyager/info',function (){
    return view('voyager.info');
});

//Route::get('/admin',function (){
//    return view('voyager.info');
//});

