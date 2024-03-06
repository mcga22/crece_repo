@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registra tu Municipio') }}</div>
                <img src="{{ asset('images/regiones.png') }}" class="rounded mx-auto d-block" alt="..." height="40%" width="40%">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!--
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>


                            </div>
                        </div>
                        -->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Municipio') }}</label>

                            <div class="col-md-6">
                               
                                <select required id="name" name="name"  id="telefono"  class="form-control" >
                                    <option value="Acatic" selected>Acatic</option> 
                                    <option value="Acatlán de Juárez">Acatlán de Juárez</option>
                                    <option value="Ahualulco de Mercado">Ahualulco de Mercado</option>
                                    <option value="Amacueca">Amacueca</option>
                                    <option value="Amatitán">Amatitán</option>
                                    <option value="Ameca">Ameca</option>
                                    <option value="Arandas">Arandas</option>
                                    <option value="Atemajac de Brizuela">Atemajac de Brizuela</option>
                                    <option value="Atengo">Atengo</option>
                                    <option value="Atenguillo">Atenguillo</option>
                                    <option value="Atotonilco el Alto">Atotonilco el Alto</option>
                                    <option value="Atoyac">Atoyac</option>
                                    <option value="Autlán de Navarro">Autlán de Navarro</option>
                                    <option value="Ayotlán">Ayotlán</option>
                                    <option value="Ayutla">Ayutla</option>
                                    <option value="Bolaños">Bolaños</option>
                                    <option value="Cabo Corrientes">Cabo Corrientes</option>
                                    <option value="Cañadas de Obregón">Cañadas de Obregón</option>
                                    <option value="Casimiro Castillo">Casimiro Castillo</option>
                                    <option value="Chapala">Chapala</option>
                                    <option value="Chimaltitán">Chimaltitán</option>
                                    <option value="Chiquilistlán">Chiquilistlán</option>
                                    <option value="Cihuatlán">Cihuatlán</option>
                                    <option value="Cocula">Cocula</option>
                                    <option value="Colotlán">Colotlán</option>
                                    <option value="Concepción de Buenos Aires">Concepción de Buenos Aires</option>
                                    <option value="Cuauitlán de García Barragán">Cuauitlán de García Barragán</option>
                                    <option value="Cuautla">Cuautla</option>
                                    <option value="Cuquío">Cuquío</option>
                                    <option value="Degollado">Degollado</option>
                                    <option value="Ejutla">Ejutla</option>
                                    <option value="El Arenal">El Arenal</option>
                                    <option value="El Grullo">El Grullo</option>
                                    <option value="El Limón">El Limón</option>
                                    <option value="El Salto">El Salto</option>
                                    <option value="Encarnación de Díaz">Encarnación de Díaz</option>
                                    <option value="Etzatlán">Etzatlán</option>
                                    <option value="Gómez FaríasGómez Farías">Gómez Farías</option>
                                    <option value="Guachinango">Guachinango</option>
                                    <option value="Guadalajara">Guadalajara</option>
                                    <option value="Hostotipaquillo">Hostotipaquillo</option>
                                    <option value="Hostotipaquillo">Hostotipaquillo</option>
                                    <option value="Huejuquilla el Alto">Huejuquilla el Alto</option>
                                    <option value="Ixtlahuacán de los Membrillos">Ixtlahuacán de los Membrillos</option>
                                    <option value="Ixtlahuacán del Río">Ixtlahuacán del Río</option>
                                    <option value="Jalostotitlán">Jalostotitlán</option>
                                    <option value="Jamay">Jamay</option>
                                    <option value="Jesús María">Jesús María</option>
                                    <option value="Jilotlán de los Dolores">Jilotlán de los Dolores</option>
                                    <option value="Jocotepec">Jocotepec</option>
                                    <option value="Juanacatlán">Juanacatlán</option>
                                    <option value="Juchitlán">Juchitlán</option>
                                    <option value="La Barca">La Barca</option>
                                    <option value="Lagos de Moreno">Lagos de Moreno</option>
                                    <option value="La Manzanilla de la Paz">La Manzanilla de la Paz</option>
                                    <option value="La Huerta">La Huerta</option>
                                    <option value="Magdalena">Magdalena</option>
                                    <option value="Mascota">Mascota</option>
                                    <option value="Mazamitla">Mazamitla</option>
                                    <option value="Mexticacán">Mexticacán</option>
                                    <option value="Mezquitic">Mezquitic</option>
                                    <option value="Mixtlán">Mixtlán</option>
                                    <option value="Ojuelos de Jalisco">Ojuelos de Jalisco</option>
                                    <option value="Ocotlán ">Ocotlán </option>
                                    <option value="Pihuamo">Pihuamo</option>
                                    <option value="Poncitlán">Poncitlán</option>
                                    <option value="Puerto Vallarta">Puerto Vallarta</option>
                                    <option value="Quitupan">Quitupan</option>
                                    <option value="San Cristóbal de la Barranca">San Cristóbal de la Barranca</option>
                                    <option value="San Diego de Alejandría">San Diego de Alejandría</option>
                                    <option value="San Gabriel">San Gabriel</option>
                                    <option value="San Ignacio Cerro Gordo ">San Ignacio Cerro Gordo </option>
                                    <option value="San Juan de los Lagos">San Juan de los Lagos</option>
                                    <option value="San Juanito de Escobedo">San Juanito de Escobedo</option>
                                    <option value="San Julián">San Julián</option>
                                    <option value="San Marcos">San Marcos</option>
                                    <option value="San Martín de Bolaños">San Martín de Bolaños</option>
                                    <option value="San Martín Hidalgo">San Martín Hidalgo</option>
                                    <option value="San Miguel el Alto">San Miguel el Alto</option>
                                    <option value="San Sebastián del Oeste">San Sebastián del Oeste</option>
                                    <option value="Santa María de los Ángeles">Santa María de los Ángeles</option>
                                    <option value="Santa María del Oro">Santa María del Oro</option>
                                    <option value="Sayula">Sayula</option>
                                    <option value="Tala">Tala</option>
                                    <option value="Talpa de Allende">Talpa de Allende</option>
                                    <option value="Tamazula de Gordiano">Tamazula de Gordiano</option>
                                    <option value="Tapalpa">Tapalpa</option>
                                    <option value="Tecalitlán">Tecalitlán</option>
                                    <option value="Techaluta de Montenegro">Techaluta de Montenegro</option>
                                    <option value="Tecolotlán">Tecolotlán</option>
                                    <option value="Tenamaxtlán">Tenamaxtlán</option>
                                    <option value="Teocaltiche">Teocaltiche</option>
                                    <option value="Teocuitatlán de Corona">Teocuitatlán de Corona</option>
                                    <option value="Tepatitlán de Morelos">Tepatitlán de Morelos</option>
                                    <option value="Tequila">Tequila</option>
                                    <option value="Teuchitlán">Teuchitlán</option>
                                    <option value="Tizapán el Alto">Tizapán el Alto</option>
                                    <option value="Tlajomulco de Zúñiga">Tlajomulco de Zúñiga</option>
                                    <option value="Tlaquepaque">Tlaquepaque</option>
                                    <option value="Tolimán">Tolimán</option>
                                    <option value="Tomatlán">Tomatlán</option>
                                    <option value="Tonalá">Tonalá</option>
                                    <option value="Tonaya">Tonaya</option>
                                    <option value="Tonila">Tonila</option>
                                    <option value="Totatiche">Totatiche</option>
                                    <option value="Tototlán">Tototlán</option>
                                    <option value="Tuxcacuesco">Tuxcacuesco</option>
                                    <option value="Tuxcueca">Tuxcueca</option>
                                    <option value="Tuxpan">Tuxpan</option>
                                    <option value="Unión de San Antonio">Unión de San Antonio</option>
                                    <option value="Unión de Tula">Unión de Tula</option>
                                    <option value="Valle de Guadalupe">Valle de Guadalupe</option>
                                    <option value="Valle de Juárez">Valle de Juárez</option>
                                    <option value="Villa Corona">Villa Corona</option>
                                    <option value="Villa Guerrero">Villa Guerrero</option>
                                    <option value="Villa Hidalgo">Villa Hidalgo</option>
                                    <option value="Villa Purificación">Villa Purificación</option>
                                    <option value="Yahualica de González Gallo">Yahualica de González Gallo</option>
                                    <option value="Zacoalco de Torres">Zacoalco de Torres</option>
                                    <option value="Zapopan">Zapopan</option>
                                    <option value="Zapotiltic">Zapotiltic</option>
                                    <option value="Zapotitlán de Vadillo">Zapotitlán de Vadillo</option>
                                    <option value="Zapotlán del Rey">Zapotlán del Rey</option>
                                    <option value="Zapotlanejo">Zapotlanejo</option>
                                    <option value="Zapotlán el Grande">Zapotlán el Grande </option>
                                    <option value="pr">pr</option>
                                    <option value="ad">ad</option>                                
                                </select>
                                
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>  
                        </div>      

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('R.F.C.') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar R.F.C') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="text" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Razón Social') }}</label>

                            <div class="col-md-6">
                                <input required id="razon_social" type="text" class="form-control" name="razon_social">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Persona Física, Apoderado Legal o Gerente General (Nombre Completo)') }}</label>

                            <div class="col-md-6">
                                <input required id="persona_fisica" type="text" class="form-control" name="persona_fisica">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>

                            <div class="col-md-6">
                                <input required id="telefono" type="text" class="form-control" name="telefono">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('C.P.') }}</label>

                            <div class="col-md-6">
                                <input required id="cp" type="text" class="form-control" name="cp">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Calle') }}</label>

                            <div class="col-md-6">
                                <input required id="calle" type="text" class="form-control" name="calle">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('No. Ext./Int.') }}</label>

                            <div class="col-md-6">
                                <input required id="no_ext" type="text" class="form-control" name="no_ext">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Colonia') }}</label>

                            <div class="col-md-6">
                                <input required id="colonia" type="text" class="form-control" name="colonia">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
