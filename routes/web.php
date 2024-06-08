<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LogroController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\LeccionController;
use App\Http\Controllers\NivelController;
use App\Http\Controllers\ProgresoController;


Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/secciones', function () {
    return view('secciones');
})->name('secciones');

Route::get('/usuario', function () {
    return view('insertar.usuario');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('dashboard', function () {
    return 'Has iniciado sesión!';
})->middleware('auth');


Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);


//Secciones
Route::get('usuario', function () {
    return view('Ingreso.usuario');
})->name('usuario.index');

Route::get('actividades', function () {
    return view('Ingreso.actividades');
})->name('actividades.index');

Route::get('lecciones', function () {
    return view('Ingreso.lecciones');
})->name('lecciones.index');

Route::get('logros', function () {
    return view('Ingreso.logros');
})->name('logros.index');

Route::get('niveles', function () {
    return view('Ingreso.niveles');
})->name('niveles.index');

Route::get('progreso', function () {
    return view('Ingreso.progreso');
})->name('progreso.index');

Route::get('secciones', function () {
    return view('secciones');
})->name('secciones.index');

Route::resource('usuarios', UsuarioController::class);
Route::resource('logros', LogroController::class);
Route::resource('actividades', ActividadController::class);
Route::resource('lecciones', LeccionController::class);
Route::resource('niveles', NivelController::class);
Route::resource('progreso', ProgresoController::class);

//Vistas

Route::get('usuarios/crear', [UsuarioController::class, 'create'])->name('usuario.create');
Route::get('logros/crear', [LogroController::class, 'create'])->name('logros.create');
Route::get('lecciones/crear', [LeccionController::class, 'create'])->name('lecciones.create');
Route::get('niveles/crear', [NivelController::class, 'create'])->name('niveles.create');
Route::get('progreso/crear', [ProgresoController::class, 'create'])->name('progreso.create');

Route::resource('actividades', ActividadController::class);
Route::get('usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::post('usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');


Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');


Route::get('/progreso/create', [ProgresoController::class, 'create'])->name('progreso.create');
Route::post('/progreso', [ProgresoController::class, 'store'])->name('progreso.store');

Route::get('/ingreso/progreso', [ProgresoController::class, 'create'])->name('progreso.create');
Route::post('/ingreso/progreso', [ProgresoController::class, 'store'])->name('progreso.store');



//Vistas de Vistas

Route::get('/materias/actividades', function () {
    return view('Materias.actividadesVis');
})->name('materias.actividades');