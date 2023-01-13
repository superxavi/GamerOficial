<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\auth;
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
    return view('Welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dash.index');
    })->name('dash');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route Hooks - Do not delete//
	Route::view('inscripcionins', 'livewire.inscripcionins.index')->middleware('auth');
	Route::view('inscripciongrs', 'livewire.inscripciongrs.index')->middleware('auth');
	Route::view('partidains', 'livewire.partidains.index')->middleware('auth');
	Route::view('partidagrs', 'livewire.partidagrs.index')->middleware('auth');
	Route::view('jugadores', 'livewire.jugadores.index')->middleware('auth');
	Route::view('equipos', 'livewire.equipos.index')->middleware('auth');
	Route::view('horarios', 'livewire.horarios.index')->middleware('auth');
	Route::view('aulas', 'livewire.aulas.index')->middleware('auth');
	Route::view('videojuegos', 'livewire.videojuegos.index')->middleware('auth');
	Route::view('categorias', 'livewire.categorias.index')->middleware('auth');
//Reportes
    Route::get('/jugadores-pdf', [\App\Http\Livewire\Jugadores::class, 'jugadoresPDF']);
	Route::get('/horarios-pdf', [\App\Http\Livewire\Horarios::class, 'horariosPDF']);
	Route::get('/inscripcionins-pdf', [\App\Http\Livewire\Inscripcionins::class, 'inscripcioninPDF']);
	Route::get('/inscripciongrs-pdf', [\App\Http\Livewire\Inscripciongrs::class, 'inscripciongrPDF']);
	Route::get('/partidagrs-pdf', [\App\Http\Livewire\Partidagrs::class, 'partidagrPDF']);
