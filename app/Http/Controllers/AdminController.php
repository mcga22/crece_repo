<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Fianza;
use App\UsuarioFianza;
use Illuminate\Support\Facades\Storage;
use DB;

class AdminController extends Controller
{
    public function index(){
        if(Auth::user()->rol_fk == 2){
            
            //Municipios Registrados
            $municipios = User::where('rol_fk', 1)
                    ->get();
            
            // Nuevas Fianzas
       //     $fianzas = Fianza::where('estado_fianza', 0)
      //      ->get();
            
            $fianzas = DB::table('usuario_fianzas')
                ->join('fianzas','usuario_fianzas.fianza_fk', '=', 'fianzas.id')
                ->select('fianzas.*','usuario_fianzas.*')
                ->where('fianzas.estado_fianza','=',0)
                ->get();
            
            
            
           return view('admin.index',compact('municipios','fianzas')); 
           
        }
        else{
            return redirect('home');  
        }
    }
    
    public function ver_municipio($id){
        if(Auth::user()->rol_fk == 2){
            // Obtner municipio
            $municipio = User::where('id', $id)
                    ->first();
                 

            $fianzas = DB::table('usuario_fianzas')
                    ->join('fianzas','usuario_fianzas.fianza_fk', '=', 'fianzas.id')
                    ->select('fianzas.*','usuario_fianzas.*')
                    ->where('usuario_fianzas.usuario_fk','=',$id)
                    ->paginate(15);
            
           return view('admin.municipio',compact('municipio','fianzas')); 
           
        }
        else{
            return redirect('home');  
        }
    }
    
    public function descargar_carta1($id){
        if(Auth::user()->rol_fk == 2){
            // Obtner municipio
            $municipio = User::where('id', $id)
                    ->first();
           return Storage::download($municipio->ruta_foto_carta_1);
  
        }
        else{
            return redirect('home');  
        }
    }
    
    public function descargar_carta2($id){
        if(Auth::user()->rol_fk == 2){
            // Obtner municipio
            $municipio = User::where('id', $id)
                    ->first();
           return Storage::download($municipio->ruta_foto_carta_2);
  
        }
        else{
            return redirect('home');  
        }
    }
    
    public function descargar_cambio($id){
        if(Auth::user()->rol_fk == 2){
            // Obtner municipio
            $municipio = User::where('id', $id)
                    ->first();
           return Storage::download($municipio->ruta_foto_cambio);
  
        }
        else{
            return redirect('home');  
        }
    }
    
    public function ver_fianza($id){
        
        $consulta_fianza = DB::table('usuario_fianzas')
                    ->join('fianzas','usuario_fianzas.fianza_fk', '=', 'fianzas.id')
                    ->select('fianzas.*','usuario_fianzas.*')
                    ->where('fianzas.id','=',$id)
                    ->first();
                    //->get();
        //$fianza = Response::json($consulta_fianza);
        
        $fianza = $consulta_fianza;
        //return $fianza;
       // return $regres;
        
       // return $fianza;
        //return $fianza;
        return view('fianza.show',compact('fianza'));
    }
    
