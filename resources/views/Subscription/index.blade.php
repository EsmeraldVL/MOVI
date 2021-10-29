
@section('name')
<title>Subscripcion</title>
@endsection
@section('estilos')
<link href="{{ asset('css/Subscription/SubscriptionStyle.scss') }}" rel="stylesheet">
@endsection   

@extends('admin.template.header')
   

@section('content')
@if(Session::has('message'))
<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Mensaje</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p> {{session()->get('message')}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endif
<div id="container">
    <div id="pricecontainer">
        <p id="txt1">Afiliate a movi</p>
    </br>
        <div id="part1" class="parts">
            <div class="card-image">
                <img class="img-fluid" src="{{ asset('imagenes/basicoS.jpg') }}" alt="alternative">
            </div>
            <div class="card-body">
                <h3 class="card-title">{{$basica->kind}}</h3>
                <p>{{$basica->detail}}</p>
                <ul class="list-unstyled li-space-lg">
                    <li class="media">
                        <i class="fas fa-square"></i>
                        <div class="media-body">Suscripcion Gratuita</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-square"></i>
                        <div class="media-body">Libros Gratuitos</div>
                    </li>
                </ul>
                <p class="price">Precio Q.<span>{{$basica->price}}</span> al mes</p>
            </div>
            <form method="POST" action="{{ asset('/Pagos/detallePago') }}">
                @csrf
                <input name="tipoId" value="{{$basica->kind}}" hidden/>
                <input name="tipo" value="{{$basica->id}}" hidden/>
                <input name="precio" value="{{$basica->price}}"hidden/>
                <button class="buy">Comprar <i class="fas fa-arrow-circle-right fa-xs"></i></button>
            </form>
        </div>
        <div id="part2" class="parts">
            <div class="card-image">
                <img class="img-fluid" src="{{ asset('imagenes/premium.png') }}" alt="alternative">
            </div>
            <div class="card-body">
                <h3 class="card-title">{{$clasica->kind}}</h3>
                <p>{{$clasica->detail}}</p>
                <ul class="list-unstyled li-space-lg">
                    <li class="media">
                        <i class="fas fa-square"></i>
                        <div class="media-body">Acceso a todos los libros</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-square"></i>
                        <div class="media-body">Libros Gratuitos</div>
                    </li>
                </ul>
                <p class="price">Precio: Q.<span>{{$clasica->price}}</span> al mes</p>
            </div>
            <form method="POST" action="{{ asset('/Pagos/detallePago') }}">
                @csrf
                <input name="tipoId" value="{{$clasica->kind}}" hidden/>
                <input name="tipo" value="{{$clasica->id}}" hidden/>
                <input name="precio" value="{{$clasica->price}}"hidden/>
                <button class="buy">Comprar <i class="fas fa-arrow-circle-right fa-xs"></i></button>
            </form>
        </div>
        <div id="part3" class="parts">
            <div class="card-image">
                <img class="img-fluid" src="{{ asset('imagenes/plus.png') }}" alt="alternative"height="80" >
            </div>
            
            <div class="card-body">
                <h3 class="card-title">{{$premium->kind}}</h3>
                <p>{{$premium->detail}}</p>
                <ul class="list-unstyled li-space-lg">
                    <li class="media">
                        <i class="fas fa-square"></i>
                        <div class="media-body">Date a conocer como Escritor</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-square"></i>
                        <div class="media-body">Miles de lectores esperando por ti</div>
                    </li>
                </ul>
                <p class="price">Precio: Q.<span>{{$premium->price}}</span> al mes</p>
            </div>
            <form method="POST" action="{{ asset('/Pagos/detallePago') }}">
                @csrf
                <input name="tipoId" value="{{$premium->kind}}" hidden/>
                <input name="tipo" value="{{$premium->id}}" hidden/>
                <input name="precio" value="{{$premium->price}}"hidden/>
                <button type="submit" class="buy">Comprar <i class="fas fa-arrow-circle-right fa-xs"></i></button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('js/Subscription.js') }}"></script>
    <
@endsection 