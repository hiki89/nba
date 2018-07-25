@extends('layouts.master')

@section('content')

@foreach($teams as $team)
    <div class="list-unstyled">
        <li><a href="{{ route('show', $team->id) }}">{{ $team->name }}</a></li>
    </div>
@endforeach

@endsection
