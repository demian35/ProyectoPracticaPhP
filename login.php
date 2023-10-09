<?php
session_start();

// Verifica si se estableció el parámetro de éxito en la URL
if (isset($_GET['registro_exitoso']) && $_GET['registro_exitoso'] == 1) {
    echo '<div class="alert alert-success">Registro exitoso. Puede iniciar sesión.</div>';
}



include("conexionbd.php");

if ($_POST) {

    $conexionLogin = new conexionbd;
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];
    //sentencia para consultar
    $sentencia = "SELECT COUNT(*) FROM album.usuarios WHERE usuario = ? AND contrasenia = ?";
    //consulta para leer los datos de la tabla de usuarios
    $consulta = $conexionLogin->consultaUsuarios($sentencia, array($usuario, $contrasenia));
    // Verificar si la consulta se preparó correctamente
    if ($consulta) {
        // Vincular los valores a los marcadores de posición
        $consulta->bindParam(1, $usuario, PDO::PARAM_STR);
        $consulta->bindParam(2, $contrasenia, PDO::PARAM_STR);

        // Ejecutar la consulta
        $consulta->execute();

        // Obtener el resultado
        $resultado = $consulta->fetchColumn();

        // Continuar con la verificación del resultado
        if ($resultado == 1) {
            // Usuario y contraseña válidos
            $_SESSION['usuario'] = $usuario; // Guardar el usuario en la sesión
            header("location: index.php"); // Redirigir al usuario a la página principal
        } else {
            // Usuario o contraseña incorrectos
            echo '<div class="alert alert-danger">Usuario o contraseña incorrecta</div>';
        }
    } else {
        // Error en la consulta preparada
        echo "Error en la consulta preparada";
    }
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
            height: 1200px;
            width: 1370px;
            background-size: auto;
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
                            <input required class="form-control" type="text" name="usuario" id="">
                            Password:
                            <input required class="form-control" type="password" name="contrasenia" id="">
                            <br>
                            <button class="btn btn-success" type="submit">Inicia sesion</button>

                        </form>


                    </div>
                    <div class="card-footer text-muted">
                        <a href="registraUsuario.php">No tienes cuenta Registrate aqui</a>
                    </div>
                </div>



            </div>
            <div class="col-md-4">

            </div>
        </div>


</body>

</html>