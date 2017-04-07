<?php

$nombre=$_REQUEST["nombre"];
$contra=$_REQUEST["clave"];
$enlace= mysqli_connect("localhost","root","mysql2017","claves",3306);
$cadena="SELECT * FROM datos WHERE nombre='$nombre' AND clave = '$contra'";
$resultado= mysqli_query($enlace, $cadena);
    if(mysqli_num_rows($resultado)){
        echo "Adentro";

      } else {
      echo "Afuera";
      }
 
