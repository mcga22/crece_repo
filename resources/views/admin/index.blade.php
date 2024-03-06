@extends('admin.layout')

@section('content')
<div class="page-title">
    <div class="title_left">
        <h3>Plain Page</h3>
    </div>  
</div>

<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Plain Page</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Nuevas Fianzas</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Código de Fianza</th>
                                        <th>Fecha</th>
                                        <th>Ver</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($fianzas as $fianza)
                                    <tr class="table-success" >
                                        <th scope="row">{{ $fianza->id }}</th>
                                        <td>{{ $fianza->no_fianza }}</td>
                                        <td>{{ $fianza->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.show', $fianza->fianza_fk) }}" 
                                                class="btn btn-round btn-info">
                                        Ver
                                        </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Municipios de Jalisco </h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Teléfono</th>
                                        <th>Ver</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($municipios as $municipio)
                                    <tr>
                                        <th scope="row">{{ $municipio->name }}</th>
                                        <td>{{ $municipio->email }}</td>
                                        <td>{{ $municipio->telefono }}</td>
                                        <td>
                                            <a href="{{ route('ver.municipio', $municipio->id) }}" 
                                               accesskey=""class="btn btn-sm btn-info">ver
                                            </a>
                                        </td>
                                    </tr>
                                 @endforeach
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
