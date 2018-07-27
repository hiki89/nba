@extends('layouts.master')

@section('content')

<h3>Login</h3>

<form method="POST" action="/login">

{{ csrf_field() }}

    <div class="form-group">
        <label for="email">Email</label>
        <input name="email" type="email" class="form-control" id="email">
        @include('partials.error-message', ['fieldName' => 'email'])
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input name="password" type="password" class="form-control" id="password">
        @include('partials.error-message', ['fieldName' => 'password'])
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
    @include('partials.error-message', ['fieldName' => 'message'])
</form>

{{-- @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@if (session('warning'))
    <div class="alert alert-warning">
        {{ session('warning') }}
    </div>
@endif --}}

@endsection