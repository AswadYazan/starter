<?php


use Illuminate\Support\Facades\Route;
#use App\Http\Controllers\UserController;
use App\Http\Controllers\Front\UserController;
use Illuminate\Support\Facades\Auth;
use Monolog\Handler\RotatingFileHandler;
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
Auth::routes(['verify' => true]);
Route::get('/', function () {
    return view('index');
});

Route::get('/yazan', function () {
    return view('test');
}) -> name('Y');

Route::namespace('Front')->group(function(){

    Route::get('users','UserController@showUserName');

});
Route::get('/template', function () {
    return view('index');
}) -> name('Y');



Route::get('/home', 'HomeController@index')->name('home')-> middleware('verified');
Route::get('/dashboard', function() {

    return 'dashboard';
});
