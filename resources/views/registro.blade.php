
@section('name')
<title>Registro</title>
@endsection

@section('estilos')
<link href="{{ asset('css/registroStyle.scss') }}" rel="stylesheet">
@endsection    

@extends('admin.template.header')

@section('content')


  <section id="inicio" style="background-image: url('imagenes/fondo1.jpeg')">
    <div class="inicio-container">
      <h1 style="color:white; font-size: 5rem;" class="animate__animated animate__backInLeft animate__delay-2s">Registrate</h1>

            <form method="POST" action="">
              
              <div id="login-box">
                <div class="left">
                  <input type="text" name="nombres" placeholder="Nombres *" required />
                  <input type="text" name="apellidos" placeholder="Apellidos *" required />
                  <input type="text" name="usuario" placeholder="Nombre de Usuario *" required />
                  <input type="text" name="email" placeholder="E-mail *" required />
                  <div class="input-group">
                    <input type="password" id="password" name="password" placeholder="Escribe un Password" class="form-control" required />
                    <span class="input-group-addon"></span>
                    <div style="width: 20%; height: 80%;">
                      <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                    </div>
                  </div>

                  Fecha de Nacimiento
                  <input type="date" name="fechaNacimiento" id="fechaFin" class="form-control" >
                  <input type="submit" name="signup_submit" value="Registrarme" required />
                </div>

                <div class="right">
                  <span class="loginwith">Descubre nuevas <br />Aventuras
                    <bt /> Con tu imaginacion</span>
                </div>
                <div class="or"></div>
              </div>
            </form>

          </div>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection
<script>
    

    function mostrarPassword(){
      var cambio = document.getElementById("password");
      if(cambio.type == "password"){
        cambio.type = "text";
        $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
      }else{
        cambio.type = "password";
        $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
      }
    } 
    
    $(document).ready(function () {
    //CheckBox mostrar contraseña
    $('#ShowPassword').click(function () {
      $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
    });
  });
    
  </script>