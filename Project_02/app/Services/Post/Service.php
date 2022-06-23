<?php

namespace App\Services\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class Service
{
    public function storePost($data)
    {
        try{
            Db::beginTransaction();

            $tags = $data['tags'];
            unset($data['tags']);

            $post = Post::create($data);

            $post->tags()->attach($tags);

            Db::commit();
        } catch (\Exception $e)
        {
            Db::rollBack();
            return $e->getMessage();
        }
    }

    public function updatePost($post,$data)
    {
        try {
            Db::beginTransaction();

            $tags = $data['tags'];

            unset($data['tags']);

            $post->update($data);
            $post->tags()->sync($tags);

            Db::commit();
        } catch (\Exception $e){
            Db::rollBack();
            return $e->getMessage();
        }

        return $post;
    }

    public function store($data)
    {
        try{
            Db::beginTransaction();
            $tags = $data['tags'];
            $category = $data['category'];
            unset($data['tags'],$data['category']);

            $tagIds = $this->getTagIds($tags);

            $data['category_id'] = $this->getCategoryId($category);
            $post = Post::create($data);

            $post->tags()->attach($tagIds);

            Db::commit();
        } catch (\Exception $e)
        {
            Db::rollBack();
            return $e->getMessage();
        }

        return $post;
    }

    private function getCategoryId($item)
    {
        $category = !isset($item['id']) ? Category::create($item) : Category::find($item['id']);

        return $category->id;
    }

    private function getTagIds($tags)
    {
        $tagIds = [];

        foreach ($tags as $tag) {
            $tag = !isset($tag['id']) ? Tag::create($tag) : Tag::find($tag['id']);
            $tagIds[] = $tag->id;
        }

        return $tagIds;
    }

    public function update($post,$data)
    {
        try {
            Db::beginTransaction();
            $tags = $data['tags'];
            $category = $data['category'];
            unset($data['tags'], $data['category']);

            $tagIds = $this->getTagIdsWithUpdate($tags);
            $data['category_id'] = $this->getCategoryIdWithUpdate($category);

            $post->update($data);
            $post->tags()->sync($tagIds);


            $data['category'] = $this->getCategoryIdWithUpdate($category);
            Db::commit();
        } catch (\Exception $e){
            Db::rollBack();
            return $e->getMessage();
        }

        return $post->fresh();
    }

    private function getTagIdsWithUpdate($tags)
    {
        $tagIds = [];

        foreach ($tags as $tag) {
            if(!isset($tag['id']))
            {
                $tag = Tag::create($tag);
            } else {
                $currentTag = Tag::find($tag['id']);
                $currentTag->update($tag);
                $tag = $currentTag->fresh();
            }

            $tagIds[] = $tag->id;
        }

        return $tagIds;
    }

    private function getCategoryIdWithUpdate($item)
    {
        if(!isset($item['id'])){
            $category = Category::create($item);
        } else {
            $category = Category::find($item['id']);
            $category->update($item);
            $category = $category->fresh();
        }

        return $category->id;
    }

}
