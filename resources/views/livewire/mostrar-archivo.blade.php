<div>
    @foreach ( $data as $data )

    <tr>
<table border="1px">
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>archivo</th>
        <th>Ver</th>
        <th>Descargar</th>
    </tr>
    @foreach ( $data as $data )

    <tr>

        <td>{{$data->titulo}}</td>
        <td>{{$data->descripcion}}</td>
        <td><a href="{{url('/view',$data->$id)}}">ver</a></td>
        <td><a href="{{url('/download',$data->file)}}">Descargar</a></td>


        
    </tr>


        
    @endforeach

</table>
</div>
