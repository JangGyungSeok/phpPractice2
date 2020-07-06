<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function goTestA(){

        return view('TestA');
    }
}
