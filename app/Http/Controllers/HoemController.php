<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HoemController extends Controller
{
    function index(){
        return view("index");
    }
    function taxi(){
        return view("texi.taxi");
    }
}
