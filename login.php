<?php
session_start();
include("conexionbd.php");


if ($_POST) {
    /*if(($_POST['txtusr']=="DewittBooker") && ($_POST['contrasenia']=="12345")){//validacion de chocolate :V
            echo "Inicio de sesion exitoso";
            $_SESSION['txtusr']="DewittBooker"; //para mantener el usuario en la sesion
            header("location:index.php");//si los datos son correctos redireccionamos a index con la funcion header()
        }else{//si hay datos incorrectos usamos la funcion de javascript alert para notificar datos incorrectos
            echo "<script>alert('Usuario o contraseña incorrecta')</script>";
        }*/
    $conexionLogin = new conexionbd;
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];
    $consulta = $conexionLogin->consultaUsuarios("SELECT COUNT(*) FROM album.usuarios WHERE usuario= ? AND contrasenia= ?");
    // Verificar si la consulta se preparó correctamente

}


?>


<!DOCTYPE html>
<html lang="en">

<head>


    <title>Inicia Sesion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        body {
            background-image: url('img/rapturewallpaper.jpg');
            background-size: 1370px 1200px;
            background-position: center;
        }

        .card {
            margin-top: 50px;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Sign in
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            Usuario:
                            <input class="form-control" type="text" name="txtusr" id="">
                            Password:
                            <input class="form-control" type="password" name="contrasenia" id="">
                            <br>
                            <button class="btn btn-success" type="submit">Inicia sesion</button>

                        </form>


                    </div>
                    <div class="card-footer text-muted">
                        <a href="creaUsuario.php">No tienes cuenta Registrate aqui</a>
                    </div>
                </div>



            </div>
            <div class="col-md-4">

            </div>
        </div>

    </div>
    <form action="login.php" method="post">

    </form>

</body>

</html>
</head>

<body>

</body>

</html>