<?php

use App\Http\Controllers\admin\DiscountController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
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
    return view('home');
});

//Route::get('admin/personas','admin/discountController@index');

Route::get('users', function () {
    return "url users";
});


Route::get('usuario/{idUser}/crearcontacto', function ($idUser) {
    return Redirect::to('usuario/1/listarcontactos');
});

Route::get('admin/discount',[DiscountController::class, 'index']);


/* Habilitar mod_rewrite en el servidor Apache: sudo a2enmod rewrite.
Edite /etc/apache2/apache2.conf , cambiando la directiva "AllowOverride" para el directorio / var / www (que es la raíz de mi documento principal):AllowOverride All */
