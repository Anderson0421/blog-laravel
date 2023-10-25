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


Route::get('Cursos/',function(){
    $cursos = [
        ['title'=>'Laravel 9','progress'=>30],
        ['title'=>'Django','progress'=>80],
        ['title'=>'TailwindCSS','progress'=>50],
        ['title'=>'Vue.js','progress'=>00],
        ['title'=>'Laravel Mix','progress'=>00],
        ['title'=>'MongoDB','progress'=>00],
    ];
    return view('cursos')->with('cursos',$cursos);
});