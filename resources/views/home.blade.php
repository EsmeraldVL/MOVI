
@section('name')
<title>Document</title>
@endsection
@section('estilos')
<link href="{{ asset('css/homeStyle.scss') }}" rel="stylesheet">
@endsection    

    @extends('header')

    @section('content')
    <div class="container py-5">
        <h2 class="h3 font-weight-bold">Some demo content</h2>
        <div class="row">
            <div class="col-lg-10 mb-4">
                <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
            </div>
            <div class="col-lg-8">
                <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur <strong class="font-weight-bold text-dark">adipisicing elit, sed </strong>do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in <strong class="font-weight-bold text-dark">reprehenderit in voluptate </strong>velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <h2 class="h3 font-weight-bold">Some demo content</h2>
        <div class="row">
            <div class="col-lg-10 mb-4">
                <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
            </div>
            <div class="col-lg-8">
                <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur <strong class="font-weight-bold text-dark">adipisicing elit, sed </strong>do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in <strong class="font-weight-bold text-dark">reprehenderit in voluptate </strong>velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>

    
	<section class="fh5co-books">
		<div class="site-container" style="padding-bottom: 20px">
			<h2 class="universal-h2 universal-h2-bckg" style="background-image: url('imagenes/double-line.svg');background-repeat: no-repeat;
            background-position: center bottom;">Lo Nuevo en Movi</h2>
			<div class="books">
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="imagenes/prueba.jpeg" alt="single book and cd">
						<div class="single-book_download">
                            <button type="button" class="btn btn-outline-secondary" style="margin-top: 60%">Ver Mas</button>
						</div>
					</a>
                    <h4 class="single-book__title">Olivani</h4>
                </br>
					<span class="single-book__price">Q15.00</span>
					<!-- star rating -->
					<div class="rating">
						<span>&#9734;</span>
						<span>&#9734;</span>
						<span>&#9734;</span>
						<span>&#9734;</span>
						<span>&#9734;</span>
					</div>
					<!-- star rating end -->
				</div>
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="imagenes/prueba.jpeg" alt="single book and cd">
						<div class="single-book_download">
							<img src="./images/download.svg" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Molleon’s Life</h4>
					<span class="single-book__price">$22.00</span>
					<!-- star rating -->
					<div class="rating">
						<span>&#9734;</span>
						<span>&#9734;</span>
						<span>&#9734;</span>
						<span>&#9734;</span>
						<span>&#9734;</span>
					</div>
					<!-- star rating end -->
				</div>
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="imagenes/prueba.jpeg" alt="single book and cd">
						<div class="single-book_download">
							<img src="./images/download.svg" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Love is Love</h4>
					<span class="single-book__price">$25.00</span>
				</div>
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="imagenes/prueba.jpeg" alt="single book and cd">
						<div class="single-book_download">
							<img src="./images/download.svg" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Give Me Also</h4>
					<span class="single-book__price">$30.00</span>
				</div>
			</div>
			<div class="books-brand-button">
				<a href="#" class="brand-button">View more</a>
			</div>
		</div>
	</section>
	<!-- Books and CD end -->
    @endsection
    