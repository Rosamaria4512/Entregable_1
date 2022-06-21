<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LocalComercialController;
use App\Http\Controllers\PresentacionProductoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TipoIdentificacionComercialController;
use App\Http\Controllers\UnidadMedidaController;
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
*/

Route::get('/', function () {
    return view('template.template');
});

Route::resource('UnidadMedida',UnidadMedidaController::class);
Route::resource('PresentacionProducto',PresentacionProductoController::class);
Route::resource('LocalComercial',LocalComercialController::class);
Route::resource('Categoria',CategoriaController::class);
Route::resource('Producto', ProductoController::class);
Route::resource('IdentificacionComercial',TipoIdentificacionComercialController::class);



