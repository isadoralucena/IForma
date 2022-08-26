<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <form action="{{url('/contents'), ['content'=>$content->id])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Título</label>
        <input required type="title" name="title" id="title" value="{{$content->title}}">
        <label for="text">Texto</label>
        <input required type="text" name="text" id="text" value="{{$content->text}}">
        <button type="submit">Criar</button>
    </form>
</body>
</html>