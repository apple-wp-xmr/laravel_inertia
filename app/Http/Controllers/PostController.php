<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;


class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        $posts = PostResource::collection($posts)->resolve();
        return inertia('Post/Index', compact('posts'));
    }

    public function create(){
        return inertia('Post/Create');
    }
    public function store(StoreRequest $request){
        $data = $request->validated();
        Post::create($data);
        return redirect()->route('post.index');
    }
    public function show(Post $post){
        return inertia('Post/Show', compact('post'));
    }
    public function edit(Post $post){
        return inertia('Post/Edit', compact('post'));
    }
    public function update(Post $post, UpdateRequest $request){
        $data = $request->validated();
        $post->update($data);
        return redirect()->route('post.index');
    }
    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('post.index');
    }
}
