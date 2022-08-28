<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <form action="{{url('/createContents')}}" method="POST">
        @csrf
        <label for="title">Título</label>
        <input required type="title" name="title" id="title">
        <label for="text">Texto</label>
        <input required type="text" name="text" id="text">
        <button type="submit">Criar</button>
    </form>
</body>
</html>