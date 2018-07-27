@extends('layouts.master')

@section('content')

<div>
    @foreach($news as $vesti)
        <li>
            Title: {{ $vesti->title }}
            Text: {{ $vesti->content }}
            User: {{ $vesti->user->name }}
        </li>
    @endforeach
</div>

@endsection