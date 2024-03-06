@extends('admin.layout')

@section('content')
<div class="page-title">
              <div class="title_left">
                <h3>Municipio {{ $municipio->name }}</h3>
              </div>  
            </div>
              
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Información</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     
                      
                      
<div class="col-md-6 ">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-institution"></i> Información del  Municipio:</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input disabled type="text" class="form-control has-feedback-left" id="razon_social" name="razon_social" placeholder="Razón Social" value="{{ $municipio->razon_social }}">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input disabled type="text" class="form-control" id="rfc" name="rfc" placeholder="r.f.c." disabled="disabled" value="{{ $municipio->rfc }}">
                    <span class="fa fa-university form-control-feedback right" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input disabled type="text" class="form-control has-feedback-left" id="email" name="email" placeholder="Correo" value="{{ $municipio->email }}">
                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input disabled type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="{{ $municipio->telefono }}">
                    <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-md-3 col-sm-3 ">Persona física, apoderado legal, Administrador General o Gerente General (Nombre completo)</label>
                    <div class="col-md-9 col-sm-9 ">
                        <input disabled type="text" class="form-control" id="persona_fisica" name="persona_fisica" placeholder="Persona Física" value="{{ $municipio->persona_fisica }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-md-1 col-sm-1 ">Calle</label>
                    <div class="col-md-6 col-sm-6 ">
                        <input  disabled type="text" class="form-control" id="calle" name="calle" placeholder="Calle" value="{{ $municipio->calle }}">
                    </div>

                    <label class="col-form-label col-md-1 col-sm-1 ">No. Ext./Int. </label>
                    <div class="col-md-4 col-sm-4 ">
                        <input disabled type="text" class="form-control" id="no_ext" name="no_ext" placeholder="No. Ext./Int." value="{{ $municipio->no_ext }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-md-1 col-sm-1 ">Colonia</label>
                    <div class="col-md-6 col-sm-6 ">
                        <input disabled type="text" class="form-control" id="colonia" name="colonia" placeholder="Colonia" value="{{ $municipio->colonia }}">
                    </div>

                    <label class="col-form-label col-md-1 col-sm-1 ">C.P. </label>
                    <div class="col-md-4 col-sm-4 ">
                        <input disabled type="text" class="form-control" id="cp" name="cp" placeholder="C.P." value="{{ $municipio->cp }}">
                    </div>

                </div>


                <div class="form-group row">
                    <label class="col-form-label col-md-3 col-sm-3 ">Entidad Federativa</label>
                    <div class="col-md-9 col-sm-9 ">
                        <input disabled type="text" class="form-control" id="entidad_federativa" name="entidad_federativa" placeholder="Entidad Federativa" value="{{ $municipio->entidad_federativa }}">
                    </div>
                </div>

                <div class="ln_solid"></div>
        </div>
    </div>
</div>
                      
            
                      <div class="col-md-6">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Descargar Archivos del Municipio</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <a href="{{ route('admin.carta1', $municipio->id) }}" 
                     class="btn btn-app">
                    <i class="fa fa-edit"></i>Pág 1 Carta
                  </a>
                  <a href="{{ route('admin.carta2', $municipio->id) }}" 
                     class="btn btn-app" >
                    <i class="fa fa-play"></i>Pág 2 Carta
                  </a>
                  <a href="{{ route('admin.cambio', $municipio->id) }}" 
                     class="btn btn-app">
                    <i class="fa fa-pause"></i>Cambio Conducto
                  </a>                  
                </div>
              </div>

            </div>
                      
                
                        <!-- Mis fianzas --->
    <div class="col-md-6 col-sm-6  ">
        <div class="x_panel fixed_height_320">
            <div class="x_title" >
                <h2><i class="fa fa-inbox"></i>Fianzas de {{ $municipio->name }}</h2>
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
                                <a href="{{ route('admin.show', $fianza->fianza_fk) }}" 
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

                        
                      
                      
                      
                      
                  </div>
                </div>
              </div>
            </div>
@endsection

