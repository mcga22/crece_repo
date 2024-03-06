<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UsuarioFianza;
use App\Fianza;
use Illuminate\Support\Facades\Auth;
use DB;
use Response;

class FianzaController extends Controller
{
    
    public function create(){
        
        return view('generar_fianza.create');
    }
    
    public function show($id){
        
        $consulta_fianza = DB::table('usuario_fianzas')
                    ->join('fianzas','usuario_fianzas.fianza_fk', '=', 'fianzas.id')
                    ->select('fianzas.*','usuario_fianzas.*')
                    ->where('fianzas.id','=',$id)
                    ->where('usuario_fianzas.usuario_fk','=',Auth::user()->id)
                    ->first();
        
        //$fianza = Response::json($consulta_fianza);
        
        $fianza = $consulta_fianza;
        //return $fianza;
       // return $regres;
        
       // return $fianza;
        return view('fianza.show',compact('fianza'));
    }
    
    public function save(Request $request){
        
        if($request->hasFile('carta_agente') && $request->hasFile('carta_1') && $request->hasFile('carta_2') &&
           $request->hasFile('solicitud_1') && $request->hasFile('solicitud_2') &&
           $request->hasFile('foto_ine') && $request->hasFile('foto_domicilio')){
                  
            // Get the currently authenticated user...
            $user = Auth::user();
            //Obtner el nombre del municipio y eleminar los caracteres especiales
            $municipio = preg_replace("/[^a-zA-Z]+/", "", $user->name);
            //Guardar el nombre sin caracteres en la BD
            $user->nombre_sin_caracteres = $municipio;
            
            // Establecer el nombre de la carpeta en storage
            $lugar = 'public';
            $lugar = $lugar.'/'.$municipio;
            
            // Guardar las fotos de la carta
            // Crear ruta carta
            $ruta_carta = $lugar.'/carta';
            $user->ruta_foto_carta_1 = $request->file('carta_1')->store($ruta_carta);
            $user->ruta_foto_carta_2 = $request->file('carta_2')->store($ruta_carta);
          
            $user->save();
            
            // Crear nueva fianza
            $fianza = new Fianza;
            $fianza->no_fianza = mt_rand(100000, 999999).$user->nombre_sin_caracteres;
            $fianza->estado_fianza = 0;
            $fianza->tipo_fianza = "Llenada a mano";
            $fianza->save();
            
            
            $usuario_fianza = new UsuarioFianza;
            $usuario_fianza->usuario_fk =  Auth::id();
            $usuario_fianza->fianza_fk = $fianza->id;
                    
            $ruta_solicitud = $lugar.'/'.$fianza->no_fianza;
            $usuario_fianza->ruta_foto_solicitud_1 = $request->file('solicitud_1')->store($ruta_solicitud);
            $usuario_fianza->ruta_foto_solicitud_2 = $request->file('solicitud_2')->store($ruta_solicitud);
            
            $ruta_ine = $lugar.'/'.$fianza->no_fianza;
            $usuario_fianza->ruta_ine = $request->file('foto_ine')->store($ruta_ine);

            $ruta_domicilio = $lugar.'/'.$fianza->no_fianza;
            $usuario_fianza->ruta_domicilio = $request->file('foto_domicilio')->store($ruta_domicilio);
            
            $ruta_carta_cambio = $lugar;
            $user->ruta_foto_cambio = $request->file('carta_agente')->store($ruta_carta_cambio);
                    
            $usuario_fianza->save();

            $user->save();
            
           return redirect()->route('home'); 
            
            
        }else{
            $faltan_archivos = 1;
            return redirect()->route('fianza.create',compact('faltan_archivos'));
          
        }
        
    }
    
    public function partial_save(Request $request){
        if($request->hasFile('solicitud_1') && $request->hasFile('solicitud_2')&&
           $request->hasFile('foto_ine') && $request->hasFile('foto_domicilio')){
            
            // Get the currently authenticated user...
            $user = Auth::user();
            //Guardar el nombre sin caracteres en la BD
            $municipio = $user->nombre_sin_caracteres;
            
            // Establecer el nombre de la carpeta en storage
            $lugar = 'public';
            $lugar = $lugar.'/'.$municipio;
            
            // Crear nueva fianza
            $fianza = new Fianza;
            $fianza->no_fianza = mt_rand(1, 999999).$user->nombre_sin_caracteres;
            $fianza->estado_fianza = 0;
            $fianza->tipo_fianza = "Llenada a mano";
            $fianza->save();
            
            $usuario_fianza = new UsuarioFianza;
            $usuario_fianza->usuario_fk =  Auth::id();
            $usuario_fianza->fianza_fk = $fianza->id;
                    
            $ruta_solicitud = $lugar.'/'.$fianza->no_fianza;
            $usuario_fianza->ruta_foto_solicitud_1 = $request->file('solicitud_1')->store($ruta_solicitud);
            $usuario_fianza->ruta_foto_solicitud_2 = $request->file('solicitud_2')->store($ruta_solicitud);
            
            $ruta_ine = $lugar.'/'.$fianza->no_fianza;
            $usuario_fianza->ruta_ine = $request->file('foto_ine')->store($ruta_ine);

            $ruta_domicilio = $lugar.'/'.$fianza->no_fianza;
            $usuario_fianza->ruta_domicilio = $request->file('foto_domicilio')->store($ruta_domicilio);
                    
            $usuario_fianza->save();
            
           return redirect()->route('home'); 
            
        }else{
            $faltan_archivos = 1;
            return redirect()->route('fianza.create',compact('faltan_archivos'));
          
        }
    }
    
    
}
