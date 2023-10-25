<?php

use App\Http\Controllers\Cursos;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class, "show"]);

// Lo que recibe este agrupador de controllers es la clase osea el controlador y el metodo group con una fucnion dentro todas las urls
Route::controller(Cursos::class)->group(function(){
    Route::get('Cursos/', 'show_cursos');
});



// ----------------------  A --------------------------------  //

Route::controller(PostsController::class)->group(function(){
    // Para mostrar todos los posts
    Route::post('Posts', 'store');
    
    // Para mostrar un Post segun su ID
    Route::get('/Posts/{id}', 'show');
    
    // Para crear un Post
    Route::get('/Posts/create', 'create');
    
    // Para editar un post
    Route::get('Posts/{id}/edit','edit');
    
    // Para guardar los cambios del edit del post edit
    Route::patch('Posts/{id}', 'update');
    
    //Para Eliminar un post
    Route::delete('Posts/{id}', 'delete');
});    
