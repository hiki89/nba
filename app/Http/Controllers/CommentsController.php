<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Team;

class CommentsController extends Controller
{
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

        return redirect('show');
    }
}
