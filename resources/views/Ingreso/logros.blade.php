<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/formu.css">
    <title>Crear Logro</title>
</head>

<body>
    <header>
        @include('includes.navbar')
    </header>
    <br>
    <a href="/secciones" class="btn">Regresar</a>
    <br>
    <center>
        <h2>Agregar Logro</h2>
        <form action="{{ route('logros.store') }}" method="POST">
            @csrf
            <select class="campos" name="ID_Usuario" id="ID_Usuario">
                <option value="">Selecciona un Usuario</option>
                @foreach ($usuarios as $usuario)
                    <option value="{{ $usuario->ID_Usuario }}">{{ $usuario->Nombre }}</option>
                @endforeach
            </select>

            <select class="campos" name="ID_Actividad" id="ID_Actividad">
                <option value="">Selecciona una Actividad</option>
                @foreach ($actividades as $actividad)
                    <option value="{{ $actividad->ID_Actividad }}">{{ $actividad->Tipo_Actividad }}</option>
                @endforeach
            </select>

            <label for="Fecha_Logro">Fecha de Logro:</label>
            <input class="campos" type="date" name="Fecha_Logro" id="Fecha_Logro">

            <button class="btn" type="submit">Crear Logro</button>
        </form>
        <br>
        <br>
        <br>
        <h2>Mostrar Logros</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Actividad</th>
                    <th>Fecha de Logro</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($logros as $logro)
                    <tr>
                        <td>{{ $logro->ID_Logro }}</td>
                        <td>{{ $logro->usuario->Nombre }}</td>
                        <td>{{ $logro->actividad->Tipo_Actividad }}</td>
                        <td>{{ $logro->Fecha_Logro }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </center>
    @include('includes.espacios')
    @include('includes.footer')
</body>

</html>