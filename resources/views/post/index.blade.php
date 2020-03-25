<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     @if(session('author'))
      <div class="alert alert-success">
         <h3>Hai cancellato il post di {{session('author')}}</h3>
      </div>
    @endif
    <strong><a href="{{route('post.create')}}">Crea</a></strong>
    @foreach ($posts as $post)
        <div class="data">
            <p>{{$post->description}}</p>
            <p>{{$post->img}}</p>
            <p>{{$post->author}}</p>
            <p>{{$post->author_img}}</p>
            <a href="{{route('post.show', $post->id)}}">visualizza</a>
            <a href="{{route('post.edit', $post->id)}}">modifica</a>
        </div>
    @endforeach
</body>
</html>