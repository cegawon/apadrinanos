<?php session_start();
require('../conexion.php');
mysqli_query($conexion,"delete FROM donadores where id = $_POST[eli]"); 
?>
       