    public function subir_cfdi(Request $request){
        if(Auth::user()->rol_fk == 2){
            $usuario_fianza = UsuarioFianza::where('id', $request->id_fianza)
                    ->first();
            
            $municipio_usuario = User::where('id',$usuario_fianza->usuario_fk)
                        ->first();
            
            $fianza = Fianza::where('id',$usuario_fianza->fianza_fk)
                        ->first();

            $municipio = preg_replace("/[^a-zA-Z]+/", "", $municipio_usuario->name);
            $lugar = 'public';
            $lugar = $lugar.'/'.$municipio.'/'.$fianza->no_fianza;

            $ruta_redireccion = '/admin/'. $usuario_fianza->fianza_fk;


            if(isset( $usuario_fianza->ruta_cfdi )){
                Storage::delete($usuario_fianza->ruta_cfdi);
                $usuario_fianza->ruta_cfdi = $request->file('subir_cfdi')->store($lugar);
                $usuario_fianza->save();
                return redirect($ruta_redireccion);
            }else{   
                $usuario_fianza->ruta_cfdi = $request->file('subir_cfdi')->store($lugar);
                $usuario_fianza->save();
                return redirect($ruta_redireccion);
            }
            
        }
        else{
            return redirect('home');  
        }
    }
    public function subir_xml(Request $request){
        if(Auth::user()->rol_fk == 2){
            $usuario_fianza = UsuarioFianza::where('id', $request->id_fianza)
                    ->first();
            
            $municipio_usuario = User::where('id',$usuario_fianza->usuario_fk)
                        ->first();

            $fianza = Fianza::where('id',$usuario_fianza->fianza_fk)
                        ->first();
            
            $municipio = preg_replace("/[^a-zA-Z]+/", "", $municipio_usuario->name);
            $lugar = 'public';
            $lugar = $lugar.'/'.$municipio.'/'.$fianza->no_fianza;
            $ruta_redireccion = '/admin/'. $usuario_fianza->fianza_fk;

            if(isset( $usuario_fianza->ruta_xml )){
                Storage::delete($usuario_fianza->ruta_xml);
                $usuario_fianza->ruta_xml = $request->file('subir_xml')->store($lugar);        
                $usuario_fianza->save();
                return redirect($ruta_redireccion);
            }else{
               
                $usuario_fianza->ruta_xml = $request->file('subir_xml')->store($lugar);        
                $usuario_fianza->save();
                return redirect($ruta_redireccion);
            }
            
        }
        else{
            return redirect('home');  
        }
    }
    public function subir_poliza(Request $request){
        if(Auth::user()->rol_fk == 2){
            $usuario_fianza = UsuarioFianza::where('id', $request->id_fianza)
                    ->first();
            
            $municipio_usuario = User::where('id',$usuario_fianza->usuario_fk)
                        ->first();

            $fianza = Fianza::where('id',$usuario_fianza->fianza_fk)
                        ->first();
            
            $municipio = preg_replace("/[^a-zA-Z]+/", "", $municipio_usuario->name);
            $lugar = 'public';
            $lugar = $lugar.'/'.$municipio.'/'.$fianza->no_fianza;
            $ruta_redireccion = '/admin/'. $usuario_fianza->fianza_fk;

            if(isset( $usuario_fianza->ruta_poliza )){
                Storage::delete($usuario_fianza->ruta_poliza);
                $usuario_fianza->ruta_poliza = $request->file('subir_poliza')->store($lugar);
                $usuario_fianza->save();
                return redirect($ruta_redireccion);
            }else{
                $usuario_fianza->ruta_poliza = $request->file('subir_poliza')->store($lugar);
                $usuario_fianza->save();
                return redirect($ruta_redireccion);
            }
            
        }
        else{
            return redirect('home');  
        }
    }
    public function subir_oficio(Request $request){
        if(Auth::user()->rol_fk == 2){
            $usuario_fianza = UsuarioFianza::where('id', $request->id_fianza)
                    ->first();
            
            $municipio_usuario = User::where('id',$usuario_fianza->usuario_fk)
                        ->first();
            
             $fianza = Fianza::where('id',$usuario_fianza->fianza_fk)
                        ->first();

            $municipio = preg_replace("/[^a-zA-Z]+/", "", $municipio_usuario->name);
            $lugar = 'public';
            $lugar = $lugar.'/'.$municipio.'/'.$fianza->no_fianza;

            $ruta_redireccion = '/admin/'. $usuario_fianza->fianza_fk;
            
            if(isset( $usuario_fianza->ruta_oficio )){
                Storage::delete($usuario_fianza->ruta_oficio);
                $usuario_fianza->ruta_oficio = $request->file('subir_oficio')->store($lugar);   
                $usuario_fianza->save();
                return redirect($ruta_redireccion);
            }else{
                $usuario_fianza->ruta_oficio = $request->file('subir_oficio')->store($lugar);   
                $usuario_fianza->save();
                return redirect($ruta_redireccion);
            }
            
        }
        else{
            return redirect('home');  
        }
    }
    
    public function cambiar_estado_fianza(Request $request){
        if(Auth::user()->rol_fk == 2){
            $fianza = Fianza::where('id', $request->id_fianza)
                    ->first();
            
            if($fianza->estado_fianza == 1){
                $fianza->estado_fianza = 0;
            }else{
                $fianza->estado_fianza = 1;
            }
            
            $fianza->save();
            
            $ruta_redireccion = '/admin/'. $request->id_fianza;
                return redirect($ruta_redireccion);
                    
        }else{
            return redirect('home');  
        }
        
        
    }
    
    
    
}
