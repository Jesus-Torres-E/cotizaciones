<?php 
session_start();
 if($_SESSION['usuario_tipo']=="empleado"){
 echo "PUEDES VER LAS TAREAS DE UN EMPLEADO";
 session_destroy();
 }
 else{
 header('Location: login.php');
 }  

 ?>