<?php

namespace App\Http\Controllers;

use App\Services\PostsService;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    protected $postsService;

    public function __construct(PostsService $postsService)
    {
        $this->postsService = $postsService;
    }

    public function index()
    {
        $posts = $this->postsService->getAllPosts();
        return response()->json($posts);
    }
    public function show($id)
    {
        $post = $this->postsService->getPostById($id);
        return response()->json($post);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);
        $post = $this->postsService->createPost($data);
        return response()->json($post, 201);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'string',
            'content' => 'string',
        ]);

        $post = $this->postsService->updatePost($id, $data);
        return response()->json($post);
    }

    public function destroy($id)
    {
        $this->postsService->deletePost($id);
        return response()->json(null, 204);
    }
}
