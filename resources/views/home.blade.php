
@section('name')
<title>Document</title>
@endsection
@section('estilos')
<link href="{{ asset('css/homeStyle.scss') }}" rel="stylesheet">
@endsection   

@if(Session::has('message'))
   <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" arial-label="Close"><span aria-      hidden="true">x</span></button>
         {{ Session::get('message') }}	
    </div>
@endif

@extends('admin.template.header')

@section('content')
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
-->


<div class="container py-5">
	<h2 class="h3 font-weight-bold">MOVI </h2>
	<div class="row">
		<div class="col-lg-10 mb-4">
			<p class="font-italic text-muted">Venta de libros dedicada a dar a conocer nuevos Escritores, tener los mejores libros a excelentes precios</p>
			<p class="font-italic text-muted">Movi  venta online de libros con el mayor catálogo de libros. Le ayudamos a encontrar el libro que busca.</p>
		</div>
		<div class="col-lg-8">
			<p class="font-italic text-muted">Benvenido a  <strong class="font-weight-bold text-dark">MOVI<strong class="font-weight-bold text-dark"> LIBRERIA</strong> </p>
		</div>
	</div>
</div>
<div class="container py-5">
	<h2 class="h3 font-weight-bold">Some demo content</h2>
	<div class="row">
		<div class="col-lg-10 mb-4">
			<p class="font-italic text-muted">Con la incorporación de las TIC en la educación se han creado bibliotecas virtuales universitarias que permiten su uso desde aulas virtuales en una educación en línea. Estas tienen como característica que se crean en las aulas virtuales para el alumnado concreto que a ellas accede, como complemento a la asignatura que se imparta. Y por lo tanto, se incorpora en estas bibliotecas virtuales la información y documentos que el alumnado necesita durante el curso, como son libros digitales, artículos, ponencias, legislación, glosarios, etc.</p>
			<p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
		</div>
	</div>
</div>


<section class="fh5co-books">
	<div class="site-container" style="padding-bottom: 20px">
		<h2 class="universal-h2 universal-h2-bckg" style="background-image: url('imagenes/double-line.svg');background-repeat: no-repeat;
		background-position: center bottom;">Lo Nuevo en Movi</h2>
		<div class="books" style=" padding-left:5%;padding-right:5%; margin-bottom: 0%" >
			<?php $i=0?>
			@if ($libros !=null)
				@foreach ($libros as $libro)
				<?php $i=$i+1?>
				<div class="single-book">
					<a href="{{ asset('library/Libros/'.$libro->id) }}" class="single-book__img">
						<img src="{{ asset('movi/imagesBooks/'.$libro->image) }}" alt="single book and cd" style="height: 18rem; width:10rem;">
						<div class="single-book_download">
							<button type="button" class="btn btn-outline-secondary" style="margin-top: 60%">Ver Mas</button>
						</div>
					</a>
					<h4 class="single-book__title">Nombre: <strong>{{$libro->bookName}}</strong></h4>
					<span class="single-book_title">Autor:{{$libro->author}}</span><br>
					<span class="single-book__price" style="color: #054638;">Q.{{$libro->price}}</span>
				</div>
				@endforeach
			@endif
			
		</div>     
		<div class="books-brand-button">
			<a href="{{ url('/library/Libros') }}" class="btn btn-info">Ver Mas</a>
		</div>
	</div>
</section>
@endsection
