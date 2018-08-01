<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Team;

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

    public function teamNews($name)
    {
        $team = Team::where('name', $name)->first();
        $news = $team->news()->with('teams', 'user')->latest()->paginate(5);

        return view('team-news', compact('news'));
    }

    public function create()
    {
        $teams = Team::all();
        return view('create-news', compact('teams'));
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'content' => 'required',
            'teams' => 'required|array'
        ]);

        News::create([
            'title' => request('title'),
            'content' => request('content'),
            'user_id' => auth()->user()->id
        ]);

        session()->flash('success', 'Thank you for publishing article on www.nba.com');

        return redirect('/news');
    }
}
