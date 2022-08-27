<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    
</head>
<body>
    <h1>Cadastre um usuário!</h1>
    <form action="{{url('/register')}}" method="POST">
        @csrf
            <label for="name">Nome: </label>
            <input required type="text" name="name" placeholder="Nome">
            <label for="date">Data de nascimento: </label>
            <input required type="date" name="date" placeholder="Data de nascimento">
            <label for="email">E-mail: </label>
            <input required type="email" name="email" placeholder="nome@escolar.ifrn.edu.br">
            <label for="password">Senha: </label>
            <input required id="password" type="password" name="password" placeholder="Senha">
            <label for="password" class="label">Confirme sua senha</label>
            <label for="userType">Insira o tipo de usuário: </label>
            <input required type="text" name="userType" placeholder="Insira o tipo de usuario">
            <button>Registrar</button>
        </form>
</body>
</html>