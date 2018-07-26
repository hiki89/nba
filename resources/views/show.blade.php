@extends('layouts.master')

@section('content')

<div>
    <h2>{{ $team->name }}</h2>
    <p>Email: {{ $team->email }}</p>
    <p>Address: {{ $team->address }}</p>
    <p>City: {{ $team->city }}</p>
    
    @foreach($team->players as $player)
        Players: <li class="list-unstyled"><a href="{{ route('player', $player->id) }}">{{ $player->first_name }} {{ $player->last_name }}</a></li>
    @endforeach

    <h3>Comments:</h3>
    @foreach($team->comments as $comment)
    <li>
        Name: {{ $comment->user->name }}</br>
        Comment: {{ $comment->content }}</br></br>
    </li>
    @endforeach

    <h4>Post your comment</h4>

        <form method="POST" action="{{ route('comments', ['team_id' => $team->id]) }}">

        {{ csrf_field() }}

            <div class="form-group">
                <label for="content">Comment:</label>
                <textarea name="content" class="form-control" id="content"></textarea>
                @include('partials.error-message', ['fieldName' => 'content'])
            </div>

            <button type="submit" class="btn btn-primary">Submit comment</button>
        </form>
</div>

@endsection
