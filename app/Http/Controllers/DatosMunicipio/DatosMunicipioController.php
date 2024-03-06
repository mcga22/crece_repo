<?php

namespace App\Http\Controllers\DatosMunicipio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DatosMunicipioController extends Controller 
{
    public function index(){
        $user = Auth::user();
        // Get the currently authenticated user's ID...
        $id = Auth::id();
        return view('datos_municipio.index',compact('user'));
    }
    
    public function update(Request $request, $id) {
        $user = Auth::user();
        $user->razon_social = $request->razon_social;
        $user->persona_fisica = $request->persona_fisica;
        $user->rfc = $request->rfc;
        $user->calle = $request->calle; 
        $user->no_ext = $request->no_ext; 
        $user->colonia = $request->colonia; 
        $user->cp = $request->cp; 
        $user->entidad_federativa = $request->entidad_federativa; 
        $user->telefono = $request->telefono; 
        $user->email = $request->email; 
        
        $user->save();
        
        
        return redirect()->route('home');
        
    }
    
    public function edit(){
        
    }
    
    public function prueba(){
        $user = Auth::user();
        if($user->rol_fk == 1){
            return "usuario municipio";
        }else{
            return "usuario admin";
        }
    }
}
