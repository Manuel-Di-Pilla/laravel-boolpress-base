<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($photos as $photo)
        <p>Nome: {{$photo->user->name}}</p>  
        <p>Email: {{$photo->user->email}}</p>  
        <p>Password: {{$photo->user->password}}</p>
        <img src="{{$photo->url}}" alt="">
        <a href="{{route('photos.show', $photo->id)}}">Vedi</a>  
    @endforeach
</body>
</html>