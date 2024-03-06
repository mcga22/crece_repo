<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::middleware(['auth'])->group(function () {
	
        Route::get('/prueba-bloqueo', 'DatosMunicipio\DatosMunicipioController@prueba');
        
        // Datos Municipio
        Route::get('/datos-municipio', 'DatosMunicipio\DatosMunicipioController@index');
        Route::put('/datos-municipio/edit', 'Catalogs\Products\ProductController@edit');
        
        // Documentos Requeridos
        Route::get('/documentos-requeridos', 'DocumentosRequeridosController@index');
        
        // Descargar Archivos
        Route::get('archivo/modelo-carta','DescargarArchivosController@modelo_carta');
        Route::get('archivo/solicitud-fianza','DescargarArchivosController@solicitud_fianza');
        Route::get('archivo/cuenta-sofimex','DescargarArchivosController@cuenta_sofimex');
        Route::get('archivo/cambio-conducto','DescargarArchivosController@cambio_conducto');

        
    //************** Generar Fianza *********************
        // Seleccionar Opcion
        Route::get('/fianza-seleccionar', function () {
            return view('generar_fianza.seleccionar');
        })->name('fianza.seleccionar');
        // 
        Route::get('fianza/create','FianzaController@create')->name('fianza.create');
        // Ver fianza
        Route::get('fianzas/{fianza}','FianzaController@show')->name('fianzas.show');
        Route::post('fianza/save','FianzaController@save');
        Route::post('fianza/partial-save','FianzaController@partial_save');
        
        // Manejo de Archivos
        //Cambiar fotos de carta:
        Route::post('cambiar/foto-carta1','ManejoArchivosController@cambiar_foto1_carta')->name('cambiar.fotocarta1');
        Route::post('cambiar/foto-carta2','ManejoArchivosController@cambiar_foto2_carta')->name('cambiar.fotocarta2');
        Route::post('cambiar/agente','ManejoArchivosController@cambiar_foto_agente')->name('cambiar.agente');
        Route::post('cambiar/ine','ManejoArchivosController@cambiar_foto_ine')->name('cambiar.ine');
        Route::post('cambiar/domicilio','ManejoArchivosController@cambiar_foto_domicilio')->name('cambiar.domicilio');
        Route::post('cambiar/foto-solicitud1','ManejoArchivosController@cambiar_foto1_solicitud')->name('cambiar.solicitud1');
        Route::post('cambiar/foto-solicitud2','ManejoArchivosController@cambiar_foto2_solicitud')->name('cambiar.solicitud2');

                
        Route::get('descargar/foto-carta1','DescargarArchivosController@descargar_carta_1')->name('foto-carta.primera');
        Route::get('descargar/foto-carta2','DescargarArchivosController@descargar_carta_2')->name('foto-carta.2');
        Route::get('descargar/foto-cambio','DescargarArchivosController@descargar_cambio_agente')->name('descargar.foto-cambio');
        Route::get('descargar/poliza/{fianza}','DescargarArchivosController@descargar_poliza')->name('descargar.poliza');
        Route::get('descargar/xml/{fianza}','DescargarArchivosController@descargar_xml')->name('descargar.xml');
        Route::get('descargar/cfdi/{fianza}','DescargarArchivosController@descargar_cfdi')->name('descargar.cfdi');
        Route::get('descargar/oficio/{fianza}','DescargarArchivosController@descargar_oficio')->name('descargar.oficio');


        Route::get('descargar/solicitud1/{fianza}','DescargarArchivosController@descargar_solicitud1')->name('descargar.solicitud1');
        Route::get('descargar/solicitud2/{fianza}','DescargarArchivosController@descargar_solicitud2')->name('descargar.solicitud2');
        Route::get('descargar/ine/{fianza}','DescargarArchivosController@descargar_ine')->name('descargar.ine');
        Route::get('descargar/domicilio/{fianza}','DescargarArchivosController@descargar_domicilio')->name('descargar.domicilio');
        
        // Mi municipio
        Route::put('mi-municipio/{municipio}', 'DatosMunicipio\DatosMunicipioController@update')->name('municipio.update');

        
        //Informacion
        Route::get('/info', function () {
            return view('extras.info');         
        });
        
        Route::get('/ayuda', function () {
            return view('extras.ayuda');         
        });
        
        //******* Administrador **********

        Route::get('/admin-index','AdminController@index');
        Route::get('/admin/ver/{municipio}','AdminController@ver_municipio')->name('ver.municipio');
        Route::get('/admin/carta1/{municipio}','AdminController@descargar_carta1')->name('admin.carta1');
        Route::get('/admin/carta2/{municipio}','AdminController@descargar_carta2')->name('admin.carta2');
        Route::get('/admin/cambio/{municipio}','AdminController@descargar_cambio')->name('admin.cambio');
        
        Route::get('admin/{fianza}','AdminController@ver_fianza')->name('admin.show');
        
        // Subir Documentos de Fianza
        Route::post('admin/subir/cfdi','AdminController@subir_cfdi')->name('subir.cfdi');
        Route::post('admin/subir/xml','AdminController@subir_xml')->name('subir.xml');
        Route::post('admin/subir/poliza','AdminController@subir_poliza')->name('subir.poliza');
        Route::post('admin/subir/oficio','AdminController@subir_oficio')->name('subir.oficio');
        //Descargar Archivos de Municipio
        
        // Cambiar el estado de la fianza 
        Route::post('admin/cambiar-estado','AdminController@cambiar_estado_fianza');
        
});


Route::get('/pruebalogin', function () {
    return view('login');
});

Route::get('/prueba', function () {
        return view('layouts_admin.app');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
