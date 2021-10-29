@section('name')
<title>Registro</title>
@endsection

@section('estilos')
<link href="{{ asset('css/registroStyle.scss') }}" rel="stylesheet">
@endsection    

@extends('admin.template.header')

@section('content')


<section id="inicio" style="background-image: url('imagenes/fondo1.jpeg')">
    <ddiv class="inicio-container" style="text-align: center" >
        <h1 style="color:white; font-size: 5rem;" class="animate__animated animate__backInLeft animate__delay-2s">Registrate</h1>
        <div class="main-container">
            <div class="tab-content" style="padding-bottom: 10%; padding-right: 10%; padding-left: 10%; ">
                <div id="signup" style="  margin:0px auto;  width: 100%">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div id="login-box">
                            <div class="left">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nombres *" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    
                                
                                <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="surname" placeholder="Apellidos *"  required autocomplete="name" autofocus>
                                @error('apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div style="20rem">    
                                <input id="correo" type="email" style="margin-bottom: 0.5rem" style="width: 100%;" class=" form-control @error('email') is-invalid @enderror" name="email" placeholder="E-mail *" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group"  style="width: 200px; padding-top:0.5rem;">
                                    <input type="password" id="password" name="password" placeholder="Password *" class="form-control @error('password') is-invalid @enderror"   required >
                                        <div style="width: 20%; height: 80%;">
                                            <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="input-group" style="width: 200px;padding-top:0.5rem;">
                                    <input id="password" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Password *"  required>
                                    <div style="width: 20%; height: 80%;">
                                        <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                                    </div>
                                </div>

                                
                                <div style="width: 200px;">
                                    Fecha de Nacimiento
                                    <input type="date" name="birth_date" id="fechaFin" class="form-control" style="100%" >
                                </div>
                                <div class="form-check" style="">
                                    <input name="isAdmin" type="checkbox" class="form-check-input" id="exampleCheck1" value="0"checked  hidden>
                                    <label class="form-check-label" for="exampleCheck1">Es Admin</label>
                                </div>
                                <div class="form-check">
                                    <input name="isActive" type="checkbox" class="form-check-input" id="exampleCheck1" hidden>
                                    <label class="form-check-label" for="exampleCheck1">Es Admin</label>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                                <span class="loginwith">Descubre nuevas <br />Aventuras
                                <bt /> Con tu imaginacion</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--  Error handle -->
    @if($errors->any())
    <div class="row collapse">
        <ul class="alert-box warning radius">
            @foreach($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
    </ul>
</div>
@endif
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

