<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        //$posts = $post->all();
        $posts = $post->where('user_id', auth()->user()->id)->get();

        return view('home', compact('posts'));
    }

    public function update($idPost)
    {   
        $post = Post::find($idPost);

        // Duas formas de bloquear o acesso
        //$this->authorize('update-post', $post);
        if(Gate::denies('update-post', $post)){
            abort(403, 'Nao autorizado');
        }

        return view('update-post', compact('post'));
    }
}
