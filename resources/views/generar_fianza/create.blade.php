@extends('layouts_admin.app')
@section('content')

@if(isset($_GET['faltan_archivos']))
<div class="ui-pnotify dark ui-pnotify-fade-normal ui-pnotify-in ui-pnotify-fade-in ui-pnotify-move" 
     aria-live="assertive" aria-role="alertdialog" 
     style="display: none; width: 300px; right: 36px; top: 36px; cursor: auto;">
    <div class="alert ui-pnotify-container alert-info ui-pnotify-shadow" role="alert" style="min-height: 16px;">
        <div class="ui-pnotify-closer" aria-role="button" tabindex="0" title="Close" style="cursor: pointer; visibility: hidden; display: none;">
                <span class="glyphicon glyphicon-remove"></span>
        </div>
        <div class="ui-pnotify-sticker" aria-role="button" aria-pressed="true" tabindex="0" title="Unstick" style="cursor: pointer; visibility: hidden; display: none;">
            <span class="glyphicon glyphicon-play" aria-pressed="true"></span>
        </div>
        <div class="ui-pnotify-icon">
            <span class="glyphicon glyphicon-info-sign">
            </span>
        </div>
        <h4 class="ui-pnotify-title">Atención</h4>
        <div class="ui-pnotify-text" aria-role="alert">
            Faltaron por subir 1 o mas archivos. Por favor intente de nuevo subir todos los archivos.
        </div>       
    </div>    
</div>
@endif

<div class="page-title">
    <div class="title_left">
        <h3>Generar mi Fianza: Paso 2 (Subir fotos)</h3>
    </div>  
</div>
<div class="clearfix"></div>


