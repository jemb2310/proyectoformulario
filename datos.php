<?php

//Script que recoge los datos del formulario
//recogemos los datos

$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$ciudad=$_POST['ciudad'];
$sexo=$_POST['sexo'];

echo "datos del usuario registrado en el formulario <br>";
echo "nombre: $nombre <br> edad: $edad <br> Ciudad: $ciudad <br> Sexo: $sexo <br>";
      
