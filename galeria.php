<?php include("header.php") ?>

<?php

include("conexionbd.php");//importamos la clase conexionbd
if($_POST){
    print_r($_POST);
    $registronombre=$_POST['nombre'];//recibimos el nombre del formulario
    $registroDescripcion=$_POST['descripcion']; //recibimos la descripcion de proyecto
    $registoImg=$_FILES['archivo']['name'];//recibimos el nombre de una imagen que suba el usuario
    $conbd=new conexionbd;//creamos la conexion con la base de datos

    //query para la insercion de datos
    $querySQL="INSERT INTO album.proyectgalery(idproyecto,nombre,imagen,descripcion) values(null,'$registronombre','$registoImg','$registroDescripcion');";
    $conbd->ejecutaConsulta($querySQL);//ejecutamos la consulta con el metodo de ejecutaconsulta de la clase conexionbd
}
if($_GET){
    $deleteElem=$_GET['Borrar'];//recibimos un id para borrar
    $conbd3=new conexionbd;
    $sentenciaborrado="DELETE FROM proyectgalery WHERE proyectgalery.idproyecto=".$deleteElem;//sentencia de borrado
    $conbd3->ejecutaConsulta($sentenciaborrado);//ejecutamos la sentencia
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
            Descripcion: <div class="mb-3">
              <textarea class="form-control" name="descripcion" id="" rows="3"></textarea>
            </div>
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
                    <td><a name="" id="" class="btn btn-danger" href="?Borrar=<?php echo $proyecto['idproyecto'] ?>" role="button">Borrar</a></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
            </div>
        </div>
        
    </div>
</div>




