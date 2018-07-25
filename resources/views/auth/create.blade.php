@extends('layouts.master')

@section('content')

    <h3>Register</h3></br>

<form method="POST" action="/register">

{{ csrf_field() }} 

    <div class="form-group">
        <label for="name">Name</label>
        <input name="name" type="text" class="form-control" id="name">
        @include('partials.error-message', ['fieldName' => 'name'])
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input name="email" type="email" class="form-control" id="email">
        @include('partials.error-message', ['fieldName' => 'age'])
    </div>
    
    <div class="form-group">
        <label for="password">Password</label>
        <input name="password" type="password" class="form-control" id="password">
        @include('partials.error-message', ['fieldName' => 'password'])
    </div>

    <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
        @include('partials.error-message', ['fieldName' => 'password_confirmation'])
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection