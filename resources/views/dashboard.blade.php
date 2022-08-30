@extends('layouts.layout')
@section('header')
<h1>Dashboard dos usuários </h1>
<a href="{{url('/contents/create')}}">Cadastro de conteudo</a>


{{-- @foreach ($contents as $item)
    <div style="border: 1px solid red; width: 80%; height: 100px; overflow: hidden; margin-top: 10px;">
        <h1 style="margin: 5px 5px 5px 5px;padding: 0;">{{$item->title}}</h1>
        <p>{{$item->text}}</p>
    </div>
@endforeach --}}

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
                {{-- <form action="{{url('/contents/' . $item->id. '/show')}}" method="POST"> --}}
                <form action="{{url('/contents/' . $item->id)}}" method="GET">
                    @csrf
                    <button type="submit">Mostrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection