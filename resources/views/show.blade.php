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
</div>

@endsection
