@extends('layouts_admin.app')

@section('content')
@if(Auth::user()->rol_fk == 2)
<div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Ir a Panel de Administración</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                      <a href="/admin-index">
                    <div class="jumbotron">
                      <h1>Dar clic aquí para ir a panel de administración.</h1>
                    </div>
                  </div> </a>

                </div>
              </div>
            </div>
@else
<div class="page-title">
    <div class="title_left">
        <h3>Tablero Principal</h3>
    </div>  
</div>
<div class="clearfix"></div>

<div class="row">
  <!-- Generar mi fianza -->
    <div class="col-md-6 col-sm-6 ">
        <div class="x_panel tile fixed_height_320">
            <div class="x_title">
                <h2><i class="fa fa-check-square"></i> Generar mi Fianza</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-md-5 col-sm-5 ">
                    <a href="{{ route('fianza.seleccionar') }}" class="btn btn-round btn-success" style="height: 150px; width: 80%; ">
                        <i class="fa fa-edit" style="font-size: 50px;"></i>
                        <h2>Nueva Fianza</h2>
                        <p>(Dar clic aquí para generar nueva fianza)</p>
                    </a>
                </div>
                <div class="col-md-7 col-sm-7 ">
                    <ul class="nav nav-tabs justify-content-end bar_tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="home" aria-selected="true">Proceso para Crear una Nueva Fianza</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab">
                            <div class="">
                                <ul class="to_do">
                                    <li>
                                        <p>
                                        <div class="icheckbox_flat-green" style="position: relative;">
                                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>1) Llenar y subir fotos de Carta Art. 492 y carta cambio de conducto con los campos requeridos. </p>
                                    </li>
                                    <li>
                                        <p>
                                        <div class="icheckbox_flat-green" style="position: relative;">
                                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>2) Llenar y subir fotos de la Solicitud para Fianza de Fidelidad.</p>
                                    </li>
                                    <li>
                                        <p>
                                        <div class="icheckbox_flat-green" style="position: relative;">
                                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>3) Subir INE por ambos lados y copia de comprobante de domicilio.</p>
                                    </li>
                                    <li>
                                        <p>
                                        <div class="icheckbox_flat-green" style="position: relative;">
                                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>4) Realizar el pago y enviar el comprobante.</p>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
         
            </div>
        </div>
    </div>
  <!-- Fin de Generar mi Fianza-->

  <!-- Mis fianzas --->
    <div class="col-md-6 col-sm-6  ">
        <div class="x_panel fixed_height_320">
            <div class="x_title" >
                <h2><i class="fa fa-inbox"></i> Mis Fianzas</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content ">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(isset($fianzas))
                       @foreach($fianzas as $fianza)
                        <tr>
                            <th scope="row">{{ substr($fianza->no_fianza, 0, 5) }}</th>
                            <td>{{ date_format(date_create($fianza->created_at), 'd/m/y') }}</td>
                            <td>
                                @if($fianza->estado_fianza == 0)
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-info" 
                                        role="progressbar" style="width: 50%" aria-valuenow="50" 
                                        aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                @else
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-success" 
                                        role="progressbar" style="width: 100%" aria-valuenow="100" 
                                        aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('fianzas.show', $fianza->id) }}" 
                                    class="btn btn-round btn-info">
                                        Ver
                                </a>
                            </td>
                        </tr>
                        @endforeach
                         {{ $fianzas->render() }}
                       @else
                       <tr>
                            <td colspan="4">Aún no has generado ninguna fianza.</td>
                        </tr>
                       @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>

