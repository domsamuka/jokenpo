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
})->name('home');

// Rotas automáticas de autenticação 
Auth::routes();

// Agrupar rotas para usuários autenticados
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    // Teste Privado -> Remover
    Route::get('/privado', function () {
        return 'Esta página é PRIVADA';
    });
});



Route::get('/publico', function () {
    return 'Esta página é PÚBLICA';
});

// Agrupar rotas para Administradores
Route::middleware(['isadmin'])->group(function () {

    Route::get('/admin', function () {
        return 'Só Administradores podem ver 🙈';
    });
});

Route::get('/💣', function () {
    $msg = 'Já tá chegando o Braga Boys com essa dança que é uma 💣';
    if (auth()->user()) {
        $msg .= ' <strong>estou logado</strong> ';
        if (auth()->user()->isAdmin()) {
            $msg .= ' <strong>e mando na bagaça toda</strong> ';
        }
    }
    return $msg;
})->name('💥');
