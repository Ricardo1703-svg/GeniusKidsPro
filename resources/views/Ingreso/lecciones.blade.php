<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/formu.css">
    <title>Lista de Lecciones</title>
</head>

<body>
    <header>
        @include('includes.navbar')
    </header>
    <br>
    <a href="/secciones" class="btn">Regresar</a>
    <br>
    <center>
        <h1>Lista de Lecciones</h1>
        <form action="{{ route('lecciones.store') }}" method="POST">
            @csrf
            <input class="campos" type="text" name="nombreLeccion" placeholder="Nombre de la lección">
            <br>
            <textarea name="descripcion" id="descripcion" placeholder="Descripción"></textarea>
            <br>
            <select class="campos" name="nivel">
                <option value="">Selecciona un nivel</option>
                @foreach ($niveles as $nivel)
                    <option value="{{ $nivel->idNivel }}">{{ $nivel->nombreNivel }}</option>
                @endforeach
            </select>
            <button class="btn" type="submit">Crear Lección</button>
        </form>
        <br>
        <br>
    </center>
    <br>
    <center>
    <h1>Lista de Lecciones</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Nivel</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lecciones as $leccion)
                    <tr>
                        <td>{{ $leccion->idLeccion }}</td>
                        <td>{{ $leccion->nombreLeccion }}</td>
                        <td>{{ $leccion->descripcion }}</td>
                        <td>{{ $nivel->nombreNivel }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </center>
    @include('includes.espacios')
    @include('includes.footer')
</body>
</html>