<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/style.css') }}" rel="stylesheet" type="text/css" > 
    <title>Create</title>
</head>
<body>
    <div class="edit">
        <div class="register padding center texts">
        <form action="{{url('/users', ['user'=>$user->id])}}" method="POST">
            @csrf
            @method('PUT')
            <label class="titleRegister"for="name">Nome: </label>
            <input required type="text" name="name" placeholder="Nome" value="{{$user->name}}">
            
            <label class="titleRegister"for="date">Data de nascimento: </label>
            <input required type="date" name="date" placeholder="Data de nascimento" value="{{$user->date}}">
            
            <label class="titleRegister"for="email">E-mail: </label>
            <input required type="email" name="email" placeholder="nome@escolar.ifrn.edu.br" value="{{$user->email}}">
            
            <label class="titleRegister" for="userType">Insira o tipo de usuário: </label>
            <input required type="text" name="userType" placeholder="Insira o tipo de usuario">
            
            <button class="buttonRegister bigButton">Registrar</button>
        </form>
        </div>
    </div>

    <button class="voltar"><a href="{{ URL::previous()}}">Voltar</a></button>
</body>
</html>