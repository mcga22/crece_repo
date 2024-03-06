@extends('layouts_admin.app')

@section('content')
<!-- page content -->

<div class="page-title">
    <div class="title_left">
        <h3> Documentos Requeridos </h3>
    </div>
</div>

<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Descarga de Archivos</h2>
                <a href="{{ url('/archivo/modelo-carta') }}" class="btn btn-info" style="float: right;">
                    <span class="fa fa-camera" style="color:white;"></span>  Subir fotos </a>
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
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Adjunto encontrarás los 3 archivos necesarios para tramitar tu fianza, son editables.
                            </div>
                        </div>
                    </div>    



                </div>
                <br>
                <br>

                <div class="row">

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

                    <div class="col-md-55">
                        <a href="{{ url('/archivo/modelo-carta') }}" class="btn btn-round btn-success">
                            <span class="glyphicon glyphicon-download"></span> Descargar carta</a>

                    </div>

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

                </div>

            </div>
        </div>
    </div>
</div>


<!-- /page content -->
@endsection
