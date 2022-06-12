<?php 

if (isset($_POST['entrar'])) {
    
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $clave=$_POST['clave'];


    $conn = mysqli_connect('localhost','root','','crud');

    $query = mysqli_query($conn, "SELECT * FROM usuarios WHERE nombres = '".$nombres."' and clave = '".$clave."'");
    $dato=mysqli_fetch_array($query);
    $nr = mysqli_num_rows($query);

    if ($nr == 1) {
        session_start();
        $_SESSION['nombres']=$nombres;
        $_SESSION['apellidos']=$apellidos;
        $_SESSION['clave']=$clave;
        $_SESSION['id']=$dato['id'];
        $_SESSION['grado']=$dato['grado'];
        $_SESSION['seccion']=$dato['seccion'];
        $_SESSION['rol']=$dato['rol'];

        if ($_SESSION['rol']==1) {
            header("Location: ../administrador");
        }elseif ($_SESSION['rol']==2) {
            header("Location: ../profesor");
        }elseif ($_SESSION['rol']==3) {
            header("Location: ../estudiante");
        }else{
            header("Location: ../inicioDeSesion");
        }

    }else{
        header("Location: ../inicioDeSesion");
    };



}   ;

?>