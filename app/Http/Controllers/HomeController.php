<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function show(){
        $posts = Post::get();  #Para traer informacion desde la BD 
        #tambien podemos hacer c omo una consulta solo para algunos datos
        #$posts = DB::table('posts')->select('id','title','content')->get();
        return view('welcome')->with('posts',$posts); 

    }

    public function post_id($id){
        $posts = DB::table('posts')->where('id',$id)->get(); # De esta forma es la ORM Eloquent
        return view('welcome')->with('posts',$posts);
    }
}
