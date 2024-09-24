<?php

namespace App\Http\Controllers;

use App\Models\Post; 
use Illuminate\Http\Request;

class Blogpostcontroller extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
    public function create()
    {
        return view('posts.create');
    }

    /*
    public function store(Request $request)
        $post=Post::create($request->all());
        return redirect()->route('post.index');

}
public function show($id){
    $post=Post::find($id);
    return view('post.show',compact('post'));
}
public function edit($id){
    $post=Post::find($id);
    return view('post.edit',compact('post'));
}
public function update(Request $request, $id){
    $post=Post::find($id);
    $post->update($request->all());
    return redirect()->route('post.index');
}
public function destroy($id){
    $post=Post::find($id);
    $post->delete();
    return redirect()->route('post.index');}*/
}