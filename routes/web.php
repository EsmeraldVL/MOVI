<?php

use App\Models\Libreria\Book;
use App\Http\Controllers\admin\DiscountController;
use App\Http\Controllers\library\BooksController;
use App\Http\Controllers\EditUserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\StoriesController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

------------>php artisan cache:clear
------------>composer clearcache
*/

Route::get('/', function () {

    $books= Book::latest()->take(4)->get();
    return view('home') ->with('libros', $books);
});

Route::get('prueba', function () {
    return view('registro');
});

//Route::get('admin/personas','admin/discountController@index');

Route::get('users', function () {
    return "url users";
});



Route::group(['prefix' => 'administracion'], function() {
    Route::resource('Users', EditUserController::class);
    Route::resource('Discounts', DiscountController::class);
});

Route::group(['prefix' => 'library'], function() {
    Route::resource('Libros', BooksController::class);
    Route::resource('Historias', StoriesController::class);
    Route::post('pagar',  [App\Http\Controllers\PaymentController::class, 'create'])->name('pagos');
    Route::post('registroPago',  [App\Http\Controllers\PaymentController::class, 'save']);
});
/* 
Habilitar mod_rewrite en el servidor Apache: sudo a2enmod rewrite.
Edite /etc/apache2/apache2.conf , cambiando la directiva "AllowOverride" para el directorio / var / www (que es la raíz de mi documento principal):AllowOverride All */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
