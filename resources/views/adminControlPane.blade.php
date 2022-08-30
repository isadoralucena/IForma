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
    <a href="{{url('/contents/create')}}">Cadastro de conteudo</a>
    <table style="border: 1px solid black">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Autor</th>
                <th>Editar</th>
                <th>Deletar</th>
                <th>Mostrar tudo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contents as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->text}}</td>
                <td>{{$item->user->name}}</td>
                <td>
                    <a href="{{url('/contents/' . $item->id. '/edit')}}">Editar</a>
                </td>
                <td>
                    <form action="{{url('/contents/' . $item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>
                </td>
                <td>
                    <form action="{{url('/contents/' . $item->id)}}" method="GET">
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