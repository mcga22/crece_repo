
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Crece | Fianzas Jalisco">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Crece | Fianzas Jalisco</title>

    <!-- Favicon -->

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('cms/style.css') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/minilogo.png') }}"/>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>

    <!-- ***** Top Search Area Start ***** -->
    <div class="top-search-area">
        <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <!-- Form -->
                        <form action="index.html" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Top Search Area End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="uzaNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="{{ asset('images/minilogo.png') }}" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                             @if (Route::has('login'))
                             @auth
                             <div class="get-a-quote ml-4 mr-3">
                                 <li><a class="btn uza-btn" href="{{ url('/home') }}">Menú Principal</a></li>
                            </div>
                               
                        @else
                         <div class="get-a-quote ml-4 mr-3">
                            <li><a class="btn uza-btn" href="{{ route('login') }}">Iniciar Sesión</a></li>
                            </div>
                                    @if (Route::has('register'))
                                    <div class="get-a-quote ml-4 mr-3">
                                        <li><a class="btn uza-btn"  href="{{ route('register') }}">Registrar mi Municipio</a></li>
                                        </div>
                                    @endif
                                @endauth

                         @endif

                        </div>
                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide">
                <!-- Background Curve -->
                <div class="background-curve">
                    <img src="{{ asset('cms/img/core-img/curve-1.png') }}" alt="">
                </div>

                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-text">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">Sistema para Generación de <span>Fianzas</span> para <span>Funcionarios Municipales</span></h2>
                                    <h5 data-animation="fadeInUp" data-delay="400ms">Somos agentes de seguros y fianzas debidamente registrados (CNSF), especializados en gobiernos municipales con 18 años de experiencia y trabajando con las instituciones más importantes del país.</h5>
                                   {{--  <a href="{{ route('register') }}" class="btn uza-btn btn-2" data-animation="fadeInUp" data-delay="700ms">Tramitar mis Fianzas</a> --}}
                                </div>
                            </div>
                            <!-- Welcome Thumbnail -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-thumbnail">
                                    <img src="{{ asset('images/creceservicios.png') }}" alt="" data-animation="slideInRight" data-delay="400ms">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide">
                <!-- Background Curve -->
                <div class="background-curve">
                    <img src="{{ asset('cms/img/core-img/curve-1.png') }}" alt="">
                </div>

                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-text">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">Sistema para Generación de <span>Fianzas</span> para <span>Funcionarios Municipales</span></h2>
                                    <h5 data-animation="fadeInUp" data-delay="400ms">Somos agentes de seguros y fianzas debidamente registrados (CNSF), especializados en gobiernos municipales con 18 años de experiencia y trabajando con las instituciones más importantes del país.</h5>

                                    {{-- <a href="{{ route('register') }}" class="btn uza-btn btn-2" data-animation="fadeInUp" data-delay="700ms">Tramitar mis Fianzas</a> --}}
                                </div>
                            </div>
                            <!-- Welcome Thumbnail -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-thumbnail">
                                    <img src="{{ asset('images/creceservicios.png') }}" alt="" data-animation="slideInRight" data-delay="400ms">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide">
                <!-- Background Curve -->
                <div class="background-curve">
                    <img src="{{ asset('cms/img/core-img/curve-1.png') }}" alt="">
                </div>

                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-text">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">Sistema para Generación de <span>Fianzas</span> para <span>Funcionarios Municipales</span></h2>
                                    <h5 data-animation="fadeInUp" data-delay="400ms">Somos agentes de seguros y fianzas debidamente registrados (CNSF), especializados en gobiernos municipales con 18 años de experiencia y trabajando con las instituciones más importantes del país.</h5>
{{--                                     <a href="{{ route('register') }}" class="btn uza-btn btn-2" data-animation="fadeInUp" data-delay="700ms">Tramitar mis Fianzas</a> --}}
                                </div>
                            </div>
                            <!-- Welcome Thumbnail -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-thumbnail">
                                    <img src="{{ asset('images/creceservicios.png') }}" alt="" data-animation="slideInRight" data-delay="400ms">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    <section class="uza-about-us-area">
        <div class="container">
            <div class="row align-items-center">

                <!-- About Thumbnail -->
                <div class="col-12 col-md-6">
                    <div class="about-us-thumbnail mb-80">
                        <img src="{{ asset('images/municipio.jpg') }}" alt="">
                        <!-- Video Area -->
    <!--                     <div class="uza-video-area hi-icon-effect-8">
                            <a href="https://www.youtube.com/watch?v=sSakBz_eYzQ" class="hi-icon video-play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div> -->                       
                         
                    </div>
                    <a href="{{ route('register') }}" class="btn uza-btn btn-2" >Tramitar mis Fianzas</a>
                </div>

                <!-- About Us Content -->
                <div class="col-12 col-md-6">
                    <div class="about-us-content mb-80">
                        <h2>¿Porqué es obligatorio afianzar la gestión de los funcionarios municipales? ... Te expongo los principios legales.</h2>
                        <p>LEY DE FISCALIZACIÓN Y RENDICIÓN DE CUENTAS PARA EL ESTADO DE JALISCO Y SUS MUNICIPIOS</p>
                        <p>
 
