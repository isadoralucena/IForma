<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="{{url('/HomeUser')}}" method="POST">
    @csrf
        <label for="email">E-mail: </label><input type="email" name="email" placeholder="abc@escolar.ifrn.edu.br">
        <label for="pass">Senha: </label><input type="password" name="pass" placeholder="password">
        <button>Acessar</button>
    </form>
</body>
</html>