<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cursos extends Controller
{
    public function show_cursos(){
        $cursos = [
            ['title'=>'Laravel 9','progress'=>30],
            ['title'=>'Django','progress'=>80],
            ['title'=>'TailwindCSS','progress'=>50],
            ['title'=>'Vue.js','progress'=>00],
            ['title'=>'Laravel Mix','progress'=>00],
            ['title'=>'MongoDB','progress'=>00],
        ];
        return view('cursos')->with('cursos',$cursos);
    }
}
