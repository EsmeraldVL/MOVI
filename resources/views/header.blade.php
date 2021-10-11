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
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>

<body style="background-color:#003a55;">
  <header style="background-color: #34373F ;">
    <div style="background: url('imagenes/fondo.jpg'); padding-bottom: 0px; margin-bottom:0px; height: 20rem"
      class="jumbotron text-white">
      <div style="height: 100%;">
        <div class="foo" style="padding-top: 0px;height: 50%; display: block; text-align: center; align-items: center;">
          <span class="letter" style="padding-top: 0px; margin-top: 0px;" data-letter="M">Movi</span>
        </div>
        </br>
        <h1 style=" padding-bottom: 0px ; display: block; text-align: center;"
          class="animate__animated animate__bounce animate__delay-2s">BIBLIOTECA</h1>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark" style="padding-top: 0px; margin-top: 0px">
      <a class="navbar-brand" href="#">MOVI</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <div class="wrapper">
    <div class="wrap">

      <section class="contentbox">
        @yield('content')
      </section>

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
          <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
          <!--headin5_amrc-->
          <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
            been the industrys standard dummy text ever since the 1500s</p>
          <p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
          <p><i class="fa fa-phone"></i> +91-9999878398 </p>
          <p><i class="fa fa fa-envelope"></i> info@example.com </p>


        </div>


        <div class=" col-sm-4 col-md  col-6 col">
          <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
          <!--headin5_amrc-->
          <ul class="footer_ul_amrc">
            <li><a href="http://webenlance.com">Image Rectoucing</a></li>
            <li><a href="http://webenlance.com">Clipping Path</a></li>
            <li><a href="http://webenlance.com">Hollow Man Montage</a></li>
            <li><a href="http://webenlance.com">Ebay & Amazon</a></li>
            <li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
            <li><a href="http://webenlance.com">Image Cropping</a></li>
          </ul>
          <!--footer_ul_amrc ends here-->
        </div>


        <div class=" col-sm-4 col-md  col-6 col">
          <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
          <!--headin5_amrc-->
          <ul class="footer_ul_amrc">
            <li><a href="http://webenlance.com">Remove Background</a></li>
            <li><a href="http://webenlance.com">Shadows & Mirror Reflection</a></li>
            <li><a href="http://webenlance.com">Logo Design</a></li>
            <li><a href="http://webenlance.com">Vectorization</a></li>
            <li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
            <li><a href="http://webenlance.com">Image Cropping</a></li>
          </ul>
          <!--footer_ul_amrc ends here-->
        </div>


        <div class=" col-sm-4 col-md  col-12 col">
          <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
          <!--headin5_amrc ends here-->

          <ul class="footer_ul2_amrc">
            <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
              <p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p>
            </li>
            <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
              <p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p>
            </li>
            <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
              <p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p>
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
        <li><a href="http://webenlance.com">Todos los Libtos</a></li>
        <li><a href="http://webenlance.com">Ofertas</a></li>
        <li><a href="http://webenlance.com">Contact</a></li>
      </ul>
      <!--foote_bottom_ul_amrc ends here-->
      <p class="text-center">Copyright @2021 Analisis y Diseño de Sisetemas</p>

      <div class="footer-social-link">
        <h3>Suiguenos en redes Sociales</h3>
        <ul>
          <li>
            <a href="#">

              <i class="fa fa-facebook"><img src="imagenes/social/facebook.png" alt="social icon"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-twitter"><img src="imagenes/social/gorjeo.png" alt="social icon"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-instagram"><img src="imagenes/social/instagram.png" alt="social icon"></i>
            </a>
          </li>
        </ul>
      </div>
      <!--social_footer_ul ends here-->
    </div>
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

</body>

</html>