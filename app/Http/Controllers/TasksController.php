<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function tareas(){
        $tareas = Task::get();

        return view('Tasks.tasks')->with('tareas',$tareas);
    }
}
