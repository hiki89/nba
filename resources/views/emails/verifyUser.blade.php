@extends('layouts.master')

@section('content')

<h2>Welcome {{$user['name']}}</h2>
<br/>
Your registered email-id is {{$user['email']}} , Please click on the below link to verify your account
<br/>
<a href="{{ $url }}">Verify Email</a>

@endsection