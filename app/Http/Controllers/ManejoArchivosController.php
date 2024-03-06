<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\UsuarioFianza;
use App\Fianza;
use DB;
use Response;

class ManejoArchivosController extends Controller
{
    
    public function store(Request $request){
            //dd($request->file('avatar')); debe ser una isntacia de la clase upladed file
        
        // Es la carpeta public del storage no del proyecto
        // ojo: si cambiamos el nombre y la carpeta no existe la crea
        //dd($request->file('avatar')->store('public'));
       // return $request;
        
        //dd($request);
        $lugar = 'public/acatlan';
        dd($request->file('file')->store($lugar));
        // luego de guradar el archivo nos muestra la ubicacion del archivos
        
        if($request->hasFile('file')){
           return "Si lee el input";
        return  $request->file('file');
        }
    }
    
    
    public function cambiar_foto1_carta(Request $request){
        if($request->hasFile('cambiar_carta1')){
            $user = Auth::user();
            //Eliminar foto anterior
            Storage::delete(Auth::user()->ruta_foto_carta_1);
            // Guardar Nuevo Archivo
            $municipio = preg_replace("/[^a-zA-Z]+/", "", $user->name);
            $lugar = 'public';
            $lugar = $lugar.'/'.$municipio;
            $ruta_carta = $lugar.'/carta';
            $user->ruta_foto_carta_1 = $request->file('cambiar_carta1')->store($ruta_carta);
            $user->save();
        }
        return redirect()->route('home');
    }
    
    public function cambiar_foto2_carta(Request $request){
        if($request->hasFile('cambiar_carta2')){
            $user = Auth::user();
            //Eliminar foto anterior
            Storage::delete(Auth::user()->ruta_foto_carta_2);
            // Guardar Nuevo Archivo
            $municipio = preg_replace("/[^a-zA-Z]+/", "", $user->name);
            $lugar = 'public';
            $lugar = $lugar.'/'.$municipio;
            $ruta_carta = $lugar.'/carta';
            $user->ruta_foto_carta_2 = $request->file('cambiar_carta2')->store($ruta_carta);
            $user->save();
        }
        return redirect()->route('home');
    }
    
    
    public function cambiar_foto_agente(Request $request){
        if($request->hasFile('editar_agente')){
            $user = Auth::user();
            //Eliminar foto anterior
            Storage::delete(Auth::user()->ruta_foto_cambio);
            // Guardar Nuevo Archivo
            $municipio = preg_replace("/[^a-zA-Z]+/", "", $user->name);
            $lugar = 'public';
            $lugar = $lugar.'/'.$municipio;
            $ruta_carta = $lugar.'/agente';
            $user->ruta_foto_cambio = $request->file('editar_agente')->store($ruta_carta);
            $user->save();
        }
        return redirect()->route('home');
    }
    
    public function cambiar_foto_ine(Request $request){
        if($request->hasFile('editar_ine')){
            $user = Auth::user();
            
            $fianza = DB::table('usuario_fianzas')
                    ->select('usuario_fianzas.*')
                    ->where('usuario_fianzas.fianza_fk','=',$request->fianza_id)
                    ->where('usuario_fianzas.usuario_fk','=',Auth::user()->id)
                    ->first();

            $no_fianza =  DB::table('fianzas')
                        ->select('fianzas.*')
                        ->where('fianzas.id','=',$fianza->fianza_fk)
                        ->first();
            
            // Traer el objeto usuarioFianza
            $usuario_fianza = UsuarioFianza::find($fianza->id);
            //Eliminar foto anterior
            Storage::delete($usuario_fianza->ruta_ine);
            
            // Guardar Nuevo Archivo
            $municipio = preg_replace("/[^a-zA-Z]+/", "", $user->name);
            $lugar = 'public';
            $lugar = $lugar.'/'.$municipio.'/'.$no_fianza->no_fianza;

            $usuario_fianza->ruta_ine = $request->file('editar_ine')->store($lugar);
            
            $usuario_fianza->save();
            $ruta_redireccion = '/fianzas/'. $request->fianza_id;
            return redirect($ruta_redireccion);  
        }
        return redirect()->route('home');
    }
    
