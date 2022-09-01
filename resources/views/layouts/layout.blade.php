<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <p>Pessoa logada: {{Auth::user()->name}}</p>
    <form action="{{url('/logout')}}" method="POST">
        @csrf
        <button type="submit" class="dropdown-item">sair</button>                                    
    </form>
    @if(Auth::user()->userType === 2)
        <form action="{{url('/contents/teachercontrolpane')}}" method="GET">
            <button type="submit">Painel de controle do professor</button>
        </form>
    @endif    
    @if(Auth::user()->userType === 3)
        <form action="{{url('/contents/admincontrolpanecont')}}" method="GET">
            <button type="submit">Painel de controle do administrador- conteúdos</button>
        </form>
        <a href="{{url('/register')}}">Cadastros de usuários</a>

        <form action="{{url('/users')}}" method="GET">
            <button type="submit">Painel de controle do administrador- users</button>
        </form>
    @endif
    @yield('header')
</body>
</html>