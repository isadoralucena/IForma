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
    <div class="center ">
        <p class="textShow">{{$user->name}}</p>
        <p class="textShow">{{$user->date}}</p>
        <p class="textShow">{{$user->email}}</p>
        <p class="textShow">{{$user->userType}}</p>
    </div>
    
    {{-- para voltar --}}
    <button class="voltar"><a href="{{ URL::previous()}}">Voltar</a></button>

</body>
</html>