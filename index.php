<?php
include("header.php"); //importando la clase header para poder ejecutatla aqui
include("conexionbd.php");


// Verifica si el usuario ha iniciado sesión
if (isset($_SESSION['usuario'])) {
    $usuarioLogueado = $_SESSION['usuario'];
} else {
    // Si el usuario no ha iniciado sesión, puedes redirigirlo a la página de inicio de sesión
    header("location: login.php");
    exit(); // Asegura que el script se detenga después de la redirección
}

$conbd2= new conexionbd; //creamos una nueva conexion con la bd
$proyectos=$conbd2->consulta("SELECT * FROM album.proyectgalery;") //mostramos todos los registros disponibles en bd

?>
Bienvenido a la galeria galeria

<div class="bg-gradient p-5 rounded-lg m-3">
    <h1 class="display-4" ><strong> Bienvenid@, <?php echo $usuarioLogueado; ?> </strong></h1>
    <p class="lead" ><strong> Galeria de futuros proyectos que se llevaran a cabo en el mundo.</strong></p>
    <hr class="my-4">
    <p><strong> podras guardar y ver todos tus proyectos</strong></p>
</div>

<div class="card-group">
<?php foreach($proyectos as $proyecto){ //imprimimos cada fila y columna de la bd ?>
    <div class="card">
        <img  src="img/<?php echo $proyecto['imagen'];//le mostramos la imagen como tal al usuario?>" class="card-img-top" alt="...">
        <div class="card-body bg-info">
            <h5 class="card-title"><?php echo $proyecto['nombre'] //columna de nombre?></h5>
            <p class="card-text"><?php echo $proyecto['descripcion']//columna descripcion?></p>
        </div>
    </div>
<?php }?>
   
</div>


<?php
include("fotter.php"); //importando la clase footer para insertar el pie de pagina en el index
?>