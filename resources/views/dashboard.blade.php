@extends('layouts.layout')
@section('header')
@section('body')

@foreach ($contents as $item)
    <div onclick="window.location='{{url('/contents/' . $item->id)}}'" class="content">
        <h1 class="contentTitle">{{$item->title}}</h1>
        <p class="contentText">{{$item->text}}</p>
        <b class="contentAuthor">Autor: {{$item->user->name}}</b>
    </div>

@endforeach

@endsection