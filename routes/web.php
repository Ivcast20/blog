<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;


Route::get('/', HomeController::class)->name('home');

// Route::get('/cursos',[CursoController::class, 'index'])->name('cursos.index');

// Route::get('cursos/create',[CursoController::class, 'create'])->name('cursos.create');

// Route::get('/cursos/{curso}',[CursoController::class, 'show'])->name('cursos.show');

// Route::post('/cursos', [CursoController::class,'store'])->name('cursos.store');

// Route::get('/cursos/{curso}/edit',[CursoController::class,'edit'])->name('cursos.edit');

// Route::put('/cursos/{curso}',[CursoController::class,'update'])->name('cursos.update');

// Route::delete('users/{curso}',[CursoController::class,'destroy'])->name('cursos.destroy');

//Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas'=>'curso'])->names('cursos');

Route::resource('cursos', CursoController::class);

//Para ver las rutas se usa el comando: php artisan r:l

Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('contactanos',[ContactanosController::class,'index'])->name('contactanos.index');

Route::post('contactanos',[ContactanosController::class,'store'])->name('contactanos.store');