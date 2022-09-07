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
    <div class="home">
        <div class="headerHome">   
                <img  onclick="window.location='{{ url('/')}}'" class="imgHome center" src="{{ asset('images/logo.png') }}">
        </div>
        <div class="center textHome home">
            <h1 class="titles titleHome">Bem-vindo</h1>
            <h1 >IForma, a plataforma que informa!</h1>
            <form action="{{url('/login')}}" method="GET">
                <button class="bigButtonHome" id="buttonHome">Login</button>            
            </form>
        </div> 
        <img  onclick="window.location='{{ url('/')}}'" class="imgHome2" src="{{ asset('images/detail.png') }}">
    </div> 
</body>
</html>