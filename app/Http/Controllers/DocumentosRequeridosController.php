<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentosRequeridosController extends Controller
{
    public function index(){
        
       return view('documentos_requeridos.index'); 
    }

        
}
