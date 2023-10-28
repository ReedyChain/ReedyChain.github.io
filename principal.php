<?php 
include('login.php');
session_start();
if (isset($_SESSION["MarcoUvg"])) {
    echo'existe sesion';
    session_destroy();
    echo "<a href= 'login/cerrar-sesion.php'>cerrar sesion</a>";

}
else    {
    echo'no existe sesion';
}
?>