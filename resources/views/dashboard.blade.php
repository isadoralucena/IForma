@extends('layouts.layout')
@section('header')
<h1>Dashboard de um professor e talvez um aluno</h1>
<a href="{{url('/createContents')}}">Cadastro de conteudo</a>

@foreach ($content as $item)
    <div style="border: 1px solid red; width: 80%; height: 100px; overflow: hidden; margin-top: 10px;">
        <h1 style="margin: 5px 5px 5px 5px;padding: 0;">{{$item->title}}</h1>
        <p>{{$item->text}}</p>
    </div>
@endforeach

@endsection