<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostar archivo</title>
</head>
<body>
    

    <tr>
<table border="1px">
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Ver</th>
        <th>Descargar</th>
    </tr>
    @foreach ( $data as $data )

    <tr>

        <td>{{$data->titulo}}</td>
        <td>{{$data->descripcion}}</td>
        <td><a href="{{url('/view',$data->id)}}">ver</a></td>
        <td><a href="{{url('/download',$data->file)}}">Descargar</a></td>


        
    </tr>


        
    @endforeach

</table>
</body>
</html>