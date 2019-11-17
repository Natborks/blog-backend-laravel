<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    //
    public function index() {
        $posts = Post::all();

        return view('Posts/index', compact('posts'));
        //return response()->json($posts, 200);
          
    }

    public function create() {
        return view('Posts/new');
    }

    public function show(Post $post) {
        return $post;
    }

    public function store(Request $request) {
        $post =  Post::create($request->all());

        return response()->json($post, 201);
    }

    public function update(Request $request, Post $post) {
        
        $post->update($request->all());
        
        return response()->json($post, 200);
    }

    public function delete(Request $request, Post $post) {
        $post->delete();
        
        return response()->json(null, 204);
    }
}
