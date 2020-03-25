<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('post.update', $post->id)}}" method="post">
        @csrf
        @method('PATCH')
        <input type="text" name="description" value="{{$post->description}}" placeholder="description">
        <input type="text" name="img" value="{{$post->img}}" placeholder="image">
        <input type="text" name="author" value="{{$post->author}}" placeholder="author">
        <input type="text" name="author_img" value="{{$post->author_img}}" placeholder="author image">
        <input type="submit" value="Salva">
    </form>
</body>
</html>