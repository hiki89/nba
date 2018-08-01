@extends('layouts.master')

@section('content')

@if(Session::has('success'))
    <div class='alert alert-success'>
    <strong>{{Session::get('success')}}</strong>
    </div>
@endif

<div>
    <ul class="unstyled-list">
    @foreach($news as $vesti)
        <li>
            Title: <a href="{{ route('single-news', $vesti->id) }}">{{ $vesti->title }}</a></br>
            News: {{ $vesti->content }}</br>
            Author: {{ $vesti->user->name }}
        </li>
    @endforeach
    </ul>
</div>

<nav class="blog-pagination">
    <a class ="btn btn-outline-{{$news->currentPage() == 1 ? 'secondary disabled': 'primary' }}" href="{{$news->previousPageUrl()}}">Previous</a>
    <a class ="btn btn-outline-{{$news->hasMorePages() ? 'primary' : 'secondary disabled' }}" href="{{$news->nextPageUrl()}}">Next</a>
</nav> 

Page {{$news->currentPage()}} of {{$news->lastPage()}}

@endsection