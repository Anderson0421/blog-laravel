<?php

use App\Http\Controllers\Cursos;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProyectController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::controller(Cursos::class)->group(function(){
    Route::get('Cursos/', 'show_cursos');
});

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'show'); // Ruta para mostrar el formulario (Método GET)
    Route::post('/Blog', 'store'); // Ruta para procesar el formulario y guardar datos (Método POST)
    Route::get('/Blog/{id}', 'post_id'); // Ruta para procesar el formulario y guardar datos (Método POST)
    Route::get('Blog/{id}/edit', 'edit'); // Ruta para editar el formulario
    Route::patch('Blog/{post}', 'update'); // Ruta para procesar el formulario y guardar los datos Metodo patch
    Route::get('/Create', 'create');
});    
Route::controller(TasksController::class)->group(function(){
    Route::get('/Tasks', 'tareas');
    Route::post('/Tasks/New', 'save');
});
Route::controller(ProyectController::class)->group(function(){
    Route::get('/Proyects', 'proyectos');
    Route::get('/Proyects/Create/', 'create');
    Route::post('/Proyects/process','process');
    Route::get('Proyects/{id}','by_id');
    Route::get('Proyects/{id}/edit', 'edit');
    Route::patch('/Proyects/{proyecto}', 'update')->name('Projecto');
    Route::delete('/Projects/{id}/delete','delete')->name('delete');
});