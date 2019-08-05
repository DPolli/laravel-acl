<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Gate;

class SiteController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post) {
        return view('portal.home.index', compact('posts'));
    }

    public function update($idPost) {
        $post = Post::find($idPost);

        // Duas formas de bloquear o acesso
        //$this->authorize('update-post', $post);
        if (Gate::denies('update-post', $post)) {
            abort(403, 'Nao autorizado');
        }

        return view('update-post', compact('post'));
    }
    
    public function rolesPermission() {
        
        echo "<h1>".auth()->user()->name."</h1>";
        
        foreach (auth()->user()->roles as $role) {
            echo "<b>".$role->name.'</b> -> ';
            
            $permissions = $role->permissions;
            foreach ($permissions as $permission) {
                echo ' '.$permission->name.', ';
            }
            echo '<br>';
        }
        
    }

}