    public function cambiar_foto1_solicitud(Request $request){
        if($request->hasFile('editar_solicitud_1')){
            $user = Auth::user();
            
            $fianza = DB::table('usuario_fianzas')
                    ->select('usuario_fianzas.*')
                    ->where('usuario_fianzas.fianza_fk','=',$request->fianza_id)
                    ->where('usuario_fianzas.usuario_fk','=',Auth::user()->id)
                    ->first();

            $no_fianza =  DB::table('fianzas')
                        ->select('fianzas.*')
                        ->where('fianzas.id','=',$fianza->fianza_fk)
                        ->first();
            
            // Traer el objeto usuarioFianza
            $usuario_fianza = UsuarioFianza::find($fianza->id);
            //Eliminar foto anterior
            Storage::delete($usuario_fianza->ruta_foto_solicitud_1);
            
            // Guardar Nuevo Archivo
            $municipio = preg_replace("/[^a-zA-Z]+/", "", $user->name);
            $lugar = 'public';
            $lugar = $lugar.'/'.$municipio.'/'.$no_fianza->no_fianza;
            $usuario_fianza->ruta_foto_solicitud_1 = $request->file('editar_solicitud_1')->store($lugar);
            
            $usuario_fianza->save();
            $ruta_redireccion = '/fianzas/'. $request->fianza_id;
            return redirect($ruta_redireccion);  
        }
        return redirect()->route('home');
    }
    
    
    public function cambiar_foto2_solicitud(Request $request){
        if($request->hasFile('editar_solicitud_2')){
            $user = Auth::user();
            
            $fianza = DB::table('usuario_fianzas')
                    ->select('usuario_fianzas.*')
                    ->where('usuario_fianzas.fianza_fk','=',$request->fianza_id)
                    ->where('usuario_fianzas.usuario_fk','=',Auth::user()->id)
                    ->first();

            $no_fianza =  DB::table('fianzas')
                        ->select('fianzas.*')
                        ->where('fianzas.id','=',$fianza->fianza_fk)
                        ->first();

            
            // Traer el objeto usuarioFianza
            $usuario_fianza = UsuarioFianza::find($fianza->id);
            //Eliminar foto anterior
            Storage::delete($usuario_fianza->ruta_foto_solicitud_2);
            
            // Guardar Nuevo Archivo
            $municipio = preg_replace("/[^a-zA-Z]+/", "", $user->name);
            $lugar = 'public';
            $lugar = $lugar.'/'.$municipio.'/'.$no_fianza->no_fianza;
            $usuario_fianza->ruta_foto_solicitud_2 = $request->file('editar_solicitud_2')->store($lugar);
            
            $usuario_fianza->save();
            
            $ruta_redireccion = '/fianzas/'. $request->fianza_id;
            return redirect($ruta_redireccion);  
        }
        return redirect()->route('home');
    }
    
    public function cambiar_foto_domicilio(Request $request){
        if($request->hasFile('editar_domicilio')){
            $user = Auth::user();
            
            $fianza = DB::table('usuario_fianzas')
                    ->select('usuario_fianzas.*')
                    ->where('usuario_fianzas.fianza_fk','=',$request->fianza_id)
                    ->where('usuario_fianzas.usuario_fk','=',Auth::user()->id)
                    ->first();

            $no_fianza =  DB::table('fianzas')
                        ->select('fianzas.*')
                        ->where('fianzas.id','=',$fianza->fianza_fk)
                        ->first();

            // Traer el objeto usuarioFianza
            $usuario_fianza = UsuarioFianza::find($fianza->id);
            //Eliminar foto anterior
            Storage::delete($usuario_fianza->ruta_domicilio);
            
            // Guardar Nuevo Archivo
            $municipio = preg_replace("/[^a-zA-Z]+/", "", $user->name);
            $lugar = 'public';
            $lugar = $lugar.'/'.$municipio.'/'.$no_fianza->no_fianza;

            $usuario_fianza->ruta_domicilio = $request->file('editar_domicilio')->store($lugar);
            
            $usuario_fianza->save();
            $ruta_redireccion = '/fianzas/'. $request->fianza_id;
            return redirect($ruta_redireccion);  
        }
        return redirect()->route('home');
    }
    
}
