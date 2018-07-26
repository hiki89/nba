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
                <label for="author">Author</label>
                <input name="author" type="text" class="form-control" id="author">
                @include('partials.error-message', ['fieldName' => 'title'])
            </div>

            <div class="form-group">
                <label for="text">Comment:</label>
                <textarea name="text" class="form-control" id="text"></textarea>
                @include('partials.error-message', ['fieldName' => 'body'])
            </div>

            <button type="submit" class="btn btn-primary">Submit comment</button>
        </form>
</div>

@endsection
