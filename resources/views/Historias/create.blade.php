
@section('name')
<title>Subir Historia</title>
@endsection

@section('estilos')
<link href="{{ asset('css/subirLibroStyle.scss') }}" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="{{ asset('vendors/ckeditor/ckeditor.js') }}"></script>
@endsection    

@extends('admin.template.header')

@section('content')
<div class="container d-flex justify-content-center " style="padding-bottom: 5rem; padding-top: 5rem;">
    <form method="POST" action="{{ asset('library/Historias') }}" enctype="multipart/form-data" > 
        @csrf
        <div class=" row" style="align-self: center; width: 100%;margin-right: 0px;" >
        
            <!--left-column-->
            <div class="col-md-4"  >
                <!--image <img src="https://i.imgur.com/cEmbD0i.jpg"> </div>-->
                
                <div class="profile-img">
                    <img id='foto' src="{{ asset('imagenes/template.png') }}" alt="" style="padding-top: 1rem;"/>
                    <div class="file btn btn-lg btn-primary">
                        subir Foto
                        <input type="file" name="cover_image" id="file11" accept="image/png, .jpeg, .jpg, image/gif"/>
                    </div>
                    <a  class="u-border-5 u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-none u-radius-50 u-text-palette-4-base u-btn-2"><span class="u-icon u-text-white u-icon-1"></a>
                </div>
                <!--<div class="custom-file" style="margin-top: 10%">
                    <input type="file" class="custom-file-input" id="documento" name="PDF" style="color: rgb(0, 9, 139)" required>
                    <label class="custom-file-label" for="customFile" accept="application/pdf" >Subir Pdf</label>
                </div>-->
            </div>
            <!--right-column-->
            <div class="col-md-8">
                <div class="bb-login">
                    <div class="bb-form validate-form" style="display: inline-block;">   
                        <span class="bb-form-title p-b-26"> Nueva Historia: </span> <span class="bb-form-title p-b-48"> <i class="mdi mdi-symfony"></i> </span>
                        <div class="wrap-input100" > 
                            <input class="input100" type="text" name="title" placeholder="Nombre Historia"></span> 
                        </div>
                        <div class="wrap-input100 validate-input"> 
                            <input class="input100" type="number" name="price" placeholder="Precio">
                        </div>
                        <div class="wrap-input100 validate-input"> 
                            <textarea placeholder="synopsis" rows="4" cols="50" id="editor" name="text" class="ckeditor"></textarea>           
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Publicacion</label>
                            <div class="col-sm-10">
                                <input id="colFormLabel" type="date" name="dateP" id="fechaFin" class="form-control" style="100%" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Categoria</label>
                            <div class="col-auto ">
                                <select class="form-control" id="exampleFormControlSelect1" name="idCategory">        
                                @foreach ($categorias as $categoria)
                                    <option  title="{{$categoria->detail}}" value="{{$categoria->id}} ">{{$categoria->type}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="col-auto">
                                <imput type="button" class="btn  btn-dark mb-2">
                                    <i class="material-icons">
                                        add
                                    </i>
                                </imput>
                            </div>
                        </div>
                        <div class="form-group row" style="display: none">
                            <label  class="col-sm-2 col-form-label">Nueva Categoria</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword" placeholder="categoria">
                            </div>
                        </div>
                        <div class="login-container-form-btn">
                            <div class="bb-login-form-btn ">
                                <div class="bb-form-bgbtn"></div> <button type="s" class="bb-form-btn"> Publicar Historia </button>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        // Replace the <textarea> with a CKEditor
        CKEDITOR.replace('editor');
    </script>
    <script src="{{ asset('js/subirLibro.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        
@endsection