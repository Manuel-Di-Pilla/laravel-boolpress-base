<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('post.store')}}" method="POST">
        @csrf
        <input type="text" name="description" value="" placeholder="description">
        <input type="text" name="img" value="" placeholder="image">
        <input type="text" name="author" value="" placeholder="author">
        <input type="text" name="author_img" value="" placeholder="author image">
        <input type="submit" value="Inserisci">
        @method('POST')
    </form>
</body>
</html>