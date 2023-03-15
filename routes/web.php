<?php

use App\Http\Controllers\AlumnoAtrasoController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SemestreController;
use App\Http\Controllers\UsuariosController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    

    Route::get('configuraciones/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
    Route::get('configuraciones/usuarios/nuevo-usuario', [UsuariosController::class, 'create'])->name('usuarios.create');
    Route::post('configuraciones/usuarios/guardar-usuario', [UsuariosController::class, 'store'])->name('usuarios.store');
    Route::get('configuraciones/usuarios/{id}/ver-usuario', [UsuariosController::class, 'show'])->name('usuarios.show');
    Route::get('configuraciones/usuarios/{id}/editar-usuario', [UsuariosController::class, 'edit'])->name('usuarios.edit');
    Route::put('configuraciones/usuarios/{id}/actualizar-usuario', [UsuariosController::class, 'update'])->name('usuarios.update');
    Route::post('configuraciones/usuarios/{id}/eliminar-usuario', [UsuariosController::class, 'destroy'])->name('usuarios.destroy');

    Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');
    Route::get('/alumnos/nuevo-alumno', [AlumnoController::class, 'create'])->name('alumnos.create');
    Route::post('/alumnos/guardar-alumno', [AlumnoController::class, 'store'])->name('alumnos.store');
    Route::get('/alumnos/{id}/ver-alumno', [AlumnoController::class, 'show'])->name('alumnos.show');
    Route::get('/alumnos/{id}/editar-alumno', [AlumnoController::class, 'edit'])->name('alumnos.edit');
    Route::put('/alumnos/{id}/actualizar-alumno', [AlumnoController::class, 'update'])->name('alumnos.update');
    Route::delete('/alumnos/{id}/eliminar-alumno', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');

    Route::get('/alumnos/nuevo-atraso', [AlumnoAtrasoController::class, 'create'])->name('alumnoatraso.create');

    Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');
    Route::get('/cursos/nuevo-curso', [CursoController::class, 'create'])->name('cursos.create');
    Route::post('/cursos/guardar-curso', [CursoController::class, 'store'])->name('cursos.store');
    Route::get('/cursos/{id}/ver-curso', [CursoController::class, 'show'])->name('cursos.show');
    Route::get('/cursos/{id}/editar-curso', [CursoController::class, 'edit'])->name('cursos.edit');
    Route::put('/cursos/{id}/actualizar-curso', [CursoController::class, 'update'])->name('cursos.update');
    Route::delete('/cursos/{id}/eliminar-curso', [CursoController::class, 'destroy'])->name('cursos.destroy');
    
    Route::get('/semestres', [SemestreController::class, 'index'])->name('semestres.index');
    Route::get('/semestres/nuevo-semestre', [SemestreController::class, 'create'])->name('semestres.create');
    Route::post('/semestres/guardar-semestre', [SemestreController::class, 'store'])->name('semestres.store');
    Route::get('/semestres/{id}/ver-semestre', [SemestreController::class, 'show'])->name('semestres.show');
    Route::get('/semestres/{id}/editar-semestre', [SemestreController::class, 'edit'])->name('semestres.edit');
    Route::put('/semestres/{id}/actualizar-semestre', [SemestreController::class, 'update'])->name('semestres.update');
    Route::delete('/semestres/{id}/eliminar-semestre', [SemestreController::class, 'destroy'])->name('semestres.destroy');
});

require __DIR__.'/auth.php';
