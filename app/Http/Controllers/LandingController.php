<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;
use Statamic\Facades\Entry;

class LandingController extends Controller
{
    public function home()
    {
        $data = Entry::whereCollection('page')->where('slug', 'home')->first();

        SEOMeta::setTitle($data->title);
        SEOMeta::setDescription($data->slogan);

        OpenGraph::setDescription($data->slogan);
        OpenGraph::setTitle($data->title);
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'articles');

        return view('home', compact('data'));
    }

    public function mobile() {
        SEOMeta::setRobots('noindex nofollow');

        return view('landing.mobile');
    }

    public function web() {
        $data = Entry::whereCollection('page')->where('slug', 'web')->first();

        SEOMeta::setTitle($data->title);
        SEOMeta::setDescription($data->quote_chinh);

        OpenGraph::setDescription($data->quote_chinh);
        OpenGraph::setTitle($data->title);
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'articles');

        return view('landing.web', compact('data'));
    }

    public function ai() {
        SEOMeta::setRobots('noindex nofollow');

        return view('landing.ai');
    }
}
