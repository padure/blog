<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function main(){
        return view('main.menu.acasa');
    }
    public function news(){
        return view('main.menu.news');
    }
}
