<?php
session_start();
if(isset($_SESSION['txtusr'])!="DewittBooker"){//if para validar que si el usuario esta logueado
    header("location:login.php");              //entonces pueda acceder a la pagina principal
                                                //En otro caso no pase del login a la pagina principal
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <a href="login.php">Login</a>
        <a href="galeria.php">Galeria</a>
        <a href="cerrar.php">Cerrar Sesion</a>
        <br>

