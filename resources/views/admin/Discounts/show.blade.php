@section('name')
    <title>Libros</title>
@endsection

@section('estilos')
    <link href="{{ asset('css/Libreria/librosStyle.scss') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection    

@extends('admin.template.header')
   
@section('content')
<section >
            <div class="main-container">
                <div class="first-container share">
                    <h1>
                        CATEGORIA EN DESCUENTO:
                    </h1>
                </div>
            </div>       
<div id="content" class="site-content" style="padding-top: 0">
    <div id="primary" class="content-area">                   
        <section class="fh5co-books" style="padding-left: 2rem;padding-right: 4px;">
            <div class="site-container" style="padding-bottom: 20px;padding-left: 10%; padding-right: 10%;">
                <div>
                    <div class="searchBox">
                    <input class="searchInput"type="text" name="" placeholder="Buscar Libro">
                    <button class="searchButton" href="#">
                        <i class="material-icons">
                            search
                        </i>
                    </button>
                    </div>
                </div>
            </div>
                
                <div class="books" style="padding-top: 8rem; padding-left:5%;padding-right:5%" >
                    <?php $i=0?>
                    @foreach ($libros as $libro)
                    <?php $i=$i+1?>
                    <div class="single-book">
                        <a href="{{ asset('library/Libros/'.$libro->id) }}" class="single-book__img">
                            <img src="{{ asset('movi/imagesBooks/'.$libro->image) }}" alt="single book and cd" style="height: 20rem; width:13rem;">
                            <div class="single-book_download">
                                <button type="button" class="btn btn-outline-secondary" style="margin-top: 60%">Ver Mas</button>
                            </div>
                        </a>
                        <h4 class="single-book__title">Nombre: <strong>{{$libro->bookName}}</strong></h4>
                        <span class="single-book_title">Autor:{{$libro->author}}</span><br>
                        <span class="single-book__price" style="color: #054638;">Q.{{$libro->price}}</span>
                    </div>

                    @if ($i==4)
                        </div> 
                        <div class="books" style="padding-left: 10%;padding-right: 10%">
                    @endif
                    @endforeach
                    
                </div>     
            </div>  
        </section>
</section>
@endsection   

@section('scripts')
    <script src="{{ asset('js/Libreria/libros.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('input.star').rating();
        });
    </script>
@endsection 
