<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('post.index',compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        Post::create($data);

        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {

        return view('post.show',compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post.edit',compact('post'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        $post->update($data);

        return redirect()->route('post.show',$post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('post.index');
    }

    public function firstOrCreate()
    {
        $post = Post::firstOrCreate([
            'title' => 'Title 5'
        ],[
            'title' => 'Title 5',
            'content' => 'Content 5',
            'image' => 'img/5.png',
            'likes' => 108,
            'is_published' => 0,
        ]);
    }

    public function updateOrCreate()
    {
        $post = Post::updateOrCreate([
            'title' => 'Title 5'
        ],[
            'title' => 'Title 6',
            'content' => 'Content 5',
            'image' => 'img/5.png',
            'likes' => 108,
            'is_published' => 0,
        ]);
    }
}
