
@section('name')
<title>Registro</title>
@endsection

@section('estilos')
<link href="{{ asset('css/registroStyle.scss') }}" rel="stylesheet">
@endsection    

@extends('admin.template.header')

@section('content')
  <section id="inicio" style="background-image: url('{{ asset('imagenes/fondo4.jpg') }}')">
    <div class="inicio-container" style="text-align: center" >
        <h1 style="color:white; font-size: 5rem;" class="animate__animated animate__backInLeft animate__delay-2s">Registrate</h1>
      <div class="main-container">
        <div class="tab-content" style="padding-bottom: 10%; padding-right: 10%; padding-left: 10%; ">
          <div id="signup" style="  margin:0px auto;  width: 100%">
             {!! Form::open(['route'=> 'users.store', 'method'=>'POST']) !!}
                <div id="login-box">
                  <div class="left" style="">
                    <input type="text" name="nombres" placeholder="Nombres *" required />
                    <input type="text" name="apellidos" placeholder="Apellidos *" required />
                    <input type="text" name="usuario" placeholder="Nombre de Usuario *" required />
                    <input type="text" name="email" placeholder="E-mail *" required />
                    <div class="input-group" style="width: 200px">
                      <input type="password" id="password" name="password" placeholder="Escribe un Password" class="form-control" required />
    
                      <div style="width: 20%; height: 80%;">
                        <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                      </div>
                    </div>
                    <div style="width: 200px;">
                      Fecha de Nacimiento
                      <input type="date" name="fechaNacimiento" id="fechaFin" class="form-control" style="100%" >
                      <input type="submit" name="signup_submit" value="Registrarme" required />
                    </div>
                    
                  </div>

                  <div class="right d-none d-sm-none d-md-block" id="der">
                    <span class="loginwith">Descubre nuevas <br />Aventuras
                      <bt /> Con tu imaginacion</span>
                  </div>
              </div>
            
            {!! Form::close() !!}          

          </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('scripts')
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
  </script>
@endsection


