<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function show(){
        $posts = DB::table('posts')->get();
        return view('welcome')->with('posts',$posts);
    }

    public function post_id($id){
        $posts = DB::table('posts')->where('id',$id)->get(); # De esta forma es la ORM Eloquent
        return view('welcome')->with('posts',$posts);
    }
}
