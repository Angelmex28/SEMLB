<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SEMLB</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="url('https://fonts.googleapis.com/css2?family=Courgette&display=swap')">
</head>

<body>

<header class="header">
	<nav class="navigation">
	<div class="container logo-nav-container">
	<img src="img/g.jpg" alt="" width="70px" height="70px" style="border-radius: 70px; padding-top: center;">
		<ul>
		<li><a href="home.php" style="font-size: 20px;">Registrarse o Iniciar Sección</a></li>
		</ul>
	</nav>
	</div>
	<div class="contenedor head">
		<h1 class="titulo" style="text-shadow: #0CB310 5px 3px;">Bienvenidos a</h1>
		<h1 class="titulo" style="text-shadow: #0CB310 5px 3px;">SEMLB</h1>
		<p class="copy">(Software para la Enseñanza de Matemáticas y Lectura Básicas.)</p>
	</div>
</header>

<main>
	<section class="services contenedor" id="servicio">
		<h2 class="subtitulo">¿Quién es Rob?</h2>
		<div class="contenedor-servicio">
			<img src="img/ROB1.png" alt="">
			<div class="checklist-servicio">
				<div class="service" align=justify>
					<p> Hola estudiantes, mi nombre es ROB5000 pero ustedes que son mis amigos
					me pueden llamar Rob, soy un robot científico que persigue el conocimiento
					y las aventuras a lo largo y ancho del universo, actualmente el mundo necesita
					personas maravillosas y listas como ustedes y es por ello que mi objetivo es entrenarte 
					y ayudarte a aprender las  maravillas que contiene el mundo de la lectura y de las 
					matemáticas a nivel básico. </p>
					<br>
					<p>Por el momento mis funciones primarias son las siguientes:</p>
					<br>
					<h3 class="n-service"><span class="number">1</span>Enseñar Lectura</h3>
					<p>Aprender a leer no solo estimula el lenguaje, tambien desarrolla la concentración, 
					la memoria, la imaginación, la agilidad mental, y además ayuda a expresar con mayor 
					exactitud los pensamientos y sentimientos, es por ello que aprender a leer y consejos 
					para la lectura solo trae beneficios y mi tarea va a ser guiarte en este proceso de 
					aprendizaje.</p>
				</div>
				<div class="service">
					<h3 class="n-service"><span class="number">2</span>Enseñar Matemáticas</h3>
					<p>Las matemáticas son fundamentales para el desarrollo intelectual, esta ayuda a 
					desarrollar la lógica, la razón, y a su vez prepara la mente para la vida cotidiana
					en la sociedad.</p>
				</div>
				<div class="service">
					<h3 class="n-service"><span class="number">3</span>Realizar Pruebas de Evaluación</h3>
					<p>La tarea de evaluación es fundamental, ya que esta ayuda a comprobar el nivel 
					del conocimiento adquirido y a su vez tiene el objetivo de detectar las alteraciones 
					en el entendimiento de la información aprendida, y es por ello que yo, Rod el 
					robot científico ayudaré a todos mis amigos a que puedan entender todos los 
					conocimientos impartidos de la manera más eficaz y fácil posible.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="gallery" id="portafolio">
		<div class="contenedor">
			<h2 class="subtitulo">Galeria de SEMLB</h2>
			<div class="contenedor-galeria">
				<img src="img/1.jpg" alt="" class="img-galeria">
				<img src="img/2.jpg" alt="" class="img-galeria">
				<img src="img/3.jpg" alt="" class="img-galeria">
				<img src="img/4.jpg" alt="" class="img-galeria">
				<img src="img/5.jpg" alt="" class="img-galeria">
				<img src="img/6.jpg" alt="" class="img-galeria">
			</div>
		</div>
	</section>
	<section class="imagen-light">
		<img src="img/close.svg" alt="" class="close">
		<img src="" alt="" class="agregar-imagen">
	</section>

	<section class="contenedor" id="expertos">
		<h2 class="subtitulo">Funciones de SEMLB</h2>
		<section class="experts">
			<div class="cont-expert">
				<img src="img/book.jpg" alt="">
				<h3 class="n-expert">Enseñar Lectura Básica</h3>
			</div>
			<div class="cont-expert">
				<img src="img/mate.png" alt="">
				<br>
				<br>
				<h3 class="n-expert">Enseñar Matemática Básica</h3>
			</div>
			<div class="cont-expert">
				<img src="img/10.png" alt="">
				<h3 class="n-expert">Realizar Pruebas de Evaluación</h3>
			</div>
		</section>
	</section>

</main>
<footer id="contacto">
	<div class="contendor footer-content" style="padding: 0 2em;">
		<div class="contact-us" align=justify>
			<h2 class="brand">Creadores</h2>
			<br>
			<h4 class="n-service2"><span class="number2">1</span>Juan Acosta </h4>
			<h4>Teléfono: 0424-7537848</h4>
			<h4>Correo: ricoacostajuanjose@gmail.com</h4>
			<br>
			<h4 class="n-service2"><span class="number2">2</span>Cristhian Gutiérrez</h4>
			<h4>Teléfono: 0424-7023511</h4> 
			<h4>Correo: cristhiangutierrez2206@gmail.com</h4>
			<br>
		</div>

		<div class="contact-us"  style="padding: 0 2em; justify-content: flex-start;">
			<h2 class="brand">Agradecimientos:</h2>
			<br>
			<h4 align=justify class="justify">Le agradecemos primeramente a Dios por brindarnos salud, sabiduría y a la
			Escuela Bolivariana Nacional “Coloncito” por brindar un espacio de trabajo óptimo 
			para la realización de nuestro proyecto y realizar el presente software educativo. </h4>
			<br><br><br><br>
		</div>

	</div>

	<div class="line"></div>
</footer>

<script src="js/menu.js"></script>
<script src="js/lightbox.js"></script>
</body>

</html>