<?php

//package
namespace App\Http\Controllers;

//import Request (Petición)
use Illuminate\Http\Request;

class PrimerasRutasController extends Controller
{

    function index() {
        return view('freelance.base'); //normal
    }

    function primerMensaje() {
        echo '<h1>Yo soy el <a href="/">primer método</a>.</h1>'; //nunca
    }
}