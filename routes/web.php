<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $posts = [
        [
            'title' => 'Novedades de Laravel 9',
            'resume' => 'novedades novedidas de laravel 9',
        ],
        [
            'title' => 'Progreso de Laravel 9',
            'resume' => 'Curso de laravel 9 para el proyecto de la empresa F5 SOLUTIONS / AnderDev',
        ],
        [
            'title' => 'Novedades de Laravel 9',
            'resume' => 'Curso de laravel 9 para el proyecto de la empresa F5 SOLUTIONS / AnderDev',
        ],
    ];
    return view('welcome')->with('posts',$posts);
});

