<?php

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

// Vou deletar essa bagaça em breve 🙈
Route::get('/', function () {
    return view('welcome');
});

// Rotas automáticas de autenticação 
Auth::routes();

// Agrupar rotas para usuários autenticados
Route::middleware(['auth'])->group(function () {

    // Teste Privado -> Remover
    Route::get('/privado', function () {
        return 'Esta página é PRIVADA';
    });
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/publico', function () {
    return 'Esta página é PÚBLICA';
})->name('rotapublica');
