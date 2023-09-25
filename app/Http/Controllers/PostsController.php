<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Statamic\Facades\Entry;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Entry::query()->where('collection', 'posts')->orderBy('updated_at')->paginate(5);

        SEOMeta::setTitle('Bài viết');
        SEOMeta::setDescription('Cập nhật thông tin mới nhất về IMTA TECH');

        OpenGraph::setDescription('Cập nhật thông tin mới nhất về IMTA TECH');
        OpenGraph::setTitle('Bài viết');
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::addImage(asset('assets/images/logo.jpg'));

        return view('posts.index', compact('posts'));
    }

    public function show(string $slug)
    {
        $post = Entry::query()->where('slug', $slug)->first();
        if (is_null($post)) abort(404);

        SEOMeta::setTitle($post->title);
        SEOMeta::setDescription($post->mo_ta);

        OpenGraph::setDescription($post->mo_ta);
        OpenGraph::setTitle($post->title);
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::addImage(asset($post->thumbnail->first()->url));

        return view('posts.post-detail', compact('post'));
    }
}
