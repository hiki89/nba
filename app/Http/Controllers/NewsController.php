<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = \App\News::with('user')->latest()->paginate(10);
        return view('news', compact('news'));
    }

    public function show($id)
    {
        $singleNews = News::find($id);
        return view('single-news', compact('singleNews'));
    }
}
