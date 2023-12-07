<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::view('/login', 'auth.login')->name('login');
Route::view('/registrar', 'auth.register')->name('registrar');

Route::view('/perfil', 'profile.show-m1')->name('perfil');
Route::view('/perfil/pass', 'profile.show-m2')->name('pass');
Route::view('/perfil/aut-dos-fact', 'profile.show-m3')->name('aut-dos-fact');
Route::view('/perfil/sesiones', 'profile.show-m4')->name('sesiones');
Route::view('/perfil/eliminar-cuenta', 'profile.show-m5')->name('eliminar-cuenta');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash');
});

Route::resource('alumnos', 'App\Http\Controllers\AlumnoController');

Route::resource('profesores', 'App\Http\Controllers\TeacherController');

Route::resource('salones', 'App\Http\Controllers\ClassroomController');

Route::resource('asignaturas', 'App\Http\Controllers\SubjectController');