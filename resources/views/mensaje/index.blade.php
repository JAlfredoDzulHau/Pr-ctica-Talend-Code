mostrar el mensaje:)
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Mensaje</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $mensajes as $mensaje )
        <tr>
            <td>{{ $mensaje->id}}</td>
            <td>{{ $mensaje->Nombre}}</td>
            <td>{{ $mensaje->Mensaje}}</td>
        </tr>
        @endforeach
    </tbody>
</table>