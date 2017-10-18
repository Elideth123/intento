<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class sistema extends Controller
{
    public function index(){
        return view('index');
    }

    public function inicio(){
        return view('inicio');
    }

    public function escuela(){
        return view('escuela');
    }

    public function carreras(){
        return view('carreras');
    }
}
