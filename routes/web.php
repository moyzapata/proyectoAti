<?php

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
    return view('cliente.create');
});

Auth::routes();



// Generando rutas para restriccion de clientes, acceso solo administrador 

// rutas para usuario dentro del sistema 
 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


// rutas para clientes 
Route::resource('clientes', 'App\Http\Controllers\ClienteController');
Route::post('/clientes/filtrar', [App\Http\Controllers\ClienteController::class, 'filtrar'])->name('filtrar');

// rutas para servicios
Route::resource('servicios', 'App\Http\Controllers\ServicioController');
Route::post('/servicios/filtrar', [App\Http\Controllers\ServicioController::class, 'filtrar'])->name('filtrar');

// rutas para pdf clientes
Route::get('clientes/{id}/pdfview', [
    'uses' => 'App\Http\Controllers\PDFController@PDFclientes',
    'as'   => 'clientes.pdfview'
    ]);
Route::get('servicios/{id}/pdfview', [
    'uses' => 'App\Http\Controllers\PDFController@PDFservicios',
    'as'   => 'servicios.pdfview'
    ]); 
Route::GET('/PDFclientes', [App\Http\Controllers\PDFController::class, 'PDFclientes'])->name('descargaPDF');
Route::GET('/PDF', [App\Http\Controllers\PDFController::class, 'PDF'])->name('descargaPDF');

Route::GET('/PDFservicios', [App\Http\Controllers\PDFController::class, 'PDFservicios'])->name('descargaPDF');
