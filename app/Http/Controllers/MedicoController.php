<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicoController extends Controller
{
    // Funciones

    public function index(){

        return view('medicos.index');
    }
}
