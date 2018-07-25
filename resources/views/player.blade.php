@extends('layouts.master')

@section('content')

<div>
    <h2>{{ $player->first_name }} {{ $player->last_name }}</h2>
    <p>Email: {{ $player->email }}</p>
    <p>Team: <a href="{{ "/teams/" . $player->team->id }}">{{ $player->team->name }}</a></p>
</div>

@endsection