<!-- Fotos Carta Art-->
  <div class="col-md-3 col-sm-3 ">
      <div class="x_panel tile  overflow_hidden">
          <div class="x_title">
              <h2><i class="fa fa-envelope"></i> Fotos Carta Art. 492</h2>
              <div class="clearfix"></div>
          </div>
          <div class="x_content">

              <div class="row">
                  <p>
                  <div class="col-md-70">
                      <div class="thumbnail">
                          <div class="image view view-first">
                              @if(isset( Auth::user()->ruta_foto_carta_1)) 
                              <img style="width: 100%; display: block;" src="{{  Storage::url(Auth::user()->ruta_foto_carta_1) }}" alt="image">
                              @else
                              <img style="width: 100%; display: block;" src="{{ asset('images/sinfoto.png') }}" alt="image">
                              @endif
                              <div class="mask">
                                  <p>Descargar</p>
                                  <div class="tools tools-bottom">
                                      @if(isset( Auth::user()->ruta_foto_carta_1) )
                                      <a href="{{ route('foto-carta.primera')}}"><i class="fa fa-download"></i></a>
                                      @else
                                      <a href="#"><i class="fa fa-download"></i></a>
                                      @endif
                                  </div>
                              </div>
                          </div>
                          <div class="caption">
                              <p>Mi Foto Carta Art. 492 Página 1<button onclick="editar_carta1()" class="btn btn-success" style="float: right;">Editar</button> </p>
                          </div>
                      </div>
                  </div>
                  <div id="editar_carta_1" style="display:none;">
                      <form action="cambiar/foto-carta1" method="post" enctype="multipart/form-data">
                          @method('POST')
                          @csrf
                          <label for="cambiar_carta1">
                              <input type="file" name="cambiar_carta1">
                          </label>
                          <button type="submit" class="btn btn-info">Guardar</button>
                      </form>
                  </div>
                  </p>
                  <p>
                  <div class="col-md-70">
                      <div class="thumbnail">
                          <div class="image view view-first">
                              @if(isset( Auth::user()->ruta_foto_carta_2))
                              <img style="width: 100%; display: block;" src="{{ Storage::url(Auth::user()->ruta_foto_carta_2)}}" alt="image">
                              @else
                              <img style="width: 100%; display: block;" src="{{ asset('images/sinfoto.png') }}" alt="image">
                              @endif
                              <div class="mask">
                                  <p>Descargar</p>
                                  <div class="tools tools-bottom">
                                      @if(isset( Auth::user()->ruta_foto_carta_2) )
                                      <a href="{{ route('foto-carta.2')}}"><i class="fa fa-download"></i></a>
                                      @else
                                      <a href="#"><i class="fa fa-download"></i></a>
                                      @endif
                                  </div>
                              </div>
                          </div>
                          <div class="caption">
                              <p>Mi Foto Carta Art. 492 Página 2<button onclick="editar_carta2()" class="btn btn-success" style="float: right;">Editar</button> </p>

                          </div>
                      </div>
                  </div>
                  <div id="editar_carta_2" style="display:none;">
                      <form action="cambiar/foto-carta2" method="post" enctype="multipart/form-data">
                          @method('POST')
                          @csrf
                          <label for="cambiar_carta2">
                              <input type="file" name="cambiar_carta2">
                          </label>
                          <button type="submit" class="btn btn-info">Guardar</button>
                      </form>
                  </div>
                  </p>
                  <a href="{{ url('/archivo/modelo-carta') }}" class="btn btn-round btn-primary" style="float: right;">
                      <span class="fa fa-download" style="color:white;"></span>  Descargar formato </a>
              </div>
          </div>
      </div>
  </div>
<!-- Fin otos Carta Art-->


