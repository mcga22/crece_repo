<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $fianzas = DB::table('usuario_fianzas')
                    ->join('fianzas','usuario_fianzas.fianza_fk', '=', 'fianzas.id')
                    ->select('fianzas.*')
                    ->where('usuario_fianzas.usuario_fk','=',Auth::id())
                    ->paginate(7);

        //return Auth::user()->ruta_foto_carta_1;
        //return $product;
        return view('home',compact('fianzas'));

    }
}
