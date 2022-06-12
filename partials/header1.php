<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SEMLB</title>
	<link rel="stylesheet" href="css/header1.css">
</head>
<body>


<!----------- ESTILOS DE BARRA DE NAVEGACION --------->


<!------- BARRA DE NAVEGACION ----->
	<nav>
		<div class="logo">
      		<img class="logo" src="IMG/g.jpg" width="130px" height="130px">
			<form> <input type = "button" value = "¡Regresar!" onclick = "history.back ()"> </form>
		</div>
		<div class="menu">
			<ul>
				<?php

					if (isset($_SESSION['id'])) { ?>

						<li><h1><a href="cerrarsesion.php">Salir</a></h1></li>

					<?php } else{ ?>

						<li><h1><a href="inicioDeSesion/index.php">Iniciar Sesión</a></h1></li>
						<li><h1><a href="registrar.php">Registrar</a></h1></li>
					
					<?php }

				?>
				
				
			</ul>
		</div>
	</nav>