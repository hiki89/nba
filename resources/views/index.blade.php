<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@foreach($teams as $team)
    <div>
        <li><a href="{{ route('show', $team->id) }}">{{ $team->name }}</a></li>
    </div>
@endforeach
</body>
</html>