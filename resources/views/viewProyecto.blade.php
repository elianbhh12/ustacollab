<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ver proyecto</title>
</head>
<body>
    {{$data->titulo}}
    {{$data->descripcion}}

    <iframe height="800" width="800" src="/assets/{{$data->file}}"></iframe>
</body>
</html>