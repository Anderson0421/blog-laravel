<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function show(){
        #En este caso lo estamos ordenando de segun su fecha de forma descendente
        $posts = Post::orderBy('updated_at','desc')->get();  #Para traer informacion desde la BD 
        #tambien podemos hacer c omo una consulta solo para algunos datos
        #$posts = DB::table('posts')->select('id','title','content')->get();
        return view('welcome')->with('posts',$posts); 

    }

    public function post_id(Post $id){
        //$posts = Post::findOrFail($id);
        return view('Posts/show')->with('posts',$id);
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

    public function edit(Post $id){
        return view('Posts.edit')->with('post',$id);
    }

    public function update(Request $request,Post $post){
        $post->update([
            'title'=>$request->input('title'),
            'content'=>$request->input('content'),
            'excerpt'=>$request->input('content'),
        ]);

        return redirect('/');
    }


}
