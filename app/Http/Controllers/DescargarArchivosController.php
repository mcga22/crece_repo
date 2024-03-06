<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\User;
use App\UsuarioFianza;
use App\Fianza;
use DB;
use Response;

class DescargarArchivosController extends Controller
{
    public function modelo_carta(){
        return response()->download(public_path('archivos/modelo_carta_art492.pdf'));
    } 
    
    public function cambio_conducto(){
        return response()->download(public_path('archivos/carta_cambio_de _conducto.docx'));
    }
    
    public function solicitud_fianza(){
        return response()->download(public_path('archivos/solicitud_para_fianza_de_fidelidad.pdf'));
    }
    
    public function descargar_carta_1(){     
        //return Storage::download('file.jpg', $name, $headers);
        return Storage::download(Auth::user()->ruta_foto_carta_1);
    }
    
    public function descargar_carta_2(){     
        //return Storage::download('file.jpg', $name, $headers);
        return Storage::download(Auth::user()->ruta_foto_carta_2);
    }
    public function descargar_cambio_agente(){     
        //return Storage::download('file.jpg', $name, $headers);
        return Storage::download(Auth::user()->ruta_foto_cambio);
    }
    
    public function cuenta_sofimex(){
        return response()->download(public_path('archivos/cuenta_sofimex_hsbc.pdf'));
    }
    
    
    public function descargar_poliza($id){   
        $fianza = DB::table('usuario_fianzas')
                    ->select('usuario_fianzas.*')
                    ->where('usuario_fianzas.fianza_fk','=',$id)
                    ->where('usuario_fianzas.usuario_fk','=',Auth::user()->id)
                    ->first();
        if(isset($fianza->ruta_poliza)){
             return Storage::download($fianza->ruta_poliza);
            //return response()->download($fianza->ruta_poliza);
        }else{
            return redirect()->route('home');
        }
        
    }
    
    public function descargar_cfdi($id){
       $fianza = DB::table('usuario_fianzas')
                    ->select('usuario_fianzas.*')
                    ->where('usuario_fianzas.fianza_fk','=',$id)
                    ->where('usuario_fianzas.usuario_fk','=',Auth::user()->id)
                    ->first();
       if(isset($fianza->ruta_cfdi)){
            return Storage::download($fianza->ruta_cfdi);
            //return response()->download($fianza->ruta_cfdi);
        }else{
            return redirect()->route('home');
        }
        
    }
    public function descargar_xml($id){
       $fianza = DB::table('usuario_fianzas')
                    ->select('usuario_fianzas.*')
                    ->where('usuario_fianzas.fianza_fk','=',$id)
                    ->where('usuario_fianzas.usuario_fk','=',Auth::user()->id)
                    ->first();

        
        if(isset($fianza->ruta_xml)){
           // return response()->download($fianza->ruta_xml);
            return Storage::download($fianza->ruta_xml);
        }else{
            return redirect()->route('home');
        }
    }
    public function descargar_oficio($id){
       $fianza = DB::table('usuario_fianzas')
                    ->select('usuario_fianzas.*')
                    ->where('usuario_fianzas.fianza_fk','=',$id)
                    ->where('usuario_fianzas.usuario_fk','=',Auth::user()->id)
                    ->first();
        
        if(isset($fianza->ruta_oficio)){
            return Storage::download($fianza->ruta_oficio);
           // return response()->download($fianza->ruta_poliza);
        }else{
            return redirect()->route('home');
        }
    }


    public function descargar_solicitud1($id){
       $fianza = DB::table('usuario_fianzas')
                    ->select('usuario_fianzas.*')
                    ->where('usuario_fianzas.fianza_fk','=',$id)
                    ->where('usuario_fianzas.usuario_fk','=',Auth::user()->id)
                    ->first();
        
        if(isset($fianza->ruta_foto_solicitud_1)){
           // Storage::download($fianza->ruta_foto_solicitud_1)
            return Storage::download($fianza->ruta_foto_solicitud_1);
        }else{
            return redirect()->route('home');
        }
    }

    public function descargar_solicitud2($id){
       $fianza = DB::table('usuario_fianzas')
                    ->select('usuario_fianzas.*')
                    ->where('usuario_fianzas.fianza_fk','=',$id)
                    ->where('usuario_fianzas.usuario_fk','=',Auth::user()->id)
                    ->first();
        
        if(isset($fianza->ruta_foto_solicitud_2)){
            return Storage::download($fianza->ruta_foto_solicitud_2);
        }else{
            return redirect()->route('home');
        }
    }

    public function descargar_ine($id){
       $fianza = DB::table('usuario_fianzas')
                    ->select('usuario_fianzas.*')
                    ->where('usuario_fianzas.fianza_fk','=',$id)
                    ->where('usuario_fianzas.usuario_fk','=',Auth::user()->id)
                    ->first();
        
        if(isset($fianza->ruta_ine)){
            return Storage::download($fianza->ruta_ine);
        }else{
            return redirect()->route('home');
        }
    }

    public function descargar_domicilio($id){
       $fianza = DB::table('usuario_fianzas')
                    ->select('usuario_fianzas.*')
                    ->where('usuario_fianzas.fianza_fk','=',$id)
                    ->where('usuario_fianzas.usuario_fk','=',Auth::user()->id)
                    ->first();
        
        if(isset($fianza->ruta_domicilio)){
            return Storage::download($fianza->ruta_domicilio);
        }else{
            return redirect()->route('home');
        }
    }





    
    
}
