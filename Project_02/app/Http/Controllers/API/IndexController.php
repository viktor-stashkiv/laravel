<?php

namespace App\Http\Controllers\API;

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

        $page = $data['page'] ?? 1;
        $perPage = $data['perPage'] ?? 10;

        $filter = app()->make(PostFilter::class,['queryParams' => array_filter($data)]);

        $posts = Post::filter($filter)->paginate($perPage, ['*'], 'page', $page);

        return PostResource::collection($posts);
    }
}
