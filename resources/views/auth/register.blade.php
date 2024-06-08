<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app2.css">
    <title>Registro</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-in">
            <span></span>
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('register') }}" method="POST">
                <h1>Registrate aqui</h1>
                <br>
                @csrf
                <input placeholder="Nombre" type="text" id="name" name="name" value="{{ old('name') }}" required>
                <input placeholder="Email" type="email" id="email" name="email" value="{{ old('email') }}" required>
                <input placeholder="Contraseña" type="password" id="password" name="password" required>
                <input placeholder="Confirmar Contraseña" type="password" id="password_confirmation"
                    name="password_confirmation" required>
                <button type="submit">Registrar</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <h1>Bienvenido de Nuevo!</h1>
                    <img src="img/genius.png" alt="Login GeniusKid">
                    <a href="{{ route('login') }}" class="btnSecc">
                        <span>Ingresa aquí</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>