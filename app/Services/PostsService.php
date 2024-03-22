<?php

namespace App\Services;

use App\Repositories\PostsRepository;

class PostsService
{
    protected $postsRepository;

    public function __construct(PostsRepository $postsRepository)
    {
        $this->postsRepository = $postsRepository;
    }

    public function getAllPosts()
    {
        return $this->postsRepository->getAllPosts();
    }

    public function createPost($data)
    {return $this->postsRepository->createPost($data);
    }

    public function updatePost($id, $data)
    {
        return $this->postsRepository->updatePost($id, $data);
    }

    public function deletePost($id)
    {
        return $this->postsRepository->deletePost($id);
    }
}