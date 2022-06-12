<?php
session_start();

if($_SESSION["usuario"] === null){
    header("Location: ../home.php");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido(a) <?php echo $_SESSION["usuario"];?></title>
    <link rel="stylesheet" type="text/css" href="../css/estilos2.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="url('https://fonts.googleapis.com/css2?family=Courgette&display=swap')">
</head>
<body>

    <header class="header" id="inicio">
    <img src="../img/hamburguesa.svg" alt="" class="hamburger">
    <nav class="menu-navegacion">
        <a href="index.php">Inicio</a>
        <a href="home.php">SEMLB</a>
         <h1>Clases</h1>
        <a href="clases/matematica.php">Matemáticas</a>
        <a href="clases/lectura.php">Lectura</a>
        <h1>Evaluaciones</h1>
        <a href="evaluaciones/matematica.php">Matemáticas</a>
        <a href="evaluaciones/lectura.php">Lectura</a>
    </nav>
    <div class="contenedor head">
    <spam class="titulo">Bienvenido(a) <?php echo $_SESSION["usuario"];?></spam>
</header>
<main>

    <section class="services contenedor" id="servicio">
        <h2 class="subtitulo">¿Cómo acceder a las clases o evaluaciones en SEMLB?</h2>
        <div class="contenedor-servicio">
            <img src="../img/ROB1.png" alt="">
            <div class="checklist-servicio">
                <div class="service">
                    <br>
                    <p> Hola usuarios, soy yo su amigo ROB, el día de hoy les enseñaré sobre SEMLB,
                    el cual es un software educativo cuya función es enseñar y
                    reforzar los conocimientos de los usuarios en cuanto a matemáticas y lectura
                    básica, ahora sabiendo lo antes mencionado surge la pregunta, ¿Cómo podemos acceder
                     a las clases o evaluaciones en SEMLB? y la respuesta a esto es muy sencilla y procederé
                    explicarla a continuación con la ayuda de una serie de imagenes, las cuales se encontrarán
                    debidamente señaladas.</p>
                    <br>
                    <p> Una vez se acceda a las clases o evaluaciones se podrá visualizar de manera sencilla
                    el contenido de la misma de la manera más sencilla y didactica posible para de esta manera
                    poder ayudarlos a aprender nuevos conocimientos de una manera divertida. </p>
                    <br>
                    <p>Sin nada más que decir, espero todos disfrutemos de este programa juntos
                    queridos amigos y espero ser de suficiente ayuda como para ayudarlos a demostrar 
                     que todos y cada uno son personas increibles y unos genios que pueden lograr todo
                      aquello que se propongan. Así que empecemos este viaje por el maravilloso universo
                    del conocimiento juntos.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery" id="portafolio">
        <div class="contenedor">
            <h2 class="subtitulo">Pasos para acceder a clases o evaluaciones</h2>
            <div class="contenedor-galeria">
                <img src="../img/dos.jpg" alt="" class="img-galeria">
                <img src="../img/dos.jpg" alt="" class="img-galeria">
                <img src="../img/dos.jpg" alt="" class="img-galeria">
                <img src="../img/dos.jpg" alt="" class="img-galeria">
                <img src="../img/dos.jpg" alt="" class="img-galeria">
                <img src="../img/dos.jpg" alt="" class="img-galeria">
            </div>
        </div>
    </section>

    <section class="imagen-light">
        <img src="../img/close.svg" alt="" class="close">
        <img src="" alt="" class="agregar-imagen">
    </section>

    <section class="contenedor" id="expertos">
        <h2 class="subtitulo">Lo que aprenderas con SEMLB</h2>
        <section class="experts">
            <div class="cont-expert">
                <img src="../img/book.jpg" alt="">
                <h3 class="n-expert">Lectura Básica</h3>
            </div>
            <div class="cont-expert">
                <img src="../img/mate.png" alt="">
                <br>
                <br>
                <h3 class="n-expert">Matemática Básica</h3>
            </div>
            <div class="cont-expert">
                <img src="../img/10.png" alt="">
                <h3 class="n-expert">Pruebas de Evaluación</h3>
            </div>
        </section>
    </section>

</main>


<script src="../js/menu.js"></script>
<script src="../js/lightbox.js"></script>
</body>
</html>