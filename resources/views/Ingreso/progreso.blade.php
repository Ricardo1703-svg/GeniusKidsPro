<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/formu.css">
    <title>Ingresar Progreso</title>
</head>
<body>
    <header>
        @include('includes.navbar')
    </header>
    <br>
    <a href="/secciones" class="btn">Regresar</a>
    <br>
    <center>
    @if(session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('progreso.store') }}" method="POST">
        @csrf
        <select class="campos" name="ID_Usuario" id="ID_Usuario">
            <option value="">Selecciona un Usuario</option>
            @foreach ($usuarios as $usuario)
                <option value="{{ $usuario->ID_Usuario }}">{{ $usuario->Nombre }}</option>
            @endforeach
        </select>

        <select class="campos" name="idLeccion" id="idLeccion">
            <option value="">Seleccione una Lección</option>
            @foreach ($lecciones as $leccion)
                <option value="{{ $leccion->idLeccion }}">{{ $leccion->nombreLeccion }}</option>
            @endforeach
        </select>

        <input class="campos" type="number" name="puntuacion" id="puntuacion" placeholder="Puntuación" required>

        <label for="fechaCompletada">Fecha Completada:</label>
        <input class="campos" type="date" name="fechaCompletada" id="fechaCompletada" required>

        <button class="btn" type="submit">Crear Progreso</button>
    </form>
    
    <h2>Progresos</h2>
    @if(isset($progresos) && $progresos->count())
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Lección</th>
                <th>Puntuación</th>
                <th>Fecha Completada</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($progresos as $progreso)
                <tr>
                    <td>{{ $progreso->idProgreso }}</td>
                    <td>{{ $progreso->usuario->Nombre }}</td>
                    <td>{{ $progreso->leccion->nombreLeccion }}</td>
                    <td>{{ $progreso->puntuacion }}</td>
                    <td>{{ $progreso->fechaCompletada }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    </center>
    @include('includes.espacios')
    @include('includes.footer')
</body>
</html>
