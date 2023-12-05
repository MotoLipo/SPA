<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Inertia\Response;
use Inertia\ResponseFactory;

class PostController extends Controller
{
    public function index(): Response|ResponseFactory
    {
        $posts = Post::all();

        $posts = PostResource::collection($posts)->resolve();

        return inertia('Index', compact('posts'));
    }

    public function create(): Response|ResponseFactory
    {
        return inertia('Create');
    }

    public function store(StorePostRequest $request): RedirectResponse
    {
        $post = new Post();
        $post->fill($request->safe()->all());
        $post->save();

        return redirect()->route('posts.index');
    }

    public function show(Post $post): Response|ResponseFactory
    {
        return inertia('Show', compact('post'));
    }

    public function edit(Post $post): Response|ResponseFactory
    {
        return inertia('Edit', compact('post'));
    }

    public function update(UpdatePostRequest $request, Post $post): RedirectResponse
    {
        $post->fill($request->safe()->all());
        $post->save();

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}
