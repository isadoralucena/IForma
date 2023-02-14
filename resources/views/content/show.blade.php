<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
    <div class="showDiv">
        <p class="titleShow">{{$content->title}}</p>
        <p class="textShow">{{$content->text}}</p>
        <p class="authorShow">Autor: {{$content->user->name}}</p>
        <img src="{{$photo}}">
    </div>
    {{-- para voltar --}}
    <button class="voltar"><a href="{{ URL::previous()}}">Voltar</a></button>

</body>
</html>
