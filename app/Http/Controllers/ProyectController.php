<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectController extends Controller
{

    public function proyectos(){
        $projects = Proyecto::get();

        return view('Projects/proyectos')->with('projects',$projects);

    }

}
