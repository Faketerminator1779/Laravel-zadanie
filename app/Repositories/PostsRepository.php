<?php

namespace App\Repositories;

use App\Models\Posts;

class PostsRepository
{
    public function getAllPosts()
    {
        return Posts::all();
    }

    public function getPostById($id)
    {
        return Posts::findOrFail($id);    
    }

    public function createPost($data)
    {
        return Posts::create($data);
    }
    public function updatePost($id, $data)
    {
        $post = $this->getPostById($id);
        $post->update($data);
        return $post;
    }
    public function deletePost($id)
    {
        $post = $this->getPostById($id);
        $post->delete();
    }
}