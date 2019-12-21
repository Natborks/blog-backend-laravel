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

        $detail=$request->content;
 
        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getelementsbytagname('img');
 
        //loop over img elements, decode their base64 src and save them to public folder,
        //and then replace base64 src with stored image URL.
        foreach($images as $k => $img){
            $data = $img->getattribute('src');
 
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
 
            $data = base64_decode($data);
            $image_name= time().$k.'.png';
            $path = public_path() .'/'. $image_name;
 
            file_put_contents($path, $data);
 
            $img->removeattribute('src');
            $img->setattribute('src', $image_name);
        }
 
        $detail = $dom->savehtml();
        $post =  new Post;
        $post->title = $request->get('title');
        $post->slug = $request->get('slug');
        $post->body= $detail;

        if($post->save()) {
            return response()->json($post, 201);
        } else {
            return response()->json("error", 400);
        }   
        
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
