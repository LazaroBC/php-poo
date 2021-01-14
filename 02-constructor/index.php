<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Clases</title>
</head>
<body>
    
</body>
</html>
<div class="container">
    <h1>CONSTRUTORES</h1>
    <hr/>
<?php
require_once 'coche.php';
$coche = new Coche("Amarillo", "Renault", "Clio", 150, 200, 5);
var_dump($coche);
$coche->color = "Lila"; // Nada recomendable cambiar los valores fuera de la clase sin un metodo.
var_dump($coche);
$coche2 = new Coche("Verde", "Seat", "Panda", 135, 145, 4);
$coche3 = new Coche("Azul", "Citroen", "Xara", 170, 160, 5);
$coche4 = new Coche("Rojo", "Mercedes", "Clase A", 250, 250, 5);
var_dump($coche2);
var_dump($coche3);
var_dump($coche4);

$coche->color = "Rosa";
var_dump($coche->getColor());
$coche->setMarca("Audi");
var_dump($coche->getMarca());
var_dump($coche->getModelo("Trafic"));
echo "<hr/>";

echo $coche->mostrarInformacion($coche2);
echo "<hr/>";
echo $coche->mostrarInformacion($coche2);
echo "<hr/>";


?>

</div>

