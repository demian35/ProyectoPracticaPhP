<?php
include("conexionbd.php");


if ($_POST) {
    $usuario = $_POST['usuario']; //recibimos el nombre de usuario
    $contrasenia = $_POST['contrasenia']; //recibimos la contraseña a registrar

    $conbd = new conexionbd; //creamos la conexion con la base de datos

    $sentencia = "INSERT INTO album.usuarios(idusuarios,usuario,contrasenia) values(null,'$usuario','$contrasenia');";
    $conbd->ejecutaConsulta($sentencia); //ejecutamos la consulta con el metodo de ejecutaconsulta de la clase conexionbd
    header("location:login.php?registro_exitoso=1"); //redireccionamiento para que cuando el usuario actualice no se envie algo de nuevo

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        body {
            background-image: url('img/1689586144barflotante.jpg');
            background-size: 1370px 700px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;

        }
    </style>
    <title>Registrate</title>
</head>

<body>
<div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        Registrate
                    </div>
                    <div class="card-body">
                        <form action="registraUsuario.php" method="post">
                            Usuario:
                            <input class="form-control" type="text" name="usuario" id="">
                            Password:
                            <input class="form-control" type="password" name="contrasenia" id="">
                            <br>
                            <button class="btn btn-success" type="submit">Sign in</button>

                        </form>


                    </div>
                    <div class="card-footer text-muted">
                    </div>
                </div>

            </div>
        </div>
</body>

</html>