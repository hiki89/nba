@extends('layouts.master')

@section('content')

@foreach($news as $article)
    <h3>Title: {{ $article->title }}</h3>
    <p>About: 
        @foreach($article->teams as $team)
            {{ $team->name }}
        @endforeach
    </p>
    <p>Content: {{ $article->content }}</p>
    <p>Created by: {{$article->user->name}} at {{$article->created_at}} </p>

@endforeach

@endsection