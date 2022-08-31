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
    <form action="{{url('/login')}}" method="POST">
        @csrf
        <label for="email">E-mail: </label>
        <input required type="email" name="email" placeholder="nome@escolar.ifrn.edu.br">
        <label for="password">Senha: </label>
        <input required type="password" name="password" placeholder="Senha">
        <button>Acessar</button>
    </form>
</body>
</html>