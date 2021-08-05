Formulario de creación de mensaje

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Jose Alfredo Dzul Hau">
    <meta name="description" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Formulario de contacto</title>
</head>
<body>
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h1>Enviar Mensaje</h1>
            <form action="{{ url('/mensaje') }}" class="Enviar" method="POST" >
            @csrf

                <div>
                    <label for="Nombre">Nombre</label>
                    <input type="text" name="Nombre"  id="Nombre" class="form-control" placeholder="Escribe tú nombre">
                </div>

                <div>
                <label for="Telefono">Telefono</label>
                    <input type="text" name="Telefono" id="Telefono" class="form-control" placeholder="Escribe tú teléfono">
                </div>

                <div>
                <label for="Mensaje">Mensaje</label>
                    <textarea name="Mensaje" id= "Mensaje" class="form-control" placeholder="Escribe tú mensaje aquí"></textarea>
                </div>
                <BR>
                <div class="text-center">
                    <input type="submit" onclick="return confirm('Mensaje enviado exitosamente!')" value="Enviar mensaje" class="btn btn-primary btn-lg btn-hover">
                </div>
            </form>
            <table class="table col 12 table-responsive table table-dark table-hover">
                <thead>
                    <tr>
                        <td scope="col">#</td>
                        <td scope="col">Nombre</td>
                        <td scope="col">Mensaje</td>
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
        </div>
        
    </div>
 </div>
</body>
</html>