<!-- Cuenta HSBC -->
    <div class="col-md-3 col-sm-3 ">
        <div class="x_panel tile overflow_hidden">
            <div class="x_title">
                <h2>Cuenta HSBC para pago de Fianzas </h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <!-- <div class="row">  -->
                    
                    
                    <div class="col-md-65">
                        <div class="thumbnail">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="{{ asset('images/fotocuenta.png') }}" alt="image">
                                <div class="mask">
                                    <p>Descargar</p>
                                    <div class="tools tools-bottom">
                                        <a href="archivo/cuenta-sofimex"><i class="fa fa-download"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <p>Archivo PDF con la cuenta HSBC de la Afianzadora SOFIMEX.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="x_title">
                        <h2>Carta Cambio de Conducto</h2>
                    <div class="clearfix"></div>
                    </div>
                    
                    <div class="col-md-65">
                        <div class="thumbnail">
                            <div class="image view view-first">
                              @if(isset( Auth::user()->ruta_foto_cambio))
                              <img style="width: 100%; display: block;" src="{{ Storage::url(Auth::user()->ruta_foto_cambio)}}" alt="image">
                              @else
                              <img style="width: 100%; display: block;" src="{{ asset('images/sinfoto.png') }}" alt="image">
                              @endif
                                <div class="mask">
                                    <p>Descargar</p>
                                    <div class="tools tools-bottom">
                                      @if(isset( Auth::user()->ruta_foto_cambio) )
                                      <a href="{{ route('descargar.foto-cambio')}}"><i class="fa fa-download"></i></a>
                                      @else
                                      <a href="#"><i class="fa fa-download"></i></a>
                                      @endif
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <p>Mi Foto Carta Cambio Conducto<button onclick="editar_agente()" class="btn btn-success" style="float: right;">Editar</button> </p>
                            </div>
                        </div>
                    </div>
                    <div id="editar_agente" style="display:none;">
                      <form action="{{ route('cambiar.agente')}}" method="post" enctype="multipart/form-data">
                          @method('POST')
                          @csrf
                          <label for="editar_agente">
                              <input type="file" name="editar_agente">
                          </label>
                          <button type="submit" class="btn btn-info">Guardar</button>
                      </form>
                  </div>
                <a href="{{ url('/archivo/cambio-conducto') }}" class="btn btn-round btn-primary" style="float: right;">
                      <span class="fa fa-download" style="color:white;"></span>  Descargar formato </a>
               <!--  </div> -->


            </div>

        </div>
    </div>
<!-- Fin de Cuenta HSBC-->

<!-- MI municpio -->
<div class="col-md-6 ">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-institution"></i> Mi Municipio: {{ Auth::user()->name }}</h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <form action="{{ route('municipio.update', Auth::user()->id) }}" method="post" class="form-label-left input_mask">
                @method('PUT')
                @csrf

                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="razon_social" name="razon_social" placeholder="Razón Social" value="{{ Auth::user()->razon_social }}">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="text" class="form-control" id="rfc" name="rfc" placeholder="r.f.c." disabled="disabled" value="{{ Auth::user()->rfc }}">
                    <span class="fa fa-university form-control-feedback right" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="email" name="email" placeholder="Correo" value="{{ Auth::user()->email }}">
                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="{{ Auth::user()->telefono }}">
                    <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-md-3 col-sm-3 ">Persona física, apoderado legal, Administrador General o Gerente General (Nombre completo)</label>
                    <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" id="persona_fisica" name="persona_fisica" placeholder="Persona Física" value="{{ Auth::user()->persona_fisica }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-md-1 col-sm-1 ">Calle</label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" class="form-control" id="calle" name="calle" placeholder="Calle" value="{{ Auth::user()->calle }}">
                    </div>

                    <label class="col-form-label col-md-1 col-sm-1 ">No. Ext./Int. </label>
                    <div class="col-md-4 col-sm-4 ">
                        <input type="text" class="form-control" id="no_ext" name="no_ext" placeholder="No. Ext./Int." value="{{ Auth::user()->no_ext }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-md-1 col-sm-1 ">Colonia</label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" class="form-control" id="colonia" name="colonia" placeholder="Colonia" value="{{ Auth::user()->colonia }}">
                    </div>

                    <label class="col-form-label col-md-1 col-sm-1 ">C.P. </label>
                    <div class="col-md-4 col-sm-4 ">
                        <input type="text" class="form-control" id="cp" name="cp" placeholder="C.P." value="{{ Auth::user()->cp }}">
                    </div>

                </div>


                <div class="form-group row">
                    <label class="col-form-label col-md-3 col-sm-3 ">Entidad Federativa</label>
                    <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" id="entidad_federativa" name="entidad_federativa" placeholder="Entidad Federativa" value="{{ Auth::user()->entidad_federativa }}">
                    </div>
                </div>

                <div class="ln_solid"></div>

                <div class="form-group row">
                    <div class="col-md-9 col-sm-9  offset-md-3">
                        <button type="submit" class="btn btn-success" style="float: right;">Guardar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- FIn de Mi municpio -->

</div>

@endif

<script>
    function editar_carta1() {
        var x = document.getElementById("editar_carta_1");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function editar_carta2() {
        var x = document.getElementById("editar_carta_2");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    
    function editar_agente() {
        var x = document.getElementById("editar_agente");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    
</script>
@endsection
