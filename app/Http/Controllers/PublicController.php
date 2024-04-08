<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PublicController extends Controller
{
    function pagina1() {
        return view('pagina1');
    }

    function homepage() {
        return view('welcome');
    }
}
