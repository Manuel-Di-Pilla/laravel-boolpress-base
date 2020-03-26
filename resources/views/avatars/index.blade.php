<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($avatars as $avatar)
        <div>
            <img src="{{$avatar->url}}" alt="">
            <p>Name: {{$avatar->user->name}}</p>
            <p>Email: {{$avatar->user->email}}</p>
            <p>Password: {{$avatar->user->password}}</p>
            <a href="{{route('avatars.show', $avatar->id)}}">Vedi</a>
        </div>
    @endforeach
</body>
</html>