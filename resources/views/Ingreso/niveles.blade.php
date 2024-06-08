<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/formu.css">
    <title>Crear Nivel</title>
</head>
<body>
    <header>
        @include('includes.navbar')
    </header>
    <br>
    <a href="/secciones" class="btn">Regresar</a>
    <br>
    <center>
    <h1>Crear Nivel</h1>
    <form action="{{ route('niveles.store') }}" method="POST">
        @csrf
        <input class="campos" type="text" id="nombreNivel" name="nombreNivel" placeholder="Nombre del Nivel">
        <br>
        <textarea id="descripcion" name="descripcion" placeholder= "Descripción"></textarea>
        <br>
        <input class="campos" type="text" id="imagen" name="imagen" placeholder="URL de Imagen">
        <br>
        <button class="btn" type="submit">Guardar</button>
    </form>
    <br>
    <br>
    </center>
    <center>
    <h1>Listado de Niveles</h1>
    <table border>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody>
            @foreach($niveles as $nivel)
            <tr>
                <td>{{ $nivel->idNivel }}</td>
                <td>{{ $nivel->nombreNivel }}</td>
                <td>{{ $nivel->descripcion }}</td>
                <td>{{ $nivel->imagen }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </center>
    @include('includes.espacios')
    @include('includes.footer')
</body>
</html>