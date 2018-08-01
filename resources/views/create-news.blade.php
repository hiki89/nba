@extends('layouts.master')

@section('content')

<h4>Post your news</h4>

<form method="POST" action="/news/create">

{{ csrf_field() }}

    <div class="form-group">
        <label for="title">Title:</label>
        <input name="title" type="text" class="form-control" id="title">
        @include('partials.error-message', ['fieldName' => 'title'])
    </div>

    <div class="form-group">
        <label for="content">Article:</label>
        <input name="content" type="text" class="form-control" id="content">
        @include('partials.error-message', ['fieldName' => 'content'])
    </div>

    <div class="form-group">
        <p>Related teams:</p>
        @foreach($teams as $team)
            <input name='teams[]' type="checkbox" class="form-check-input" value="{{ $team->id }}">
            <label for="checkBox">{{ $team->name }}</label>
            @include('partials.error-message', ['fieldName' => 'checkbox'])
        @endforeach
    </div>

    <button type="submit" class="btn btn-primary">Submit news</button>
</form>

@endsection