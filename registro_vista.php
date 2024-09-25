<?php
require_once("./app/config/dependencias.php");
require_once("./app/controller/registro.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS."bootstrap.min.css";?>">
    <link rel="stylesheet" href="<?=ICONS."bootstrap-icons.css";?>">
    <link rel="stylesheet" href="<?=CSS."registro_vista.css";?>">
    <title>Formulario de datos</title>
</head>
<body class="vh-100 d-flex justify-content-center align-items-center">
    <form action="./registro_vista.php" method="post" class="w-25 p-4">
        <div class="text-center mb-4 c-user">
            <i class="bi bi-box-arrow-in-right text-white"></i>
        </div>
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <i class="bi bi-person-fill fs-3 text-white mx-1"></i>
            <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" name="nombre" value="<?= (!empty($_POST['nombre'])) ? $_POST['nombre'] : ''; ?>">
        </div>
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <i class="bi bi-person-fill fs-3 text-white mx-1"></i>
            <input type="text" class="form-control" id="apellido" placeholder="Ingrese su apellido" name="apellido" value="<?= (!empty($_POST['apellido'])) ? $_POST['apellido'] : ''; ?>">
        </div>
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <i class="bi bi-envelope-fill fs-3 text-white mx-1"></i>
            <input type="text" class="form-control" id="email" placeholder="Ingrese su email" name="email" value="<?= (!empty($_POST['email'])) ? $_POST['email'] : ''; ?>">
        </div>
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <i class="bi bi-key-fill fs-3 text-white mx-1"></i>
            <input type="text" class="form-control" id="pass" placeholder="Ingrese su contraseña" name="pass" value="<?= (!empty($_POST['pass'])) ? $_POST['pass'] : ''; ?>">
        </div>
        <div class="mt-3 c-button">
            <button type="button" id="btn-registro" class="btn w-100 text-white fs-4">Registrar</button> 
        </div>
    </form>

    <script src="./public/js/mainRegistro.js"></script>
</body>
</html>