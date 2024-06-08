<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/formu.css">
    <title>Ingreso de Actividades</title>
</head>
<body>
    <header>
        @include('includes.navbar')
    </header>
    <br>
    <a href="/secciones" class="btn">Regresar</a>
    <br>
    <center>
    <h2>Agregar Nueva Actividad</h2>
    <form action="{{ route('actividades.store') }}" method="POST">
        @csrf
        <input class="campos" type="text" name="Tipo_Actividad" id="tipo_actividad" placeholder="Tipo de Actividad">
        <br>
        <textarea name="Descripcion" id="descripcion" placeholder="Descripción"></textarea>
        <br>
        <input class="campos" type="number" name="Edad_Recomendada" id="edad_recomendada" placeholder="Edad Recomendada">
        <br>
        <br>
        <button class="btn" type="submit">Guardar Actividad</button>
    </form>
    </center>
    <br>
    <br>
    <center>
        <h1>Lista de Actividades</h1>
        <table border>
            <thead>
            <tr>
                <th>ID</th>
                <th>Tipo de Actividad</th>
                <th>Descripción</th>
                <th>Edad Recomendada</th>
            </tr>
            </thead>
            <tbody>
                @foreach($actividades as $actividad)
                <tr>
                    <td>{{ $actividad->ID_Actividad }}</td>
                    <td>{{ $actividad->Tipo_Actividad }}</td>
                    <td>{{ $actividad->Descripcion }}</td>
                    <td>{{ $actividad->Edad_Recomendada }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </center>
    @include('includes.espacios')
    @include('includes.footer')
</body>
</html>