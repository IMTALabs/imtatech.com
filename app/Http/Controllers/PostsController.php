<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Statamic\Facades\Entry;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Entry::query()->orderBy('updated_at')->paginate(5);

        return view('posts.index', compact('posts'));
    }

    public function show(string $slug)
    {
        $post = Entry::query()->where('slug', $slug)->first();
        if (is_null($post)) abort(404);

        return view('posts.post-detail', compact('post'));
    }
}
