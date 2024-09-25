<?php
session_start();

//if (isset($_SESSION['usuario'])) {
    //header("location:index.php");
//}

if ($_POST) {
    //comprueba que los datos esten llenos en los inputs
    if (isset($_POST['nombre']) && !empty($_POST['nombre']) && 
        isset($_POST['apellido']) && !empty($_POST['apellido']) &&
        isset($_POST['email']) && !empty($_POST['email']) &&
        isset($_POST['pass']) && !empty($_POST['pass'])) {
            
        //agrega los datos de los inputs a la variable de sesion
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
    
        $_SESSION['registro'] = [
            "nombre" => $nombre,
            "apellido" => $apellido,
            "email" => $email,
            "pass" => $pass
        ];
        //redirecciona al login
        echo json_encode([1,"CORRCTO"]);
    } else {
        echo json_encode([0,"Campos vacios"]);
    } 
}

?>