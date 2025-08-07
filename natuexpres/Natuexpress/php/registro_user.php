<?php

include 'conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuarios  (nombre,correo,usuario,contrasena)
          VALUES('$nombre','$correo','$usuario','$contrasena')";

    $ejecutar =  mysqli_query($conexion, $query);

    if($ejecutar){
      echo  '<script>
             alert("Usuario almacenado correctamente");
             window.location = "../index.html";
        </script>';
    }else{
         '<script>
             alert("intentalo de nuevo, a ocurrido un error");
             window.location = "../index.html";
        </script>';
    }
    
