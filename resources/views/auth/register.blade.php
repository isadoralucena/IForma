<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="{{asset('css/style.css') }}" rel="stylesheet" type="text/css" > 
    <script src="{{asset('js/validate.js')}}"></script>
</head>

    <div class="register padding center texts ">
            <h1 class="titles3">Cadastre um usuário</h1>
            <form onsubmit="return validate();" action="{{url('/register')}}" method="POST">
            @csrf
                <label class="titleRegister" for="name">Nome: </label>
                <input required type="text" name="name" placeholder="Nome">
                
                <label class="titleRegister" for="date">Data de nascimento: </label>
                <input required type="date" name="date" placeholder="Data de nascimento">
                
                <label class="titleRegister" for="email">E-mail: </label>
                <input required type="email" name="email" placeholder="nome@escolar.ifrn.edu.br">
                
                <label class="titleRegister" for="password">Senha: </label>
                <input required id="password" type="password" name="password" placeholder="Senha">

                <label class="titleRegister" for="password">Confirme sua senha: </label>
                <input required id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirme senha">
                
                
                <label class="titleRegister" for="userType">Insira o tipo de usuário: </label>
                <input required type="text" name="userType" placeholder="Insira o tipo de usuario">
                <div class="buttonRegister">
                    <button type="submit" class="bigButton">Registrar</button> 
                </div>
               
            </form>
            {{-- para voltar --}}
            
            <button class="voltar">
                <a href="{{ URL::previous()}}">Voltar</a>
            </button>

            
            
    </div>
    
</body>
</html>