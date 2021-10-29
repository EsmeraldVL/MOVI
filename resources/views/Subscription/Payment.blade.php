@section('name')
    <title>Nuevo Pago</title>
@endsection

@section('estilos')
    <link href="{{ asset('css/Pago/pagoStyle.scss') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection    

@extends('admin.template.header')
   
@section('content')

<div class="container py-5">
    <!-- For demo purpose -->
    <div class="row mb-4">
        <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-6">Metodo de Pago Subscripcion {{$Subscription}}</h1>
            <h1 class="display-6">Total a Pagar Q.{{$value}}</h1>
        </div>
    </div> <!-- End -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs -->
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                            <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Tarjeta de Credito </a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fab fa-maxcdn mr-2"></i> Movis </a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Comprar Movis </a> </li>
                        </ul>
                    </div> <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show active pt-3">
                            <form method="POST" action="{{ asset('/Pagos/PagarSusbscripcon') }}">
                                @csrf
                                <input name="tipoSubscripcion"  value="{{$idSubscription}}" hidden/>
                                <input name="monto"  value="{{$precioMovis}}" hidden/>
                                <input name="idTipo"  value="{{$idSubscription}}" hidden/>
                                
                                <input name="tipo"  value="1" hidden/>
                                <h4>Se le descontaran Q.{{$value}}</h4>
                                <div class="form-group"> <label for="username">
                                        <h6>Propietario Tarjeta</h6>
                                    </label> <input type="text" name="username" placeholder="Nombre del propietario" required class="form-control "> </div>
                                <div class="form-group"> <label for="cardNumber">
                                        <h6>Numero Tarjeta</h6>
                                    </label>
                                    <div class="input-group"> <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control " required>
                                        <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> 
                                            <label>
                                                <span class="hidden-xs">
                                                    <h6>Fecha de Expiracion</h6>
                                                </span>
                                            </label>
                                            <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> 
                                                <input type="number" placeholder="YY" name="" class="form-control" required> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                            </label> <input type="number" required class="form-control"> </div>
                                    </div>
                                </div>
                                <div class="card-footer"> <button type="submit" class="subscribe btn btn-primary btn-block shadow-sm"> Confirmar Pago</button>
                            </form>
                        </div>
                    </div> <!-- End -->
                    <!-- Paypal info -->
                    <div id="paypal" class="tab-pane fade pt-3">
                        <form method="POST" action="{{ asset('/Pagos/PagarSusbscripcon')}}">
                            @csrf
                            <h4 class="pb-2" style="background-color: rgb(200, 251, 255);">Movis Disponibles: {{$movisUser}}</h4>
                            <h4 class="pb-2">   Total a Pagar:       {{$precioMovis}} movis</h4>
                           <input name="tipo"  value="2" hidden/>
                           <input name="tipoSubscripcion"  value="{{$idSubscription}}" hidden/>
                           <input name="monto"  value="{{$precioMovis}}" hidden/>
                           
                            @if ($movisUser>=$precioMovis)
                                <p> <button type="submmit" class="btn btn-primary "><i class="fab fa-maxcdn mr-2"></i> Confirmar</button> </p>
                                <p class="text-muted"> Nota: Al hacer click en confirmar pago se estara haciendo efectivo el pago del producto descontandolo de tus movis disponibles. </p>

                            @else
                            <div class="alert alert-danger" role="alert">
                                No tienes suficientes movis para completar la compra
                                <button type="button"  class="btn btn-info"  href="/MOVI-Proyecto/public/home" >COMPRA MOVIS</button>
                                <p class="text-muted" > Si despues de hacer tu compra no aumentan tus movis recarga la pagina </p>

                            </div>
                            @endif
                        </form>    
                    </div> <!-- End -->
                    <!-- bank transfer info -->
                    <div id="net-banking" class="tab-pane fade pt-3">
                        <h1>Comprar Movis</h1>
                        <atarget="_blank"><span class="fab fa-question-circle"></span></a>
                        <button type="button"  class="btn btn-info"  href="/MOVI-Proyecto/public/home" >COMPRA MOVIS</button>
                        <p class="text-muted"> Si despues de hacer tu compra no aumentan tus movis recarga la pagina </p>

                     </div> <!-- End -->
                    <!-- End -->
                </div>
            </div>
        </div>
    </div>

@endsection   

@section('scripts')
    <script src="{{ asset('js/Libreria/libros.js') }}"></script>
    <script srt="{{asset('js/Pago/pago.js') }}"
@endsection 
