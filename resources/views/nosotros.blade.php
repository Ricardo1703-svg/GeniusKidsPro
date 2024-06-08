<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Nosotros</title>
</head>
<body>
    <header>
        @include('includes.navbar')
    </header>
    <br>
    <br>
    <br>
    <div class="nosotros">
        <div class="tarjeta">
            <center>
            <br>
                <img src="/img/perf.png" class="imagen-circular" alt="Imagen de perfil">
                <h2 class="titulo">RICARDO ALEXANDER</h2>
                <h2 class="titulo">ALVAREZ PORTILLO</h2>
            </center>
            <div class="cuerpo">
                <center>
                    <p>SMSS054322</p>
                </center>
                <center>
                    <p>CEL: +503 6002-3235</p>
                </center>
                <center>
                <p>Puedes contactarme por correo electrónico:</p>
                <a href="mailto:ralvarich054322@gmail.com">ralvarich054322@gmail.com</a>
                </center>
            </div>
        </div>

        <div class="nosotros">
            <div class="tarjeta">
                <center>
                <br>
                    <img src="/img/perf.png" class="imagen-circular" alt="Imagen de perfil">
                    <h2 class="titulo">EDVIN ABELARDO</h2>
                    <h2 class="titulo">GUEVARA VÁSQUEZ</h2>
                </center>
                <div class="cuerpo">
                    <center>
                        <p>SMSS094722</p>
                    </center>
                    <center>
                    <p>CEL: +503 7068-9856</p>
                </center>
                <center>
                <p>Puedes contactarme por correo electrónico:</p>
                <a href="mailto:eabelar094722@gmail.com">eabelar094722@gmail.com</a>
                </center>
                </div>
            </div>

            <div class="nosotros">
                <div class="tarjeta">
                    <center>
                    <br>
                        <img src="/img/perf.png" class="imagen-circular" alt="Imagen de perfil">
                        <h2 class="titulo">LUISA FERNANDA</h2>
                        <h2 class="titulo">MEDRANO CRUZ</h2>
                    </center>
                    <div class="cuerpo">
                        <center>
                            <p>SMSS037022</p>
                        </center>
                        <center>
                            <p>CEL: +503 6785-9874</p>
                        </center>
                        <center>
                            <p>Puedes contactarme por correo electrónico:</p>
                            <a href="mailto:fmedrano037022@gmail.com">fmedrano037022@gmail.com</a>
                        </center>
                    </div>
                </div>

                <div class="nosotros">
                    <div class="tarjeta">
                        <center>
                        <br>
                            <img src="/img/perf.png" class="imagen-circular" alt="Imagen de perfil">
                            <h2 class="titulo">JEISON BALDOMAR</h2>
                            <h2 class="titulo">VENTURA SORTO</h2>
                        </center>
                        <div class="cuerpo">
                            <center>
                                <p>SMSS135522</p>
                            </center>
                            <center>
                                <p>CEL: +503 3575-8412</p>
                            </center>
                        <center>
                            <p>Puedes contactarme por correo electrónico:</p>
                            <a href="mailto:jventura135522@gmail.com">jventura135522@gmail.com</a>
                        </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.espacios')
</body>
@include('includes.footer')
</html>