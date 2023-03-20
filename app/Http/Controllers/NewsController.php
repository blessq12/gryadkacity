<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function single($uri = null)
    {
        $news = $uri;
        return view('single-news',[
            'news_data' => $news
        ]);
    }
}
