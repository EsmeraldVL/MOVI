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
            <h1 class="display-6">Compra Movis</h1>
            <h3 class="display-6">Suigue disfrutando de la experiencia</h3>
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
                        </ul>
                    </div> <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <?php $moviValueP ?>
                        @foreach ($movisValue as $movisV)
                            <?php $moviValueP=$movisV ?>
                            
                        @endforeach
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show active pt-3">
                            <form role="form" method="POST"  action="GuardarPago">
                                @csrf
                                <input name="tipo_pago"  value="1" hidden/>
                                <input name="cambio"  value="{{$moviValueP->moviValue}}" hidden/>
                                <label for="basic-url">Cuantos Movis deseas Adquirir? </label>
                                <input name="aPagar" id="aPagar" hidden/>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Movis</span>
                                    </div>
                                    <input name="movis" id="movis" type="number" class="form-control" aria-label="Amount (to the nearest dollar)" required>
                                    <div class="input-group-append">
                                      <span class="input-group-text">.00</span>
                                    </div>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" onclick="convertirMovisQuetzal({{$moviValueP->moviValue}})">Convertir a Quetzal</button>
                                    </div>
                                </div>
                                <p class="text-muted"> *Un quetzal equivale a {{$moviValueP->moviValue}} movis. </p>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon1">Total a pagar:</span>
                                    </div>
                                    <input id='quetzales' name="amount" class="form-control" placeholder="Quetzal" aria-label="Username" aria-describedby="basic-addon1" value="0"disabled>
                                  </div>
                                <div class="form-group"> <label for="username">
                                    <h6>Propietario Tarjeta</h6>
                                    </label> <input type="text" name="username" placeholder="Nombre del propietario" required class="form-control "> 
                                </div>
                                <div class="form-group"> 
                                    <label for="cardNumber">
                                        <h6>Numero Tarjeta</h6>
                                    </label>
                                    <div class="input-group"> 
                                        <input name="numTarjeta" type="text" name="cardNumber" placeholder="Valid card number" class="form-control " required>
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
                                                <input name="fechaExp" type="number" placeholder="YY" name="" class="form-control" required> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                            </label> <input type="number" required class="form-control"> </div>
                                    </div>
                                </div>
                                <div class="card-footer"> <button type="submmit"  class="subscribe btn btn-primary btn-block shadow-sm"> Confirmar Compra</button>
                            </form>
                        </div>
                    </div> <!-- End -->
               <div>
            </div>
        </div>
    </div>

@endsection   

@section('scripts')
    <script srt="{{asset('js/Pago/pago.js') }}"></script>
    <script>
        function convertirMovisQuetzal(cambio) {
            var movis = document.getElementById('movis');
            var total = movis.value / cambio;
            document.getElementById('quetzales').value = total.toFixed(2);
            document.getElementById('aPagar').value=total.toFixed(2);
        }
    </script>
@endsection 
