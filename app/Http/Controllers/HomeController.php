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

    public function store(Request $request){

        // 1era manera
        // $post = new Post;
        // $post->title = $request->title;
        // $post->excerpt = $request->content;
        // $post->content = $request->content;
        // $post->save();

        // 2da manera
        // Este es un metodo estatico este metodo estatico espera recibir un array con las llaves
        // de la columna y los valore

        Post::create([
            'title' => $request->title,
            'excerpt' => $request->content,
            'content' => $request->content,
        ]);

        return redirect('/');
    }


    public function create(){
        return view('Posts.create');
    }


}
