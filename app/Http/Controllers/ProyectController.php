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

    public function by_id($id){
        $projects = Proyecto::findorFail($id)->get();

        return view('Projects/proyectos')->with('projects',$projects);
    }

    public function create(){
        return view('Projects/new');
    }

    public function process(Request $request){
        
        Proyecto::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'tecnologias'=>$request->tecnologias,
        ]);
        
        return redirect('/Proyects');
    }

    public function edit(Proyecto $id){

        return view('Projects.edit')->with('project',$id);
    }

    public function update(Request $request, Proyecto $proyecto){
        $proyecto->update([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'tecnologias'=>$request->input('tecnologias'),
        ]);


        

        return redirect('/Proyects');

    }  

    public function delete(Request $request, Proyecto $id){
    

        $id->delete();

        return redirect('/Proyects');
    
    }

}
