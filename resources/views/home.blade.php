<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" > 
</head>
<body> 
    <div class="center texts ">
        <h1 class="titles">Bem-vindo</h1>
        <form action="{{url('/login')}}" method="GET">
            <button class="littleButton">Login</button>            
        </form>
    </div> 
</body>
</html>