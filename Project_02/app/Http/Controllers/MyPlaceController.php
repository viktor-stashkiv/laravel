<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MyPlaceController extends Controller
{
    public function index(){
        $posts = Post::where('is_published',1)->first();
        foreach($posts as $post){
            dump($post->title);
        }
    }
}
