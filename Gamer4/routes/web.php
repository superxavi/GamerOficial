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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Route Hooks - Do not delete//
	Route::view('videojuegos', 'livewire.videojuegos.index')->middleware('auth');
	Route::view('partida_indiv', 'livewire.partida_indiv.index')->middleware('auth');
	Route::view('partida_grupal', 'livewire.partida_grupal.index')->middleware('auth');
	Route::view('jugadores', 'livewire.jugadores.index')->middleware('auth');
	Route::view('insc_individual', 'livewire.insc_individual.index')->middleware('auth');
	Route::view('insc_grupo', 'livewire.insc_grupo.index')->middleware('auth');
	Route::view('horarios', 'livewire.horarios.index')->middleware('auth');
	Route::view('evento', 'livewire.evento.index')->middleware('auth');
	Route::view('equipo', 'livewire.equipo.index')->middleware('auth');
	Route::view('categoria_juego', 'livewire.categoria_juego.index')->middleware('auth');
	Route::view('aulas', 'livewire.aulas.index')->middleware('auth');