<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>{{ $team->name }}</h2>
        <p>Email: {{ $team->email }}</p>
        <p>Address: {{ $team->address }}</p>
        <p>City: {{ $team->city }}</p>
        @foreach($team->players as $player)
            Players: <li><a href="{{ route('player', $player->id) }}">{{ $player->first_name }} {{ $player->last_name }}</a></li>
        @endforeach
    </div>
</body>
</html>