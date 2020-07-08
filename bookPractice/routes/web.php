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

Route::get('/testA',function(){
    return view('testA');
});
// Route::get('auth/login',function(){
//     $cridentials = [
//         'email' => 'JKS.google.com',
//         'password' => 'password',
//     ];

//     if(! auth()->attempt($cridentials)){
//         return "로그인이 부정확하다.";
//     }

//     return redirect('protected');
// });
// Route::get('auth/logout',function(){
//     auth() ->logout();

//     return "또봐요";
// });
// Route::get('protected', function(){
//     dump(session() ->all());
//     if(!auth() ->check()){
//         return "누구세요?";
//     }

//     return '하이'.auth()->user()->name;
// });



Auth::routes();