<div class="row">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Descarga de Archivos y subir Fotos</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                
                <div class="row">
                <!-- Formatos de Arvhivos Requeridos -->    
                    <div class="col-md-6">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Formatos de Archivos</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <div class="row">

                                    <div class="x_content">

                                        <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Instrucciones</a>
                                            </li>

                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                Adjunto encontrarás los 3 archivos necesarios para tramitar tu fianza, son editables. Descárgalos, edítalos o llénalos a mano y tómales una imagen que sea legible con tu teléfono. Después sube cada documento en el panel siguiente. Te comento que la carta cambio conducto y la carta articulo 492 (lavado de dinero) es una sola ocasión por municipio.
                                                Podrás solicitar las fianzas que requiere tu municipio con la solicitud, es decir cada solicitud es personal.

                                            </div>
                                        </div>
                                    </div>    



                                </div>
                                <br>
                                <br>

                                <div class="row">
                                    @if(isset(Auth::user()->ruta_foto_cambio) && isset(Auth::user()->ruta_foto_carta_1) && isset(Auth::user()->ruta_foto_carta_2))
                                    <div class="col-md-55">
                                        <div class="thumbnail">
                                            <div class="image view view-first">
                                                <img style="width: 100%; display: block;" src="{{ asset('images/pdf2.png') }}" alt="image" />
                                                <div class="mask">
                                                    <p>descargar</p>
                                                    <div class="tools tools-bottom">
                                                        <a href="{{ url('/archivo/solicitud-fianza') }}"><i class="fa fa-download"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <p>Solicitud para fianza de fidelidad</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-55">
                                        <a href="{{ url('/archivo/solicitud-fianza') }}" class="btn btn-round btn-success">
                                            <span class="glyphicon glyphicon-download"></span> Descargar solicitud</a>
                                    </div>
                                    @else    
                                    <div class="col-md-55">
                                        <div class="thumbnail">
                                            <div class="image view view-first">
                                                <img style="width: 100%; display: block;" src="{{ asset('images/pdf2.png') }}" alt="image" />
                                                <div class="mask">
                                                    <p>descargar</p>
                                                    <div class="tools tools-bottom">
                                                        <a href="{{ url('/archivo/modelo-carta') }}"><i class="fa fa-download"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <p>Modelo de carta art492</p>
                                            </div>

                                        </div>

                                    </div>
                                    {{--
                                    <div class="col-md-55">
                                        <a href="{{ url('/archivo/modelo-carta') }}" class="btn btn-round btn-success">
                                            <span class="glyphicon glyphicon-download"></span> Descargar carta</a>

                                    </div>
                                    --}}
                                    <div class="col-md-55">
                                        <div class="thumbnail">
                                            <div class="image view view-first">
                                                <img style="width: 100%; display: block;" src="{{ asset('images/pdf2.png') }}" alt="image" />
                                                <div class="mask">
                                                    <p>descargar</p>
                                                    <div class="tools tools-bottom">
                                                        <a href="{{ url('/archivo/solicitud-fianza') }}"><i class="fa fa-download"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <p>Solicitud para fianza de fidelidad</p>
                                            </div>
                                        </div>
                                    </div>

                                    {{--
                                    <div class="col-md-55">
                                        <a href="{{ url('/archivo/solicitud-fianza') }}" class="btn btn-round btn-success">
                                            <span class="glyphicon glyphicon-download"></span> Descargar solicitud</a>
                                    </div>
                                    --}}
                                    
                                    <div class="col-md-55">
                                        <div class="thumbnail">
                                            <div class="image view view-first">
                                                <img style="width: 100%; display: block;" src="{{ asset('images/worddownload.jpg') }}" alt="image" />
                                                <div class="mask">
                                                    <p>descargar</p>
                                                    <div class="tools tools-bottom">
                                                        <a href="{{ url('/archivo/cambio-conducto') }}"><i class="fa fa-download"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <p>Carta Cambio de Conducto</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                <!-- Fin de Archivos Requeridos -->
                
                <!-- Subir Carta -->
                    <div class="col-md-6 col-sm-6  ">
                        <div class="x_panel">
                            @if( isset(Auth::user()->ruta_foto_carta_1) && isset(Auth::user()->ruta_foto_carta_2)  && isset(Auth::user()->ruta_foto_cambio) )
                            <form action="/fianza/partial-save" method="post" enctype="multipart/form-data">
                                @method('POST')
                                @csrf
                            <div class="x_title">
                                <h2>Subir aquí foto de <b>Cartas</b></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <p><b>* Ya están subidas las fotos de la carta Art. 492 y Cambio de Conducto </b></p>
                                
                            </div>
             
                            <div class="x_title">
                                <h2>Subir aquí foto de <b>Solicitud para Fianza de Fidelidad </b></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                {{-- <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p> --}}
                                <label for="fullname"><b>* (Página 1) Solicitud para Fianza:</b> 
                                        <input type="file" name="solicitud_1">
                                    </label>
                                    
                                    <label for="fullname"><b>* (Página 2) Solicitud para Fianza:</b>
                                        <input type="file" name="solicitud_2">
                                    </label>
                            </div>
                            <div class="x_title">
                                <h2>Subir aquí <b>INE</b> por ambos lados y <b>Comprobante de Domicilio</b>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                               {{--  <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p> --}}
                                <label for="fullname"><b><b>* INE por ambos lados:    </b>
                                    <input type="file" name="foto_ine">
                                </label>
                            </div>
                            <div class="x_content">
                               {{--  <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p> --}}
                                <label for="fullname"><b>* Comprobante de Domicilio:    </b>
                                    <input type="file" name="foto_domicilio">
                                </label>
                                <button type="submit" class="btn btn-round btn-success" style="float: right;">Guardar Fotos y Generar Fianza </button>
                                
                            </div>
                            </form>
                            @else
                            <form action="save" method="post" enctype="multipart/form-data">
                                @method('POST')
                                @csrf
                            <div class="x_title">
                                <h2>Subir aquí foto de <b>Carta Cambio Conducto</b></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                {{-- <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p> --}}
 
                                    <label for="fullname"><b>* Carta Cambio de Conducto : </b>
                                        <input type="file" name="carta_agente">
                                    </label>                                  
                            </div>

                            <div class="x_title">
                                <h2>Subir aquí foto de <b>Carta Art. 492</b></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                {{-- <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p> --}}
                            
 
                                    <label for="fullname"><b>* (Página 1) Carta Art. 492 : </b>
                                        <input type="file" name="carta_1">
                                    </label>
                                    
                                    <label for="fullname"><b>* (Página 2) Carta Art. 492 : </b>
                                        <input type="file" name="carta_2">
                                    </label>
                            </div>
             
                            <div class="x_title">
                                <h2>Subir aquí foto de <b>Solicitud para Fianza de Fidelidad </b></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                {{-- <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p> --}}
                                <label for="fullname"><b>* (Página 1) Solicitud para Fianza:</b> 
                                        <input type="file" name="solicitud_1">
                                    </label>
                                    
                                    <label for="fullname"><b>* (Página 2) Solicitud para Fianza:</b>
                                        <input type="file" name="solicitud_2">
                                    </label>
                            </div>
                            <div class="x_title">
                                <h2>Subir aquí <b>INE</b> por ambos lados y <b>Comprobante de Domicilio</b></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                               {{--  <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p> --}}
                                <label for="fullname"><b>* INE por ambos lados: </b>
                                    <input type="file" name="foto_ine">
                                </label>
                                
                            </div>
                            <div class="x_content">
                               {{--  <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p> --}}
                                <label for="fullname"><b>* Comprobante de Domicilio:    </b>
                                    <input type="file" name="foto_domicilio">
                                </label>
                                <button type="submit" class="btn btn-round btn-success" style="float: right;">Guardar Fotos y Generar Fianza </button>
                                
                            </div>
                            </form>
                            @endif
                        </div>

                    </div>
                
                <!-- Fin de Subir Carta -->
                </div>

            </div>
        </div>
    </div>
</div>

<!--
<div class="row">

    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Subir fotos de Solicitud para Fianza de Fidelidad e INE</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">

                    <div class="col-md-4 col-sm-4  ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Subir aquí foto de Solicitud para Fianza de Fidelidad (Pág. 1)</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p>
                                <form action="form_upload.html" class="dropzone dz-clickable">
                                    <div class="dz-default dz-message">
                                        <span>(Página 1) Solicitud para Fianza</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-4  ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Subir aquí foto de Solicitud para Fianza de Fidelidad (Pág. 2)</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p>
                                <form action="form_upload.html" class="dropzone dz-clickable">
                                    <div class="dz-default dz-message">
                                        <input type="file" name="file" />
                                        <span>(Página 2) Solicitud para Fianza</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-4  ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Subir aquí foto INE</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p>
                                <form action="form_upload.html" class="dropzone dz-clickable">
                                    <div class="dz-default dz-message">
                                        <span>INE</span>
                                    </div><button type="submit" class="btn btn-round btn-success" style="float: right;">Guardar Fotos</button>
                                </form>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button type="submit" class="btn btn-round btn-success" style="float: right;">Guardar Fotos y Generar Fianza </button>
        </div>

    </div>
-->


@endsection