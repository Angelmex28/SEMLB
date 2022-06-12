<?php

include('db.php');

$id=$_POST['txtid'];
mysqli_query($conexion,"DELETE FROM usuarios where id='$id'")or die("error al eliminar");

mysqli_close($conexion);
header("location:mostrar.php");

?>