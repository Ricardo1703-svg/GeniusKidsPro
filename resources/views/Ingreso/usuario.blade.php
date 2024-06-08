<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/formu.css">
    <title>Registro y Lista de Usuarios</title>
</head>

<body>
    <header>
        @include('includes.navbar')
    </header>
    <br>
    <a href="/secciones" class="btn">Regresar</a>
    <br>
    <center>
        <h1>Registro de Alumnos</h1>
        @if(isset($usuarios) && $usuarios->count())

        @else
        @endif
        <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf
            <input class="campos" type="text" name="Nombre" id="Nombre" placeholder="Nombre">
            <input class="campos" type="number" name="Edad" id="Edad" placeholder="Edad">
            <input class="campos" type="text" name="Nivel_Educativo" id="Nivel_Educativo" placeholder="Nivel Educativo">
            <button class="btn" type="submit">Crear Usuario</button>
        </form>
        <br>
        <br>
        <h1>Lista de Alumnos</h1>
        @if(isset($usuarios) && $usuarios->count())
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Nivel Educativo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->ID_Usuario }}</td>
                            <td>{{ $usuario->Nombre }}</td>
                            <td>{{ $usuario->Edad }}</td>
                            <td>{{ $usuario->Nivel_Educativo }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
        @endif
    </center>
    @include('includes.espacios')
    @include('includes.footer')
</body>

</html>