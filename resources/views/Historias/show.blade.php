
@section('name')
<title>Historia </title>
@endsection

@section('estilos')
<link href="{{ asset('css/.scss') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection    

@extends('admin.template.header')

@section('content')
<section >
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 pt-5 mb-5 align-self-center">
                    <div class="promo pe-md-3 pe-lg-5">
                        <h1 class="headline mb-3">
                            Titulo:         <strong>{{$history->title}}</strong> 
                        </h1><!--//headline-->
                        <h3>
                            Autor:          <strong>{{$escritor->name}}  {{$escritor->surname}}</strong>
                        </h3>
                        <h4>
                            Categoria:      <strong>{{$category->type}}</strong>
                        </h4>
                        
                        <div class="cta-holder row gx-md-3 gy-3 gy-md-0">
                            <form method="post"  action="{{ asset('library/pagar') }}" class="col-auto">
                                @csrf
                                <div class="col-12 col-md-auto">
                                    <input name="Libro" value="{{$history->id}}" hidden/>
                                    <input name="isLibro" value="true" hidden/>
                                    <input name="category" value="{{$category->id}}" hidden/>
                                    <button type="s" class="btn btn-primary w-100">Comprar Ahora</button>
                                </div>
                            </form>
                            <form  method="post"  action="{{ asset('library/pagar') }}" class="col-auto">
                                <div class="col-12 col-md-auto">
                                    <button type="s" class="btn btn-secondary scrollto w-100 carritoA"type="submmit">Agregar al carrito</button>
                                </div>
                            </form>
                        </div><!--//cta-holder-->
                        
                        <div class="hero-quotes mt-5">
                            <div id="quotes-carousel" class="quotes-carousel carousel slide carousel-fade mb-5" data-bs-ride="carousel" data-bs-interval="8000">
                                <ol class="carousel-indicators">
                                    <li data-bs-target="#quotes-carousel" data-bs-slide-to="0" class="active"></li>
                                    <li data-bs-target="#quotes-carousel" data-bs-slide-to="1"></li>
                                    <li data-bs-target="#quotes-carousel" data-bs-slide-to="2"></li>
                                </ol>
                              
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <blockquote class="quote p-4 theme-bg-light">
                                            "Excellent Book! Add your book reviews here consectetur adipiscing elit. Aliquam euismod nunc porta urna facilisis tempor. Praesent mauris neque, viverra quis erat vitae, auctor imperdiet nisi."     
                                        </blockquote><!--//item-->
                                        <div class="source row gx-md-3 gy-3 gy-md-0 align-items-center">
                                            <div class="col-12 col-md-auto text-center text-md-start">
                                                <img class="source-profile" src="assets/images/profiles/profile-1.png" alt="image" >
                                            </div><!--//col-->
                                            <div class="col source-info text-center text-md-start">
                                                <div class="source-name">James Doe</div>
                                                <div class="soure-title">Co-Founder, Startup Week</div>
                                            </div><!--//col-->
                                        </div><!--//source-->
                                    </div><!--//carousel-item-->
                                    <div class="carousel-item">
                                        <blockquote class="quote p-4 theme-bg-light">
                                            "Highly recommended consectetur adipiscing elit. Proin et auctor dolor, sed venenatis massa. Vestibulum ullamcorper lobortis nisi non placerat praesent mauris neque"     
                                        </blockquote><!--//item-->
                                        <div class="source row gx-md-3 gy-3 gy-md-0 align-items-center">
                                            <div class="col-12 col-md-auto text-center text-md-start">
                                                <img class="source-profile" src="assets/images/profiles/profile-2.png" alt="image" >
                                            </div><!--//col-->
                                            <div class="col source-info text-center text-md-start">
                                                <div class="source-name">Jean Doe</div>
                                                <div class="soure-title">Co-Founder, Startup Week</div>
                                            </div><!--//col-->
                                        </div><!--//source-->
                                    </div><!--//carousel-item-->
                                    <div class="carousel-item">
                                        <blockquote class="quote p-4 theme-bg-light">
                                            "Awesome! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam euismod nunc porta urna facilisis tempor. Praesent mauris neque, viverra quis erat vitae."     
                                        </blockquote><!--//item-->
                                        <div class="source row gx-md-3 gy-3 gy-md-0 align-items-center">
                                            <div class="col-12 col-md-auto text-center text-md-start">
                                                <img class="source-profile" src="{{ asset('imagenes/template.png') }}" alt="image" >
                                            </div><!--//col-->
                                            <div class="col source-info text-center text-md-start">
                                                <div class="source-name">Andy Doe</div>
                                                <div class="soure-title">Frontend Developer, Company Lorem</div>
                                            </div><!--//col-->
                                        </div><!--//source-->
                                    </div><!--//carousel-item-->
                                </div><!--//carousel-inner-->
                            </div><!--//quotes-carousel-->
                            
                        </div><!--//hero-quotes-->
                    </div><!--//promo-->
                </div><!--col-->
                <div class="col-12 col-md-5 mb-5" style="padding-top: 10%">
                    <div class="book-cover-holder" >
                        <img class="img-fluid book-cover" src="{{ asset('movi/imagesHistorys/'.$history->cover_image) }}" alt="book cover" >
                        <div class="book-badge d-inline-block shadow">
                            Precio:<br>Q.{{$history->price}}
                        </div>
                    </div><!--//book-cover-holder-->
                    <div class="text-center" style="padding-top: 5%">
                        <a class="theme-link scrollto" href="{{ url('/library/Libros') }}">Ver Mas Libros
                        </a>
                    </div>
                    

                    <form action="{{ asset('/library/Libros') }}" method="post" style="padding: 10%">
                        <div style="align-self: center" >
                            <input value= '1' name='idLibro' hidden />
                            <input id="rating0" type="radio" value="0" name="rating" checked />
                        
                            <label class=star for=rating1>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                                    <path stroke="#605a00" stroke-width="15" d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                                    </svg>
                            </label>
                        
                            <input id=rating1 type=radio value=1 name=rating />
                                <label class=star for=rating2>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                                        <path stroke="#605a00" stroke-width="15"d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                                    </svg>
                                </label>
                        
                            <input id=rating2 type=radio value=2 name=rating />
                                <label class=star for=rating3>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                                        <path stroke="#605a00" stroke-width="15" d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                                    </svg>
                                </label>
                        
                            <input id=rating3 type=radio value=3 name=rating />
                                <label class=star for=rating4>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                                        <path stroke="#605a00" stroke-width="15" d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                                    </svg>
                                </label>
                        
                            <input id=rating4 type=radio value=4 name=rating />
                                <label class=star for=rating5>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                                        <path stroke="#605a00" stroke-width="15" d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                                    </svg>
                                </label>
                            <input id=rating5 type=radio value=5 name=rating />
                                <button type="submit" name="submitRatingStar" class="btn btn-primary btn-sm">Enviar</button><?php
                                    if (isset($_POST['submitRatingStar'])) {
                                        //procesar el rating
                                        echo '<div class="alert alert-success">Rating recibido: <strong>'.$_POST['rate'].'</strong>.</div>';
                                    }
                                ?>
                        </div>
                    </form>
                    <label>Valoracion de Preferencia:</label><br>
                    <div class="progress" style="color: black;">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" >89%</div>
                      </div>
                </div><!--col-->
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//hero-section-->
    
</section>
@endsection

@section('scripts')
    <script src="{{ asset('js/.js') }}"></script>
@endsection
