<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" > 
</head>
<body>
    <div class="center padding texts">
        <form action="{{url('/contents')}}" method="POST">
            @csrf
            <label for="title">Título</label>
            <input required type="title" name="title" id="title">
            <label for="text">Texto</label>
            <textarea required type="text" name="text" id="text"></textarea>
            <button class="littleButton" type="submit">Criar</button>
        </form>
    </div>
</body>
</html>