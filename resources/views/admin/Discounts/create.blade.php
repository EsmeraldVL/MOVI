
@section('name')
<title>Subir Historia</title>
@endsection

@section('estilos')
<link href="{{ asset('css/newOfferStyle.scss') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="{{ asset('vendors/ckeditor/ckeditor.js') }}"></script>
@endsection    

@extends('admin.template.header')

@section('content')
    <section>
        <div class="container mt-5 mb-5">
            <h1>Nuevo Descuento</h1>
            <div class="d-flex flex row g-0">
                <div class="col-md-6 mt-3">
                    <form method="POST" action="{{ asset('administracion/Discounts') }}" >
                        @csrf
                        <div class="card card1 p-3">
                            <p>El decuento sera aplicado a todos los libros que pertenezcan a la categoria que elijas:</p>
                            <label  class="">Categoria:</label>
                            <div class="form-group row" style="padding-left: 15%">
                                <div class="col-auto">
                                    <select class="form-control" id="exampleFormControlSelect1" name="category" style="width: 10rem; padding-left: 10%">        
                                    @foreach ($categorias as $categoria)
                                        <option  title="{{$categoria->detail}}" value="{{$categoria->id}} ">{{$categoria->type}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="">PORCENTAJE: </span>
                                </div>
                                <input name="porcentaje" type="number" class="form-control" value="1" min="1" max="100" required>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-6">Fecha de Inicio</label>
                                <div class="col-sm-10">
                                    <input id="colFormLabel" type="date" name="fechaInicio" id="fechaFin" class="form-control" style="100%" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-6">Fecha Final</label>
                                <div class="col-sm-10">
                                    <input id="colFormLabel" type="date" name="fechaFinal" id="fechaFin" class="form-control" style="100%" >
                                </div>
                            </div>

                            <button type="submmit" class="btn btn-info">Aplicar Descuento</button>

                        </div>
                    </form>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="card card2 p-3">
                        <div class="image"> <img src="{{ asset('imagenes/LogoMovi.png') }}" width="100%"> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
@endsection