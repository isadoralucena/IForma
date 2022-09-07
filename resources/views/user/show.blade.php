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
        <p>{{$user->name}}</p>
        <p>{{$user->date}}</p>
        <p>{{$user->email}}</p>
        <p>{{$user->userType}}</p>
    </div>

    
    {{-- para voltar --}}
    <div class="show">
        <button class="voltar"><a href="{{ URL::previous()}}">Voltar</a></button>
    </div>

    
    
</body>
</html>