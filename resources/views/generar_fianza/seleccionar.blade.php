@extends('layouts_admin.app')

@section('content')
            <div class="page-title">
              <div class="title_left">
                <h3>Generar mi Fianza: Paso 1 (Seleccionar Opción)</h3>
              </div>  
            </div>
              
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                 <div class="x_title">
                <h2>Selecciona la Opción </h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-md-12 col-sm-12  ">
                    <!--
                    <div class="col-md-6 col-sm-6  ">
                     <a href="{{ url('register') }}" class="btn btn-success" style="height: 180px; width: 70%; float: right;">
                    <i class="fa fa-edit" style="font-size: 50px; color:white;"></i> 
                    <br>
                     <h3 style="color:white;">Completar Documentos en Linea</h3>
                     <h6 style="color:white;">*Lorem</h6>
                    </a>
                 </div> --> 
                <div class="col-md-6 col-sm-6  ">
                    <a href="{{ url('fianza/create') }}" style="float: right;" class="btn btn-info" style="height: 180px; width: 70%;">
                    <i class="glyphicon glyphicon-print" style="font-size: 50px; color:white;"></i>
                    <br>
                    <h3 style="color:white;">Descargar Documentos para Llenar</h3>
                    {{-- <h6 style="color:white;">*Lorem</h6> --}}
                </a> 
                 </div> 
                </div>
                 
                
                
            </div>
                </div>
              </div>
            </div>

@endsection
