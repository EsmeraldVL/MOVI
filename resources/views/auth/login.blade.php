
@section('name')
<title>Inicio Sesion</title>
@endsection
@section('estilos')
<link href="{{ asset('css/inicioSesionStyle.scss') }}" rel="stylesheet">
@endsection   

@extends('admin.template.header')

@section('content')
<div style="background-color: #333; border-block-color:#333 ">
    <div id="divP" style=" text-align: center;">
        <div class="main-container" style="background-image: url('{{ asset('imagenes/fondo6.jpg') }}');">
            
            <form method="POST" action="{{ route('login') }}" class="formDiv" style="padding-left: 4rem;padding-right: 4rem;">
                @csrf

                <div class="form-group">
                    <h1 style="text-align: center;">Iniciar Sesion</h1>
                </div>

                <div class="form-group">
                    <label for="email" class="">{{ __('Correo de usuario') }}</label>
                        <div class="">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" required aria-describedby="emailHelp"autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                </div>

                <div class="form-group">
                    <label for="password" class="">{{ __('Contraseña') }}</label>
                    <div class="">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Recordarme') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group  ">
                    <div class="col-md-8 " >
                        <button type="submit" class="btn btn-primary" style="margin-left: 10rem">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}" style="margin-left: 6rem">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>             
            </form>     
        </div>
    </div>
</div>
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
