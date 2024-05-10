<?php
  require('../conexion.php');  
  session_start();

  $dtz = new DateTimeZone("America/Bogota");
  $dt = new DateTime("now", $dtz);
  $fecha = $dt->format("Y-m-d H:i:s");

  $_SESSION['mensaje'] = 1;
  mysqli_query($conexion,"insert into donadores (nombre, correo, cedula, cantidad, fecha) values ('$_POST[nombre]', '$_POST[correo]', $_POST[cedula], $_POST[cantidad], '$fecha')"); 
  header("location:donadores.php");

?>