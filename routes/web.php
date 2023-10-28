<?php

use App\Http\Controllers\Cursos;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;


// Lo que recibe este agrupador de controllers es la clase osea el controlador y el metodo group con una fucnion dentro todas las urls
Route::controller(Cursos::class)->group(function(){
    Route::get('Cursos/', 'show_cursos');
});



// ----------------------  A --------------------------------  //


Route::controller(HomeController::class)->group(function(){

    Route::get('/', 'show'); // Ruta para mostrar el formulario (Método GET)
    Route::post('/Blog', 'store'); // Ruta para procesar el formulario y guardar datos (Método POST)

    Route::get('/Blog/{id}', 'post_id'); // Ruta para procesar el formulario y guardar datos (Método POST)

    Route::get('/Create', 'create');
});    



Route::controller(TasksController::class)->group(function(){
    Route::get('/Tasks', 'tareas');

    Route::post('/Tasks/New', 'save');
    

});


