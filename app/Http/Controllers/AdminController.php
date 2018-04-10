<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class AdminController extends Controller {

    public function __construct(){
        $this->middleware('auth');
    }
    
    public function create() {
        return view('create');
    }

    public function edit(Post $post) {
        return view('edit', compact('post'));
    }

    public function index() {
        $posts = Post::all();
        return view('admin', compact('posts'));
    }

    public function store() {
        Post::create(request(['title','body']));
        return redirect('/admin');
    }

    public function update(Post $post) {
        $post->title = request('title');
        $post->body = request('body');
        $post->save();
        return redirect('/admin');
    }
}
