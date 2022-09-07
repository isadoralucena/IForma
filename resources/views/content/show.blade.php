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
    <div class="center">
        <p>{{$content->title}}</p>
        <p>{{$content->text}}</p>
        <b>Autor: {{$content->user->name}}</b>
    </div>
    {{-- para voltar --}}
    <a href="{{ URL::previous()}}">Voltar</a>
</body>
</html>