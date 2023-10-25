<?php

use App\Http\Controllers\Cursos;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class, "show"]);


Route::get('Cursos/', [Cursos::class, 'show_cursos']);


// Para mostrar todos los posts
Route::post('Posts', [PostsController::class, 'store']);

// Para mostrar un Post segun su ID
Route::get('Posts/{id}', [PostsController::class, 'show']);

// Para crear un Post
Route::get('Posts/create', [PostsController::class, 'create']);

// Para editar un post
Route::get('Posts/{id}/edit', [PostsController::class, 'edit']);

// Para guardar los cambios del edit del post edit
Route::patch('Posts/{id}', [PostsController::class, 'update']);

//Para Eliminar un post
Route::delete('Posts/{id}', [PostsController::class, 'delete']);

