@extends('layouts_admin.app')

@section('content')
<div class="page-title">
    <div class="title_left">
        <h3>Código de Fianza: {{ $fianza->no_fianza }}</h3>
    </div>  
</div>
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-align-left"></i> Estado Actual de la Fianza<small>%</small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                {{-- <p>Bootstrap progress bar with animated loading bar, add right to .progress to align right</p> --}}
                @if($fianza->estado_fianza == 0 )
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                @else
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                @endif



            </div>
        </div>
    </div>

</div>





<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-info"></i> Información de la Fianza</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            {{-- <p class="text-muted font-13 m-b-30">
                                DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                            </p> --}}
                            <div id="datatable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="datatable" class="table table-striped table-bordered dataTable no-footer"
                                               style="width: 100%;" role="grid" aria-describedby="datatable_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" 
                                                        rowspan="1" colspan="1" aria-sort="ascending"        
                                                        style="width: 119px;">
                                                        Código de Fianza
                                                    </th>
                                             <!--       <th class="sorting" tabindex="0" aria-controls="datatable"
                                                        rowspan="1" colspan="1"  
                                                        style="width: 191px;">
                                                        Municipio
                                                    </th> -->
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" 
                                                        style="width: 89px;">
                                                        Fecha de Creación
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" 
                                                        style="width: 39px;">
                                                        Tipo de Fianza
                                                    </th>
                                            <!--        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" 
                                                        style="width: 82px;">
                                                        Start date
                                                    </th> -->
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" 
                                                         style="width: 68px;">
                                                        Municipio
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>   
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{ $fianza->no_fianza }}</td>
                                                    <!-- <td></td> -->
                                                    <td>{{ date_format(date_create($fianza->created_at), 'd/m/y') }}</td>
                                                    <td>{{ $fianza->tipo_fianza }}</td>
                                                    <!-- <td>2008/11/28</td> -->
                                                    <td>{{ Auth::user()->name }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>













<div class="row">
    <div class="col-md-6 col-sm-6  ">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-folder-open"></i> Documentos de la Fianza</h2>
                <div class="clearfix"></div>
            </div>
            
            <div class="x_content">
            @if(isset($fianza->ruta_cfdi) && isset($fianza->ruta_xml) && isset($fianza->ruta_poliza) && isset($fianza->ruta_oficio)) 

                <div class="col-md-6 col-sm-6  profile_details">
                    <div class="well profile_view">
                        <div class="col-sm-12">
                            <div class="left col-sm-7">
                                <h2>Fianza</h2>
                                {{-- <p><strong>About: </strong> Web Designer / UI. </p> --}}
                            </div>
                            <div class="right col-sm-5 text-center">
                                <img src="{{ asset('images/poliza.png') }}" alt="" class="img-circle img-fluid">
                            </div>
                        </div>
                        <div class=" bottom text-center">
                            <div class=" col-sm-6 emphasis">
                                
                            </div>
                            <div class=" col-sm-6 emphasis">
                                <a class="btn btn-primary btn-sm" href="{{ route('descargar.poliza', $fianza->id) }}">
                                    <i class="fa fa-download"></i> Descargar </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6  profile_details">
                    <div class="well profile_view">
                        <div class="col-sm-12">
                            <div class="left col-sm-7">
                                <h2>CFDI</h2>
                                {{-- <p><strong>About: </strong> Web Designer / UI. </p> --}}
                            </div>
                            <div class="right col-sm-5 text-center">
                                <img src="{{ asset('images/cfdi.png') }}" alt="" class="img-circle img-fluid">
                            </div>
                        </div>
                        <div class=" bottom text-center">
                            <div class=" col-sm-6 emphasis">
                                <p class="ratings">
                                </p>
                            </div>
                            <div class=" col-sm-6 emphasis">
                                <a class="btn btn-primary btn-sm" href="{{ route('descargar.cfdi', $fianza->id) }}">
                                    <i class="fa fa-download"></i> Descargar </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6  profile_details">
                    <div class="well profile_view">
                        <div class="col-sm-12">
                            <div class="left col-sm-7">
                                <h2>XML</h2>
                                {{-- <p><strong>About: </strong> Web Designer / UI. </p> --}}
                            </div>
                            <div class="right col-sm-5 text-center">
                                <img src="{{ asset('images/xml.jpg') }}" alt="" class="img-circle img-fluid">
                            </div>
                        </div>
                        <div class=" bottom text-center">
                            <div class=" col-sm-6 emphasis">
                                <p class="ratings">
                                </p>
                            </div>
                            <div class=" col-sm-6 emphasis">
                                <a class="btn btn-primary btn-sm" href="{{ route('descargar.xml', $fianza->id) }}">
                                    <i class="fa fa-download"></i> Descargar </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6  profile_details">
                    <div class="well profile_view">
                        <div class="col-sm-12">
                            <div class="left col-sm-7">
                                <h2>Oficio ASEJ</h2>
                                {{-- <p><strong>About: </strong> Web Designer / UI. </p> --}}
                            </div>
                            <div class="right col-sm-5 text-center">
                                <img src="{{ asset('images/asejcarta.png') }}" alt="" class="img-circle img-fluid">
                            </div>
                        </div>
                        <div class=" bottom text-center">
                            <div class=" col-sm-6 emphasis">
                                <p class="ratings">
                                </p>
                            </div>
                            <div class=" col-sm-6 emphasis">
                                <a class="btn btn-primary btn-sm" href="{{ route('descargar.oficio', $fianza->id) }}">
                                    <i class="fa fa-download"></i> Descargar </a>
                            </div>
                        </div>
                    </div>
                </div>           
            @else   
            <p>Aún no esta lista su fianza.</p>
           @endif

           @if(Auth::user()->rol_fk == 2)
            <div class="col-md-12 col-sm-12  profile_details">
                <form action="subir/cfdi/" method="post" enctype="multipart/form-data">
                          @method('POST')
                          @csrf
                          <label for="subir_cfdi">
                              <input type="file" name="subir_cfdi">
                              <input hidden type="text" name="id_fianza" value="{{ $fianza->id }}">
                          </label>
                        <button type="submit" class="btn btn-info">CFDI Subir o Cambiar</button>
                </form>
                <form action="subir/xml" method="post" enctype="multipart/form-data">
                          @method('POST')
                          @csrf
                          <label for="subir_xml">
                              <input type="file" name="subir_xml">
                              <input hidden type="text" name="id_fianza" value="{{ $fianza->id }}">
                          </label>
                        <button type="submit" class="btn btn-info">XML Subir o Cambiar</button>
                </form>
                <form action="subir/poliza" method="post" enctype="multipart/form-data">
                          @method('POST')
                          @csrf
                          <label for="subir_poliza">
                              <input type="file" name="subir_poliza">
                              <input hidden type="text" name="id_fianza" value="{{ $fianza->id }}">
                          </label>
                        <button type="submit" class="btn btn-info">Poliza Subir o Cambiar</button>
                </form>
                <form action="subir/oficio" method="post" enctype="multipart/form-data">
                          @method('POST')
                          @csrf
                          <label for="subir_oficio">
                              <input type="file" name="subir_oficio">
                              <input hidden type="text" name="id_fianza" value="{{ $fianza->id }}">
                          </label>
                        <button type="submit" class="btn btn-info">Oficio Subir o Cambiar</button>
                </form>
                </div>
                
                <!-- Cambiar estado de fianza -->
                <form action="cambiar-estado" method="post">
                          @method('POST')
                          @csrf
                          <input hidden type="text" name="id_fianza" value="{{ $fianza->fianza_fk }}">
                        <button type="submit" class="btn btn-danger">Cambiar estado de Fianza</button>
                </form>
                  
            @endif  

            </div>
            
        </div>



    </div>



    <div class="col-md-6">
        
        <!-- Fotos Solicitud -->
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-camera"></i> Fotos de INE y Solicitud</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="{{ Storage::url($fianza->ruta_foto_solicitud_1)}}" alt="image">
                                <div class="mask">
                                    <p>Descargar</p>
                                    <div class="tools tools-bottom">
                                        <a href="{{ route('descargar.solicitud1', $fianza->id) }}"><i class="fa fa-download"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <p>(Página 1) Solicitud para Fianza <button onclick="editar_solicitud1()" class="btn btn-success" style="float: right;">Editar</button> </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="{{ Storage::url($fianza->ruta_foto_solicitud_2)}}" alt="image">
                                <div class="mask">
                                    <p>Descargar</p>
                                    <div class="tools tools-bottom">
                                        <a href="{{ route('descargar.solicitud2', $fianza->id) }}"><i class="fa fa-download"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <p>(Página 2) Solicitud para Fianza<button onclick="editar_solicitud2()" class="btn btn-success" style="float: right;">Editar</button></p>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="{{ Storage::url($fianza->ruta_ine)}}" alt="image">
                                <div class="mask">
                                    <p>Descargar</p>
                                    <div class="tools tools-bottom">
                                        <a href="{{ route('descargar.ine', $fianza->id) }}"><i class="fa fa-download"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <p>INE<button onclick="editar_ine()" class="btn btn-success" style="float: right;">Editar</button></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="{{ Storage::url($fianza->ruta_domicilio)}}" alt="image">
                                <div class="mask">
                                    <p>Descargar</p>
                                    <div class="tools tools-bottom">
                                        <a href="{{ route('descargar.domicilio', $fianza->id) }}"><i class="fa fa-download"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <p>Comprobante de Domicilio<button onclick="editar_domicilio()" class="btn btn-success" style="float: right;">Editar</button></p>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div id="editar_ine" style="display:none;">
                      <form action="{{ route('cambiar.ine')}}" method="post" enctype="multipart/form-data">
                          @method('POST')
                          @csrf
                          <label for="editar_ine">
                              <input type="file" name="editar_ine">
                              <input type="text" name="fianza_id" hidden value="{{ $fianza->id }}">
                          </label>
                          <button type="submit" class="btn btn-info">Guardar INE</button>
                      </form>
                  </div>
                   <div id="editar_solicitud_1" style="display:none;">
                      <form action="{{ route('cambiar.solicitud1')}}" method="post" enctype="multipart/form-data">
                          @method('POST')
                          @csrf
                          <label for="editar_solicitud_1">
                              <input type="file" name="editar_solicitud_1">
                              <input type="text" name="fianza_id" hidden value="{{ $fianza->id }}">
                          </label>
                          <button type="submit" class="btn btn-info">Guardar pág. 1</button>
                      </form>
                    </div>
                    <div id="editar_solicitud_2" style="display:none;">
                      <form action="{{ route('cambiar.solicitud2')}}" method="post" enctype="multipart/form-data">
                          @method('POST')
                          @csrf
                          <label for="editar_solicitud_2">
                              <input type="file" name="editar_solicitud_2">
                              <input type="text" name="fianza_id" hidden value="{{ $fianza->id }}">
                          </label>
                          <button type="submit" class="btn btn-info">Guardar pág. 2</button>
                      </form>
                    </div>
                    <div id="editar_domicilio" style="display:none;">
                      <form action="{{ route('cambiar.domicilio')}}" method="post" enctype="multipart/form-data">
                          @method('POST')
                          @csrf
                          <label for="editar_solicitud_2">
                              <input type="file" name="editar_domicilio">
                              <input type="text" name="fianza_id" hidden value="{{ $fianza->id }}">
                          </label>
                          <button type="submit" class="btn btn-info">Guardar Comprobante</button>
                      </form>
                    </div>
                   
                </div>
            </div>
        </div>
        
         <!-- Fin Fotos Solicitud -->
         
         <!-- Fotos Documentos Requeridos -->
                 <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-camera"></i> Fotos Documentos Requeridos<small> gallery design </small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="{{ Storage::url(Auth::user()->ruta_foto_carta_1)}}" alt="image">
                                <div class="mask">
                                    <p>Descargar</p>
                                    <div class="tools tools-bottom">
                                        <a href="{{ route('foto-carta.primera')}}"><i class="fa fa-download"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <p>(Página 1) Carta Art.492</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="thumbnail">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="{{ Storage::url(Auth::user()->ruta_foto_carta_2)}}" alt="image">
                                <div class="mask">
                                    <p>Descargar</p>
                                    <div class="tools tools-bottom">
                                        <a href="{{ route('foto-carta.2')}}"><i class="fa fa-download"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <p>(Página 2) Carta Art.492</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="{{ Storage::url(Auth::user()->ruta_foto_cambio)}}" alt="image">
                                <div class="mask">
                                    <p>Descargar</p>
                                    <div class="tools tools-bottom">
                                        <a href="{{ route('descargar.foto-cambio')}}"><i class="fa fa-download"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <p>Carta Cambio de Conducto</p>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
         <!-- Fin Fotos Documentos Requeridos -->
         

    </div>  
</div>


<script>
    function editar_solicitud1() {
        var x = document.getElementById("editar_solicitud_1");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function editar_solicitud2() {
        var x = document.getElementById("editar_solicitud_2");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    
    function editar_ine() {
        var x = document.getElementById("editar_ine");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function editar_domicilio() {
        var x = document.getElementById("editar_domicilio");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    
</script>



@endsection




