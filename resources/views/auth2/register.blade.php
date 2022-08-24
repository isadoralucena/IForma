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
        <label for="nome">Nome: </label><input type="text" name="nome" placeholder="Nome">
        <label for="date">Data de nascimento: </label><input type="date" name="date" placeholder="Data de nascimento">
        <label for="email">E-mail: </label><input type="email" name="email" placeholder="abc@escolar.ifrn.edu.br">
        <label for="pass">Senha: </label><input type="password" name="pass" placeholder="Senha">
        <label for="tipoUsuario">Insira o tipo de usuário: </label><input type="text" name="tipoUsuario" placeholder="Insira o tipo de usuario">
        <button>Registrar</button>
    </form>
</body>
</html>