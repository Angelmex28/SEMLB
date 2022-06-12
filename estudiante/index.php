<?php 
session_start(); 
if($_SESSION["nombres"] === null){
    header("Location: ../home.php");
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido(a) <?php echo $_SESSION['nombres']; ?></title>
    <link rel="stylesheet" type="text/css" href="../css/estilos2.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="url('https://fonts.googleapis.com/css2?family=Courgette&display=swap')">
</head>
<body>
    

    <header class="header" id="inicio">
    <img src="../img/hamburguesa.svg" alt="" class="hamburger">
    <nav class="menu-navegacion">
        <h1><a href="index.php">Estudiantes</a></h1>
         <h1>Clases:</h1>
        <a href="clases/matematica.php" style="font-size: 20px;">Matemáticas</a>
        <a href="clases/lectura.php" style="font-size: 20px;">Lectura</a>
        <h1><a href="../cerrarsesion.php">Salir</a></h1>
    </nav>
    <div class="contenedor head">
    <h1 class="titulo" style="text-shadow: #0CB310 5px 3px;">Bienvenido(a) <?php echo $_SESSION['nombres']; ?></h1>
    </header>
    <main>

    <section class="services contenedor" id="servicio">
        <h2 class="subtitulo">¿Cómo acceder a las clases o evaluaciones en SEMLB?</h2>
        <div class="contenedor-servicio">
            <img src="../img/ROB1.png" alt="" width="200px" height="700px">
            <div class="checklist-servicio">
                <div class="service" align=justify>
                    <br>
                    <p> Hola <?php echo $_SESSION['nombres']; ?>, soy yo su amigo ROB, el día de hoy les enseñaré sobre SEMLB, el cual es un software educativo cuya función es enseñar y
                    reforzar los conocimientos de los usuarios en cuanto a matemáticas y lectura
                    básica, ahora sabiendo lo antes mencionado surge la pregunta, ¿Cómo podemos acceder
                     a las clases o evaluaciones en SEMLB?</p>
                     <br>
                     <p>La respuesta a esto es muy sencilla, en caso de querer ingresar a las clases, se debe ir a la parte superior derecha de la página y allí se ubica un ícono cuadrado blanco con tres líneas de color negro y este es el menú. En el menú se puede acceder a las clases ya sean de matemáticas o lectura, y de igual manera si presionamos en el botón llamado salir se cierra sesión de nuestra cuenta y nos lleva a la página principal.</p>
                    <br>
                    <p>En caso de querer presentar una evaluación, nos desplazamos más abajo en esta página y donde dice evaluaciones escogemos la evaluación y presionamos en presentar, una vez dentro completamos el cuestionario y le oprimimos el botón de presentar, y  con eso ya todo estaría hecho.</p>
                    <br>
                    <p>Sin nada más que decir, espero todos disfrutemos de este programa juntos y podamos lograr que aprendas y refuerces tus conocimientos en las asignaturas de matemáticas y lectura. Así que empecemos este viaje por el maravilloso universo
                    del conocimiento juntos.</p>
                </div>
            </div>
        </div>
    </section>
<?php 

	if (empty($_SESSION['id'])) {
		header("Location: ../inicioDeSesion");
	}else{
		
		?>
<br>

<div class="contenido">
    <div class="titulo"><h1>Estudiante</h1></div>
    <div class="texto"><h1>Información:</h1> <br>

            <h2>Nombre</h2>
            <p><?php echo $_SESSION['nombres']; ?></p>
            <br>
            <h2>Apellido</h2>
            <p><?php echo $_SESSION['apellidos']; ?></p>
            <br>
            <h2>Grado</h2>
            <p><?php echo $_SESSION['grado']; ?></p>
            <br>
            <h2>Sección</h2>
            <p><?php echo $_SESSION['seccion']; ?></p>
            <br>
        </div>  
    </div>
</div>

<br>
		<div class="columna2">
			<h1 style="color: #00B408;">Evaluaciones</h1><br>
			<table style="padding: 0 1em;">
			<thead>
				<style type="text/css">
					th{padding: 1em 1em;border: solid #ddd 1px}
					td{text-align: center;padding: 1em 0;border: solid #ddd 1px}
				</style>
				<th>Nombre del profesor</th>
				<th>Apellido del profesor</th>
				<th>Grado</th>
				<th>Sección</th>
				<th>Descripción</th>
				<th>Creado</th>
				<th>Cierre</th>
				<th>Presentar</th>
                <th>Calificación</th>
			</thead>
			
				<?php 
		$grado = $_SESSION['grado'];
		$seccion = $_SESSION['seccion'];
		$conn = mysqli_connect('localhost','root','','crud');

		$query = "SELECT * FROM evaluaciones WHERE (grado LIKE '%$grado%') AND (seccion LIKE '%$seccion%')";

		$result = mysqli_query($conn, $query);
		while ($row = mysqli_fetch_array($result)) {
            if ($row['publico']=="1") { ?>
                <tbody>
            <td><?php echo $row['nombres_profesor'];?></td>
            <td><?php echo $row['apellidos_profesor'];?></td>
            <td><?php echo $row['grado'];?></td>
            <td><?php echo $row['seccion'];?></td>
            <td><?php echo $row['descripcion'];?></td>
            <td><?php echo $row['creado'];?></td>
            <td><?php echo $row['cierre'];?></td>
            <td><a href="presentar/index.php?id=<?php echo $row['id']?>">Presentar </a></td>
            <td><a href="presentar/index.php?id=<?php echo $row['id']."#puntos"?>">Ver calificacion</a></td>
           
            
		

<?php } 

}

?>

            

		</tbody>
			
		</table>
		</div>


		<?php
	}
?>


    <section class="contenedor" id="expertos">
        <h2 class="subtitulo">Lo que aprenderás con SEMLB</h2>
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


<br><br><br>
<script src="../js/menu.js"></script>
<script src="../js/lightbox.js"></script>
</body>
</html>