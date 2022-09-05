<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <title>Edit</title>
</head>
<body>
    <div class="padding center texts">
        <form action="{{url('/contents', ['content'=>$content->id])}}" method="POST">
            @csrf
            @method('PUT')
            <label for="title">Título</label>
            <input required type="title" name="title" id="title" value="{{$content->title}}">
            <label for="text">Texto</label>
            <textarea required type="text" name="text" id="text" value="{{$content->text}}"></textarea>
            <button class="bigButton" type="submit">Editar</button>
        </form>
    </div>
</body>
</html>