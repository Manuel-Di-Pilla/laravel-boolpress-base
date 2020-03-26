<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>{{$photo->user->name}}</p>  
    <p>{{$photo->user->email}}</p>  
    <p>{{$photo->user->password}}</p>
    <img src="{{$photo->url}}" alt="">
    <a href="{{route('photos.index')}}">Torna alla home</a>
</body>
</html>