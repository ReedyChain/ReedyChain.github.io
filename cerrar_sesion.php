<?php 
include('encabezado.php');
session_start();
if (isset($_SESSION["u_usuario"])) {
    echo'existe sesion';
    session_destroy();
    header('Location:' . $URL.'/encabezado.php');
}
else    {
    echo'no existe sesion';
}
?>
