<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel de controle do administrador</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" > 
</head>
<body> 
    <a href="{{url('/register')}}">Cadastro de user</a>

    <table style="border: 1px solid black">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Tipo de usuário</th>
                <th>Data de aniversário</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->userType}}</td>
                <td>{{$item->date}}</td>
                <td>
                    <a href="{{url('/users/' . $item->id. '/edit')}}">Editar</a>
                </td>
                <td>
                    <form action="{{url('/users/' . $item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>
                </td>
                <td>
                    <form action="{{url('/users/' . $item->id)}}" method="GET">
                        @csrf
                        <button type="submit">Mostrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>