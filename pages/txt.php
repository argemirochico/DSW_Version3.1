<!DOCTYPE html>
<html lang="en">
<head>
  <title>Guardar Producto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>



<?php

$nombre=$_POST['nombre'];
$codigo=$_POST['codigo'];
$peso=$_POST['peso'];
$marca=$_POST['marca'];
$fabricante=$_POST['fabricante'];
$caracteristicas=$_POST['caracteristicas'];


$file = fopen("$codigo.txt", "w");

fwrite($file, "Nombre: ".$nombre . PHP_EOL);

fwrite($file, "Código: ".$codigo . PHP_EOL);

fwrite($file, "Peso: ".$peso . PHP_EOL);

fwrite($file, "Marca: ".$marca . PHP_EOL);

fwrite($file, "Fabricante: ".$fabricante . PHP_EOL);

fwrite($file, "Caracteristicas: ".$caracteristicas . PHP_EOL);

fwrite($file, "Fin del registro" . PHP_EOL);


fclose($file);




?>

<div class="container">
    <p class="bg-primary">El reporte ha sido almacenado con éxito</p>
  </div>


<div class="container">
  <a href="IngresoProductos.html" align class="btn btn-info" role="button">Volver a Ingreso de Productos</a>
 </div>


</body>
</html>
