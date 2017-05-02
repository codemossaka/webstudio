<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($n){
        return view('pages.test')->with('number', $n);
    }
}
