<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Cursos extends Controller
{
    public function show_cursos(){
        $cursos = DB::table('cursos')->get(); #Para traer informacion desde la BD
        $cantidad = DB::table('cursos')->count();
        return view('cursos')->with('cursos',$cursos)->with('cantidad',$cantidad);
    }
}
