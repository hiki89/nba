<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function show()
    {
        $news = News::all();
        return view('news', compact('news'));
    }
}
