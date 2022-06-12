<?php
session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases Matemáticas</title>
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
    <h1 class="titulo" style="text-shadow: #0CB310 5px 3px;">Clases Matemáticas</h1>
</header>
<main>

    <section class="services contenedor" id="servicio">
        <h2 class="subtitulo">Clases de Matemáticas</h2>
        <div class="contenedor-servicio">
            <img src="../../img/mate.png" alt="">
            <div class="checklist-servicio">
                <div class="service" align=justify>
                    <br>

            <h1 class="n-service"><span class="number">1</span>Sumas:</h1> <p>Para acceder a esta clase
            presiona abajo en el botón llamado "Sumas".</p>
            <a href="temas/sumas.php">Sumas</a>

            <br>
            <h1 class="n-service"><span class="number">2</span>Restas:</h1> <p>Para acceder a esta clase
            presiona abajo en el botón llamado "Restas".</p>
            <a href="temas/restas.php">Restas</a>

            <br>
            <h1 class="n-service"><span class="number">3</span>Multiplicación:</h1> <p>Para acceder a esta clase
            presiona abajo en el botón llamado "Multiplicación".</p>
            <a href="temas/multiplicacion.php">Multiplicación</a>

            <br>
            <h1 class="n-service"><span class="number">4</span>División:</h1> <p>Para acceder a esta clase
            presiona abajo en el botón llamado "División".</p>
            <a href="temas/division.php">División</a>

            <br>
            <h1 class="n-service"><span class="number">5</span>Fracciones:</h1> <p>Para acceder a esta clase
            presiona abajo en el botón llamado "Fraciones".</p>
            <a href="temas/fracciones.php">Fracciones</a>

            <br>
            <h1 class="n-service"><span class="number">6</span>Potencias:</h1> <p>Para acceder a esta clase
            presiona abajo en el botón llamado "Potencias".</p>
            <a href="temas/potencias.php">Potencias</a>

            <br>

                </div>
            </div>
        </div>
    </section>

<div class="contenido">
    <div class="titulo" style="font-size: 25px;"><h1>Guías Pedagógicas de Matemáticas:</h1></div>
    <div class="texto" style="font-size: 20px;"><h1>Guías PDF:</h1> <br>

            <a href="PDF/matematicas.pdf" target="blank" style="cursor: pointer"><span class="number"style="color: #000000;">1</span>Guía de todas las clases</a>
            <br>
        </div>  
    </div>
</div>

<br>
<br>

<div class="contenido">
    <div class="titulo" style="font-size: 25px;"><h1>Practica rápida:</h1></div>
    <div class="texto" style="font-size: 20px;"><h1>Ejercicios de practica:</h1> <br>

            <a href="quiz/matematica/index.php" target="blank" style="cursor: pointer"><span class="number"style="color: #000000;">1</span>Guía de ejercicios</a>
            <br>
        </div>  
    </div>

</main>


<script src="../../js/menu.js"></script>
<script src="../../js/lightbox.js"></script>
</body>
</html>