<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Team;
use Mail;
use App\Mail\CommentReceived;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('forbidden.words', ['only' => 'store']);
    }
    public function store(Team $team)
    {
        $this->validate(request(), [
            'content' => 'required|min:10',
        ]);
        
        Comment::create([
            'content' => request('content'),
            'user_id' => auth()->user()->id,
            'team_id' => $team->id
        ]);

        Mail::to($team->email)->send(new CommentReceived($team));
        return redirect('/teams/'.$team->id);
    }
}
