          <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ route('home') }}" class="site_title"><i class="glyphicon glyphicon-stats"></i><span> Crece | Fianzas </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('images/user.png') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="/home"><i class="fa fa-home"></i> Inicio </a></li>
                  {{--<li><a href="{{ url('/datos-municipio') }}" ><i class="fa fa-institution"></i> Datos de mi Municipio </a></li> --}}
                  <li><a href="/fianza-seleccionar"><i class="fa fa-check-square"></i> Generar mi Fianza </a></li>
                 <!-- <li><a><i class="fa fa-inbox"></i> Mis Fianzas </a></li> -->
                  <li><a href="/info"><i class="fa fa-info-circle"></i> Información Importante</a></li>
                  <li><a href="/ayuda"><i class="fa fa-question"></i> Ayuda </a></li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Documentos</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ url('documentos-requeridos') }}"><i class="fa fa-file-text"></i> Documentos Requeridos </a></li>
                 <!-- <li><a><i class="fa fa-camera"></i> Fotos Archivos </a></li> -->
               
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
                <!-- 
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
                
                -->
              <a data-toggle="tooltip" data-placement="top" title="Ayuda">
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Cerrar Sesión" href="{{ route('logout') }}" 
                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                 </form>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
