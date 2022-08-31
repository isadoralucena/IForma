@extends('layouts.layout')
@section('header')
<h1>Dashboard</h1>

@foreach ($contents as $item)
    <div style="border: 1px solid red; width: 80%; height: 100px; overflow: hidden; margin-top: 10px;">
        <h1 style="margin: 5px 5px 5px 5px;padding: 0;">{{$item->title}}</h1>
        <p style="margin: 0px">{{$item->text}}</p>
        <p>Autor: {{$item->user->name}}</p>
    </div>
@endforeach

@endsection