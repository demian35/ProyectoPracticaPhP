<?php include("header.php") ?>

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


<?php include("fotter.php") ?>