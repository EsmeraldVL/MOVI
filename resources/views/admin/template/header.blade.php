<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @yield('name')
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @yield('estilos')
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="{{ asset('css/headerStyle.scss') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <!------ Include the above in your HEAD tag ---------->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <link rel="icon" href="{{ asset('imagenes/LogoMovi.png') }}">
</head>

<body style="background-color:#003a55;">
  <header style="background-color: #34373F ;">
    <div style="background: url('{{ asset('imagenes/fondo.jpg') }}'); padding-bottom: 0px; margin-bottom:0px; margin-top:0px; height: 17rem"
      class="jumbotron text-white">
      <div style="height: 100%; padding-top: 0px; margin-top: 0px;">
        <div class="foo" style="padding-top: 0px;height: 50%; display: block; text-align: center; align-items: center;">
          <span class="letter" style="padding-top: 0px; margin-top: 0px;" data-letter="M">ovi</span><span style="color:white;font-weight: 900;font-size: 7em; padding-left: 0px"></span>
        </div>
        </br>
        <h1 style=" padding-bottom: 0px ; display: block; text-align: center;"
          class="animate__animated animate__bounce animate__delay-2s">BIBLIOTECA</h1>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark" style="padding-top: 0px; margin-top: 0px ;">
      <a class="navbar-brand" href="{{ url('/home') }}">MOVI</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          @if (session()->get('idSubscripcion')>=1)
          <li class="nav-item dropdown">
            <div class="dropdown">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">Mi Cuenta</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Estado de Cuenta</a>
                  <a class="dropdown-item" href="#">Reporte de compras</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{url('Subscripcion/Subscription')}}">Nueva Subscripcion</a>
                  <a class="dropdown-item" href="{{url('Pagos/pagar')}}">Comprar Movis</a>
                </div>
          </li>
          @endif
          
          <li class="nav-item dropdown">
            <div class="dropdown">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Biblioteca</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ url('/library/Libros') }}">Todos los libros </a>
                  <a class="dropdown-item" href="{{ url('/library/Libros') }}">Promociones en Movi</a>
                  <a class="dropdown-item" href="{{ url('/library/Historias  ') }}">Historias</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Nuestros Escritores</a>
                </div>
          </li>
          @if (session()->get('idSubscripcion')>2)
          
            <li class="nav-item dropdown">
              <div class="dropdown">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Publicaciones</a>
                  <div class="dropdown-menu">
                    @can('update', Model::class)@endcan
                    <a class="dropdown-item" href="{{ url('/library/Libros/create') }}">Publicar Libro </a>
                    <a class="dropdown-item" href="{{ url('/library/Historias/create') }}">Publicar Historia</a>
                    <a class="dropdown-item" href="#">Historias </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Mis Publicaciones</a>
                  </div>
            </li>
          @endif
          
          @if (session()->get('idSubscripcion')>2)
          <li class="nav-item dropdown">
            <div class="dropdown">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Descuentos</a>
                <div class="dropdown-menu">
                  @can('update', Model::class)@endcan
                  <a class="dropdown-item" href="{{ url('/library/Libros/create') }}">Ver Descuentos</a>
                  <a class="dropdown-item" href="{{ url('/administracion/Discounts/create') }}">Crear Descuentos</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Mis Publicaciones</a>
                </div>
          </li>
          @endif
          <!-- Authentication Links -->
          @guest
              @if (Route::has('login'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                  </li>
              @endif

              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" style="color: rgb(209, 212, 12)" href="{{ route('register') }}">{{ __('Registrate en Movi') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      
                      <a class="dropdown-item" href="{{ url('administracion/Users/'.Auth::user()->email) }}">Mi Perfil</a>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
        </ul>
        <div class="form-inline my-2 my-lg-0">
          <button class="btn btn-info my-2 my-sm-0" ><img src="{{ url('imagenes/carrito-de-compras.png') }}" />  Mi Carrito</button>
        </div>
      </div>
    </nav>
  </header>

  <div class="wrapper">
    <div class="wrap">

      <section class="contentbox">
        @yield('content')
      </section>
      @yield('navigation')
      <div class="headline"></div>
      <div class="text"></div>
      <div class="text"></div>
      <div class="text"></div>
      <div class="button"></div>

    </div>
  </div>


  <footer class="footer">
    <div class="container bottom_border">
      <div class="row">
        <div class=" col-sm-4 col-md col-sm-4  col-12 col">
          <h5 class="headin5_amrc col_white_amrc pt2">Contactanos</h5>
          <!--headin5_amrc-->
          <p class="mb10">Somos una libreria dedicada a los escritores ofreciendoles un lugar para publicar 
            sus creaciones y poder darse a conocer en el mundo de la literatura.
          </p>
          <p><i class="fa fa-location-arrow"></i> Quetzaltenango, Quetzaltenango Guatemala </p>
          <p><i class="fa fa-phone"></i> +502-34546765 </p>
          <p><i class="fa fa fa-envelope"></i> info@movi.com </p>


        </div>


        <div class=" col-sm-4 col-md  col-6 col">
          <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
          <!--headin5_amrc-->
          <ul class="footer_ul_amrc">
            <li><a href="{{ url('/library/Libros') }}">Todos Los Libros</a></li>
            <li><a href="#">Historias</a></li>
            @guest
              @if (Route::has('login'))
                  <li >
                      <a href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                  </li>
              @endif

              @if (Route::has('register'))
                  <li >
                      <a href="{{ route('register') }}">{{ __('Registrate en Movi') }}</a>
                  </li>
              @endif
              @else
                <li >
      
                    
                        <a href="{{ url('administracion/Users/'.Auth::user()->email) }}">Mi Perfil</a>
                      
                </li>
              @endguest
            <li><a href="#">Mi Carrito</a></li>
            <li><a href="#">Libros Ofertados</a></li>
          </ul>
          <!--footer_ul_amrc ends here-->
        </div>




        <div class=" col-sm-4 col-md  col-12 col">
          <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
          <!--headin5_amrc ends here-->

          <ul class="footer_ul2_amrc">
            <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
              <p>Twitter  <a href="#">https://www.lipsum.com/</a></p>
            </li>
            <li><a href="#"><i class="fab fa-facebook fleft padding-right"></i> </a>
              <p>facebook <a href="#">https://www.lipsum.com/</a></p>
            </li>
            <li><a href="#"><i class="fab fa-instagram fleft padding-right"></i> </a>
              <p>Instagram  <a href="#">https://www.lipsum.com/</a></p>
            </li>
          </ul>
          <!--footer_ul2_amrc ends here-->
        </div>
      </div>
    </div>


    <div class="container">
      <ul class="foote_bottom_ul_amrc">
        <li><a href="http://webenlance.com">Inicio</a></li>
        <li><a href="http://webenlance.com">Quienes Somos</a></li>
        <li><a href="http://webenlance.com">Services</a></li>
        <li><a href="http://webenlance.com">Pricing</a></li>
        <li><a href="http://webenlance.com">Blog</a></li>
        <li><a href="http://webenlance.com">Contact</a></li>
      </ul>
      <!--foote_bottom_ul_amrc ends here-->
      <p class="text-center">Copyright @2021 Analisis y Diseño de Sisetemas</p>
  </footer>

  <script src="{{ asset('js/header.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    @yield('scripts')
</body>

</html>