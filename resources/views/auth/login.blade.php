<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app2.css">
    <title>Bienvenido</title>
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
            <form action="{{ route('login') }}" method="POST">
                <h1>Iniciar Sesion</h1>
                @csrf
                <input placeholder="Email" type="email" id="email" name="email" value="{{ old('email') }}" required>
                <input placeholder="Contraseña" type="password" id="password" name="password" required>
                <button type="submit">Ingresa</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <h1>Hola, Bienvenido!</h1>
                    <img src="img/genius.png" alt="Login GeniusKid">
                    <a href="{{ route('register') }}" class="btnSecc">
                        <span>Registrate aquí</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>