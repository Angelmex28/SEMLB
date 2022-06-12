<?php
session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases Lectura</title>
    <link rel="stylesheet" type="text/css" href="../../css/estilos2.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="url('https://fonts.googleapis.com/css2?family=Courgette&display=swap')">
</head>
<body>

    <header class="header" id="inicio">
    <img src="../../img/hamburguesa.svg" alt="" class="hamburger">
    <nav class="menu-navegacion">
        <h1><a href="../index.php">Estudiantes</a></h1>
         <h1>Clases</h1>
        <a href="matematica.php" style="font-size: 20px;">Matemáticas</a>
        <a href="lectura.php" style="font-size: 20px;">Lectura</a>
    </nav>
    <div class="contenedor head">
    <h1 class="titulo" style="text-shadow: #0CB310 5px 3px;">Clases Lectura</h1>
</header>


<main>

    <section class="services contenedor" id="servicio">
        <h2 class="subtitulo">Clases de Lectura</h2>
        <div class="contenedor-servicio">
            <img src="../../img/book2.png" alt="">
            <div class="checklist-servicio">
                <div class="service" align=justify>
                    <br>

            <h1 class="n-service"><span class="number">1</span>¿Qué es la Lectura?:</h1> <p>Para acceder a esta clase
            presiona abajo en el botón llamado "¿Qué es la Lectura?".</p>
            <a href="temas/lectura.php">¿Qué es la Lectura?</a>

            <h1 class="n-service"><span class="number">2</span>Consejos de Lectura:</h1> <p>Para acceder a esta clase
            presiona abajo en el botón llamado "Consejos de Lectura".</p>
            <a href="temas/consejos.php">Consejos de Lectura</a>

            <br>
            <h1 class="n-service"><span class="number">3</span>Signos de Puntuación:</h1> <p>Para acceder a esta clase
            presiona abajo en el botón llamado "Signos de Puntuación".</p>
            <a href="temas/signos.php">Signos de Puntuación</a>

            <br>
            <h1 class="n-service"><span class="number">4</span>Ortografía:</h1> <p>Para acceder a esta clase
            presiona abajo en el botón llamado "Ortografía".</p>
            <a href="temas/ortografia.php">Ortografía</a>

            <br>

                </div>
            </div>
        </div>
    </section>

<div class="contenido">
    <div class="titulo" style="font-size: 25px;"><h1>Guías Pedagógicas de Lectura:</h1></div>
    <div class="texto" style="font-size: 20px;"><h1>Guías PDF:</h1> <br>

            <a href="PDF/lectura.pdf" target="blank" style="cursor: pointer"><span class="number"style="color: #000000;">1</span>Guía de todas las clases</a>
            <br>
        </div>  
    </div>

    <div class="contenido">
    <div class="titulo" style="font-size: 25px;"><h1>Practica rápida:</h1></div>
    <div class="texto" style="font-size: 20px;"><h1>Ejercicios de practica:</h1> <br>

            <a href="quiz/lectura/index.php" target="blank" style="cursor: pointer"><span class="number"style="color: #000000;">1</span>Guía de ejercicios</a>
            <br>
        </div>  
    </div>
    
</div>


</main>


<script src="../../js/menu.js"></script>
<script src="../../js/lightbox.js"></script>
</body>
</html>