@extends('layouts.layout')
@section('header')
@section('body')
<div class="users1">
    
<p class="centerA">
    <button class="bigButton" type="submit"><a href="{{url('/register')}}">Cadastro de usuários</a></button>
        
    </p>
    <div  class="centerTable">
        <table style="border: 1px solid black">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Tipo de usuário</th>
                    <th>Data de aniversário</th>
                    <th>Editar</th>
                    <th>Deletar</th>
                    <th>Mostrar tudo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    @if($item->userType === 1)
                        <td>Aluno</td>
                    @elseif($item->userType === 2)
                        <td>Prof</td>
                    @elseif($item->userType === 3)
                        <td>Admin</td>
                    @else
                        <td>{{$item->userType}}</td>
                    @endif
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
    </div>
    

@endsection
</div>
    