<?php

namespace App\Http\Controllers\Post;

use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;


class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        //$this->authorize('view',auth()->user());

        $data = $request->validated();
       // dd($data);
        $page = $data['page'] ?? 1;
        $perPage = $data['perPage'] ?? 10;


        $filter = app()->make(PostFilter::class,['queryParams' => array_filter($data)]);

        $posts = Post::filter($filter)->paginate($perPage, ['*'], 'page', $page);

        return view('post.index',compact('posts'));
    }
}
