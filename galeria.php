<?php include("header.php") ?>

<?php

include("conexionbd.php");

$conbd=new conexionbd;

$querySQL="INSERT INTO album.proyectgalery(idproyecto,nombre,imagen,descripcion) values(null,'jugando con bd','base.png','jugando con un proyecto');";
$conbd->ejecutaConsulta($querySQL);


?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="card">
    <div class="card-header">
    </div>
    <div class="card-body">
        <form action="galeria.php" method="post">
            Nombre: <input class="form-control" type="text" name="nombre" id="">
            <br>
            Imagen: <input class="form-control" type="file" name="archivo" id="">
            <br>
            <button class="btn btn-success" type="submit">Envia Archivo</button>
            <br>
        </form>
    </div>
    <div class="card-footer text-muted">
        Footer
    </div>
</div>

        </div>
        <div class="col-md-6">
        <div class="table-responsive">
            <table class="table table-primary">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td>1</td>
                    <td>App</td>
                    <td>imagen.jpg</td>
                </tr>
            </tbody>
        </table>
            </div>
        </div>
        
    </div>
</div>




<?php include("fotter.php") ?>