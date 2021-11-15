<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showets(){
        return view("ets");
    }

    function php(){
        return view("tugphp");
    }

    function actionPHP(){
        return view("actiontugphp");
    }
}
