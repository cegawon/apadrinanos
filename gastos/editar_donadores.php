<?php  
  require('../conexion.php');
  
    $resultados= mysqli_query($conexion,"update donadores set nombre = '$_POST[nombre]', correo = '$_POST[correo]', cantidad = $_POST[cantidad], cedula = $_POST[cedula] where id = $_POST[id]");     
  
 
?>