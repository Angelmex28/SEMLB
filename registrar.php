<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos1.css">
    <title>Registrar</title>
</head>
<body>
<?php require 'partials/header.php' ?>    
        <div class="modal-body modal-dialog">
            <div class="container col-lg-11">
                <div class="modal-content col-lg-9 bg-dark" style="padding: 0 2em;">
                    <!-----botones de cambio-->
                    <!------------hasta aqui-->--
                        <br>
                       
                <h1 class="text-center blanco" style="font-size: 30px;">Registro</h1>
                <h1 class="text-center blanco">o</h1>
                <h1 class="text-center blanco"><a href="inicioDeSesion/index.php">Iniciar Sesión</a></h1>
    <!-------------------formulario----------------------------------->
                <form class="text-center bg-dark" action="registro.php" method="POST">
                  
                    <img class="logo" src="IMG/g.jpg" width="130px" height="130px" style="border-radius: 80px; border: 4px outset #29F800;">
                    <br>
            <div class="mb-3">
                    <label for="nombres" class="form-label blanco">Nombre</label>
                    <input type="text" class="form-control  bg-light" name="nombres" placeholder="Nombre" required="" pattern="[a-zA-Z ]+">
            </div>
                    
            <div class="mb-3">
                    <label for="apellidos" class="form-label blanco">Apellido</label>
                    <input type="text" class="form-control  bg-light" name="apellidos" placeholder="Apellido" required="" pattern="[a-zA-Z ]+">
            </div>
                    
            <div class="mb-3">
                    <label for="grado" class="form-label blanco">Grado</label>
                    <input type="text" class="form-control  bg-light" name="grado" placeholder="Grado" required="" pattern="[0-9]+">
            </div>
                    
            <div class="mb-3">
                    <label for="seccion" class="form-label blanco">Sección</label>
                    <input type="text" class="form-control  bg-light" name="seccion" placeholder="Ingresar letra en Mayuscula" required="" pattern="[A-Z]+">
            </div>
                    
            <div class="mb-3">
                    <label for="clave" class="form-label blanco">Contraseña</label>
                    <input type="password" class="form-control  bg-light" name="clave" placeholder="Contraseña" required="">
                    
                    
            <div class="mb-3">
                    <label for="confirmarclave" class="form-label blanco">Confirmar contraseña</label>
                    <input type="password" class="form-control  bg-light" name="confirmarclave" placeholder="Contraseña">

                    
                    <div id="emailHelp" class="verde">Verifique los datos proporcionados</div>
                       </div>           
                    <button type="submit" class="btn btn-success" value="registrar" name="registrar">Registrar</button>

                </form>

                  <!-----------hasta aqui form----------------------->
            </div>
            </div> 
        </div>

<script src="js/menu.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>