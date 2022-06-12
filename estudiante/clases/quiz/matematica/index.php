<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="url('https://fonts.googleapis.com/css2?family=Courgette&display=swap')">
</head>
<body>

    <div class="cabecera">
    <div class="logo"> <h1>SEMLB / Quiz de Matemáticas</h1> </div>
    <div class="logo"> <a href="../../../index.php" style="color: #1D8230;"> <h1>Inicio</h1></a> </div>
    </div>

    <div class="contenido">
    <div class="titulo" style="font-size: 20px;"><h1>Prueba rápida de matemáticas</h1></div>
    <div><h2 class="texto">Resuelve los siguientes ejercicios utilizando la suma, resta, multiplicación y la division:</h2></div>
</div>

    <div id="test" style="text-align: center; padding: 1em 4em 0em 4em; font-size: 20px;"></div>
    <button id="boton" style="width:200px;height:70px;border-radius: 10px;border: solid #1D8230 5px;background-color: #0BF6CD;font-size: 17px; cursor: pointer; transition: all 0.4s linear; display: block; margin: 2em auto;">Mostrar resultado</button>
    <div id="resultado" style="text-align: center; font-size: 20px;"></div> <br><br>
    <script src="./script.js"></script>
</body>
</html>