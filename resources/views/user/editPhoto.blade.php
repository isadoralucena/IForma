<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <title>Create</title>
</head>
<body>
    <div class="edit">
        <div class="register padding center texts">
        <form enctype="multipart/form-data" action="{{url('/contents/editPhoto', ['user'=>$user->id])}}" method="POST">
            @csrf
            @method('PUT')
            <label for="title" class="titleRegister"><b>Foto</b></label>
            <input name="photo" type="file" accept="image/png, image/jpeg, image/jpg">

            <button class="buttonRegister bigButton">Atualizar</button>
        </form>
        </div>
    </div>

    <button class="voltar"><a href="{{ URL::previous()}}">Voltar</a></button>
</body>
</html>
