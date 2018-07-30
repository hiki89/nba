@extends('layouts.master')

@section('content')

<div>
    <h2>{{ $singleNews->title }}</h2>
    <p>{{ $singleNews->content }}</p>
    <p>By: {{ $singleNews->user->name }}</p>
</div>

@endsection