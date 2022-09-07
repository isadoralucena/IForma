<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" > 
</head>
<body>
            <div class ="login"> 
                <div class="center">               
                    <img  onclick="window.location='{{ url('/')}}'" class="imgLogo" src="{{ asset('images/logo.png') }}">
                </div>
            </div>
                 
    <div class="login3">
        <div class="padding center texts2 login2">

            <img  onclick="window.location='{{ url('/')}}'" class="imgLogin" src="{{ asset('images/logo.png') }}">
                
            <h1 class="titles2 logLogin">Login</h1>
            <form action="{{url('/login')}}" method="POST">
                @csrf
                <label for="email"><b>E-mail: </b></label>
                <input required type="email" name="email" placeholder="nome@escolar.ifrn.edu.br" class="inputLogin">
                <label for="password"><b>Senha: </b> </label>
                <input required type="password" name="password" placeholder="Senha" class="inputLogin">
                <button class="littleButton buttonLogin">Acessar</button>
            </form>
        </div>
    </div>
    
</body>
    
</html>