<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" > 
</head>
<body class="register2">

     <div class="headerHome">   
            <img  onclick="window.location='{{ url('/contents/create')}}'" class="imgHome center" src="{{ asset('images/logo.png') }}">
    </div>
    <div class="center padding texts create1">

        <form action="{{url('/contents')}}" method="POST">
            @csrf
            <label for="title" class="create2"><b>Título</b></label>
            <input required type="title" name="title" id="title">
            <label for="text"><b>Texto</b></label>
            <textarea required type="text" name="text" id="text"></textarea>
            <button class="littleButton" type="submit">Criar</button>
        </form>
    </div>
</body>
</html>