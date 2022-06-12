
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BIENVENIDO A SEMLB</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="stylesheet" href="url('https://fonts.googleapis.com/css2?family=Courgette&display=swap')">
    <link rel="stylesheet" href="css/login.css">
   <link rel="stylesheet" href="css/cabecera.css">
  </head>
  <body>

    <?php require 'partials/header.php' ?>

<form>
  <nav>
    <div class="logo">
      <img class="logo" src="IMG/g.jpg" width="130px" height="130px" style="border-radius: 70px; border: 6px outset #29F800;">
    </div>
    <div class="menu">
      <h1>Bienvenido a SEMLB</h1>
    <h1>Por favor Inicia Sesión o Regístrate</h1>
      <ul>
        <?php

          if (isset($_SESSION['id'])) { ?>

            <li><a href="cerrarsesion.php">Salir</a></li>

          <?php } else{ ?>

            <li><a style="color: #00FF06; font-size: 35px;" href="inicioDeSesion/index.php">Iniciar Sesión</a></li>
            <li><a style="color: #00FF06; font-size: 35px;" href="registrar.php">Registrar</a></li>
          
          <?php }

        ?>
        
        
      </ul>
    </div>
  </nav>

</form>
    <script src="js/menu.js"></script>
  </body>
</html>
