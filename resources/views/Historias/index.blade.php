@section('name')
    <title>Historias</title>
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
                        <span class="span" id="one">M</span>
                        <span class="span" >O</span>
                        <span class="span" >V</span> 
                        <span class="span" >I</span>
                        <span class="span"  id="one"></span>
                        <span class="span"  >H</span>
                        <span class="span" >i</span>
                        <span class="span" >s</span>
                        <span class="span" >t</span>
                        <span class="span" >o</span>
                        <span class="span" >r</span>
                        <span class="span" >i</span>
                        <span class="span" >a</span>
                        <span class="span" >s</span>
                    </h1>
                </div>
            </div>       
<div id="content" class="site-content" style="padding-top: 0">
    <div id="primary" class="content-area">                   
        <section class="fh5co-books" style="padding-left: 2rem;padding-right: 4px;">
            <div class="site-container" style="padding-bottom: 20px;padding-left: 10%; padding-right: 10%;">
                <div>
                    <h2>Categorias:</h2>
                    <div class="searchBox">
                    <input class="searchInput"type="text" name="" placeholder="Buscar Libro">
                    <button class="searchButton" href="#">
                        <i class="material-icons">
                            search
                        </i>
                    </button>
                    </div>
                    </div>
                    <div class="searchBox2">
                        <select class="searchInput2" id="inlineFormCustomSelectPref" name="category">
                            @foreach ($categorias as $categoria)
                                <option  title="{{$categoria->detail}}" value="{{$categoria->id}} ">{{$categoria->type}}</option>
                            @endforeach
                        </select>
                        <button class="searchButton" href="#">
                            <i class="material-icons">
                                forward
                            </i>
                        </button>
                    </div>
                </div>
                
                <div class="books" style="padding-top: 8rem; padding-left:5%;padding-right:5%" >
                    <?php $i=0?>
                    @if ($historias ?? '')
                    @foreach ($historias as $historia)
                    <?php $i=$i+1?>
                    <div class="single-book">
                        <a href="{{ asset('library/Historias/'.$historia->id) }}" class="single-book__img">
                            <img src="{{ asset('movi/imagesHistorys/'.$historia->cover_image) }}" alt="single book and cd" style="height: 20rem; width:13rem;">
                            <div class="single-book_download">
                                <button type="button" class="btn btn-outline-secondary" style="margin-top: 60%">Ver Mas</button>
                            </div>
                        </a>
                        <h4 class="single-book__title">Nombre: <strong>{{$historia->title}}</strong></h4>
                        <span class="single-book_title">Autor:{{$historia->email}}</span><br>
                        <span class="single-book__price" style="color: #054638;">Q.{{$historia->price}}</span>
                    </div>

                    @if ($i==4)
                        </div> 
                        <div class="books" style="padding-left: 10%;padding-right: 10%">
                    @endif
                    @endforeach
                    @endif
                    
                    
                </div>   
                <nav >
                    @include('pagination.default', ['paginator' => $historias])
                </nav>   
            </div> 
        </br>
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
    <script>
        $('.pagination li').addClass('page-item');
        $('.pagination li a').addClass('page-link');
        $('.pagination span').addClass('page-link');
        $('#pag').addClass('pagination justify-content-center');
</script>
@endsection 
