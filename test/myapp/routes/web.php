<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/testA', "TestController@goTestA");

//게시판관련 뷰
Route::get('/board',"BoardController@board");
Route::get('/board/create',"BoardController@create");
Route::get('/board/{id}',"BoardController@boardDetail");
Route::post('/board',"BoardController@insert");
Auth::routes();
