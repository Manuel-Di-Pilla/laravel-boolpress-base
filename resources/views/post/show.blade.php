<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>{{$post->description}}</p>
    <p>{{$post->img}}</p>
    <p>{{$post->author}}</p>
    <p>{{$post->author_img}}</p>
    <a href="{{route('post.index')}}">Torna alla Home</a>
    <form action="{{route('post.destroy', $post->id)}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="elimina">
    </form>
</body>
</html>