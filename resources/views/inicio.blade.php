<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "/css/app.css">
    <title>GeniusKids</title>
</head>
<body>
    <header>
        @include('includes.navbar')
    </header>
    <br>
    <div class="contenedor_Home">
        <img src="/img/logo.png" class="izquierda">
        <div class="texto_Home2">
            <h1>Geniuskids</h1>
            <p>Nuestra App esta centrada en el aprendizaje
            infantil, diseñada para niños de 3 a 8 años. La aplicación se estructura en tres fases o niveles progresivos, cada uno compuesto por áreas fundamentales:
            Lenguaje, Ciencia, Matemáticas e Inglés. Este enfoque integral garantiza un desarrollo
            equilibrado y completo de las habilidades cognitivas de los niños, abarcando
            desde lo básico hasta niveles avanzados según la edad y el progreso individual
            de cada niño.</p>
        </div>
    </div>

    <br>
    <br>
    <br>
    <div class="contenedor_Home2">
        <div class="texto_Home2">
            <h2>Fases:</h2>
            <p>
                <b>Fase de Fundamentos (3-4 años):</b>
                En esta fase inicial, los niños se sumergirán
                en actividades diseñadas para establecer sólidas bases en lenguaje,
                matemáticas y ciencia. Se enfocará en conceptos simples y fundamentales,
                como el reconocimiento de letras, números, colores, formas básicas, y
                habilidades lingüísticas básicas como la pronunciación y la comprensión
                auditiva.
            </p>
            <p>
                <b>Fase Intermedia (5-6 años):</b>
                A medida que los niños crecen, la aplicación los
                desafiará con actividades más complejas y estimulantes. En la fase intermedia,
                se ampliarán los conocimientos adquiridos en la fase anterior, introduciendo
                conceptos más avanzados de lenguaje, matemáticas y ciencia. Se incluirán
                actividades de lectura inicial, escritura, operaciones matemáticas simples,
                secuencias lógicas, y resolución de problemas básicos.
            </p>
            <p>
                <b>Fase Avanzada (7-8 años):</b>
                La fase final de la aplicación está diseñada para
                consolidar y expandir aún más las habilidades cognitivas de los niños. Aquí,
                se presentarán desafíos más complejos en áreas de lenguaje y matemáticas,
                preparando a los niños para el siguiente nivel educativo. Se incluirán
                actividades de lectura avanzada, comprensión de textos, operaciones
                matemáticas más complejas, resolución de problemas avanzados, y
                pensamiento crítico.
            </p>
        </div>
        <img class="derecha" src="/img/OIP-removebg-preview.png" >
    </div>
    @include('includes.espacios')
</body>
@include('includes.footer')
</html>