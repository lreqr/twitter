<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $editing = true;

        return view('posts.show', compact('post', 'editing'));
    }

    public function update(Post $post, StorePostRequest $request)
    {
        $post->content = $request['content'];
        $post->update();

        return redirect(route('post.show', ['post' => $post->id]))->with('success', 'Post updated successfully');
    }

    public function store(StorePostRequest $request): RedirectResponse
    {
        $post = new Post();
        $post->content = $request['content'];
        $post->save();

        return redirect(route('twitter.index'))->with('success', 'Post created successfully');
    }

    public function destroy(Post $id): RedirectResponse
    {
        $id->delete();

        return redirect(route('twitter.index'))->with('deleted', 'Post deleted successfully');
    }
}