Artículo 61.

1. Los sujetos auditables con facultades de decisión sobre la recaudación, ingreso, manejo, custodia, administración, destino, ejercicio, ejecución o aplicación de los recursos públicos financieros y los titulares las oficinas encargadas de las adquisiciones y de la contratación de obra pública, deberán:
<br>
 
I. Caucionar su manejo de fondos, dentro de los treinta días siguientes al día en que tome posesión de su cargo, en cualquiera de las formas establecidas en ley y por el importe que determinen las leyes de ingresos; y <br>
 
II. Actualizar su caución dentro del mes de enero de cada año. <br>
 
2. La caución deberá otorgarse en favor de la entidad auditable y remitirla a la Auditoría Superior para su registro y control, dentro del término aludido. <br>
 
3. Los gastos que se originen con motivo del otorgamiento de la caución, serán a cargo del erario público
 </p>
<p>
ARTÍCULO 7 DE LA LEY DE INGRESOS MUNICIPAL,<br>
 
10 BIS DE LA LEY DE HACIENDA MUNICIPAL<br>
 
38 FRACCION VII DE LA LEY DE GOBIERNO Y ADMINISTRACION PUBLICA
</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Background Pattern -->
        <div class="about-bg-pattern">
            <img src="{{ asset('cms/img/core-img/curve-2.png') }}" alt="">
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- CTA Area Start -->
        <div class="uza-cta-area section-padding-0-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-8">
                        <div class="cta-content mb-80">
                            <h2>Verifica tu Agente (CNSF)</h2>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="cta-content mb-80">
                            <div class="call-now-btn">
                                <a href="https://www.cnsf.gob.mx/EntidadesSupervisadas/OtrasPersonasSupervisadas/Paginas/BusquedaAgentesApoderados.aspx">clic aquí para verificar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CTA Area End -->


    <!-- ***** Services Area Start ***** -->
   {{--  <section class="uza-services-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Nuestros Clientes</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Service Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        <div class="service-icon">
                            <i class="icon_cone_alt"></i>
                        </div>
                        <h5>Business Strategy</h5>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        <div class="service-icon">
                            <i class="icon_piechart"></i>
                        </div>
                        <h5>Market Analytics</h5>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        <div class="service-icon">
                            <i class="icon_easel"></i>
                        </div>
                        <h5>Marketing Social</h5>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata.</p>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!-- ***** Services Area End ***** -->



    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">
            <div class="row justify-content-between">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Contacto</h4>

                        <!-- Footer Content -->
                        <div class="footer-content mb-15">
                            <h3>33 2052 5305</h3>
                            <p>Rayo 3662<br>
                            Jardines del Bosque<br>
                            Guadalajara, Jalisco
                            <br>creceserviciosfinancieros@gmail.com</p>
                        </div>
                        {{-- <p class="mb-0">Mon - Fri: 9:00 - 19:00 <br>
                            Closed on Weekends</p> --}}
                    </div>

                </div>
                <div class="col-6 col-sm-6 col-lg-6">
                    {{-- <div class="single-footer-widget mb-80"> --}}
                        <img src="{{ asset('images/rotonda.jpg') }}" alt="">
                    {{-- </div> --}}

                </div>


            </div>

 <div class="row" style="margin-bottom: 30px;">
                
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>

        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- ******* All JS Files ******* -->
    <!-- jQuery js -->
    <script src="{{ asset('cms/js/jquery.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('cms/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('cms/js/bootstrap.min.js') }}"></script>
    <!-- All js -->
    <script src="{{ asset('cms/js/uza.bundle.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('cms/js/default-assets/active.js') }}"></script>

</body>

</html>