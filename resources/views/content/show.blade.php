<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>
<body>
    <p>
        <a href="{{url('/contents/' . $content->id)}}">
            {{$content->title}}
        </a>
    </p>
    <p>
        <a href="{{url('/contents/', ['id'=>$content->id])}}">
            {{$content->text}}
        </a>
    </p>
</body>
</html>