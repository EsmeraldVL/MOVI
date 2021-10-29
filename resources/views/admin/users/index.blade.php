@section('name')
<title>Iniciar Sesion</title>
@endsection

@section('estilos')
<link href="{{ asset('css/inicioSesionStyle.scss') }}" rel="stylesheet">
@endsection    

@extends('admin.template.header')

@section('content')
<section id="inicio">
    <div class="inicio-container">
      <div class="main-container" style="background-image:  url('img/MaravillosoMundoMaya.jpg');">
        <form method="POST" action="./backend/inicioSesion.php">
          <div class="form-group">
            <h1 style="text-align: center;">Iniciar Sesion</h1>
          </div>
          <div class="form-group">
            <label for="InputUser">Usuario</label>
            <input type="text" name="user" class="form-control" id="InputUser" required aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="InputPass">Contraseña</label>
            <input type="password" name="password" class="form-control" required id="InputPass">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="checkPass">
            <label class="form-check-label" for="checkPass">Recordar contraseña</label>
          </div>
          <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
        </form>
      </div>
    </div>
  </section>
@endsection

@section('scripts')
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
@endsection