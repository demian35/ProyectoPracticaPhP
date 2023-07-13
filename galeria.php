<?php include("header.php") ?>

<?php

include("conexionbd.php");//importamos la clase conexionbd
if($_POST){
    print_r($_POST);
    $registronombre=$_POST['nombre'];//recibimos el nombre del formulario
    $conbd=new conexionbd;//creamos la conexion con la base de datos

    //query para la insercion de datos
    $querySQL="INSERT INTO album.proyectgalery(idproyecto,nombre,imagen,descripcion) values(null,'$registronombre','pruebaproyecto.jpg','jugando con un proyecto');";
    $conbd->ejecutaConsulta($querySQL);//ejecutamos la consulta con el metodo de ejecutaconsulta de la clase conexionbd
}

$conbd2= new conexionbd; //creamos una nueva conexion con la bd
$proyectos=$conbd2->consulta("SELECT * FROM album.proyectgalery;") //mostramos todos los registros disponibles en bd

?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="card">
    <div class="card-header">
    </div>
    <div class="card-body">
        <form action="galeria.php" enctype="multipart/form-data" method="post">
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
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($proyectos as $proyecto){ //imprimimos cada fila y columna de la bd ?>
                <tr class="">
                    <td><?php echo $proyecto['idproyecto'] //columna id?></td>
                    <td><?php echo $proyecto['nombre'] //columna de nombre?></td>
                    <td><?php echo $proyecto['imagen']//colunma imagen?></td>
                    <td><?php echo $proyecto['descripcion']//columna descripcion?></td>
                    <td><a name="" id="" class="btn btn-danger" href="#" role="button">Borrar</a></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
            </div>
        </div>
        
    </div>
</div>




<?php include("fotter.php") ?>