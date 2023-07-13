<?php
session_start();//mantenemos la sesion abierta

session_destroy();//cerramos la sesion actual y redireccionamos al login
echo "<script>alert('Hasta pronto vuelva pronto!!!')</script>";
header("location:login.php");
?>