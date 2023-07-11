<?php

    if($_POST){
        if(($_POST['txtusr']=="DewittBooker") && ($_POST['contrasenia']=="12345")){//validacion de chocolate :V
            echo "Inicio de sesion exitoso";
            header("location:index.php");//si los datos son correctos redireccionamos a index con la funcion header()
        }else{//si hay datos incorrectos usamos la funcion de javascript alert para notificar datos incorrectos
            echo "<script>alert('Usuario o contraseña incorrecta')</script>";
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
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <style>
        
        .card{
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
                            Logueate
                        </div>
                        <div class="card-body">
                            <form action="login.php" method="post">
                                Usuario:
                                <input class="form-control" type="text" name="txtusr" id="" >
                                Password:
                                <input class="form-control" type="text" name="contrasenia" id="" >
                                <br>
                                <button class="btn btn-success" type="submit">Inicia sesion</button>

                            </form>  


                        </div>
                        <div class="card-footer text-muted">
                            
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