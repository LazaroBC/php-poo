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
<h1>PPO - CLASES</h1>
<hr/>
<?php
// Programación orientada a objetos

// Definir una clase m0olde para crear más objetos de tipo coche con características parecidas

class Coche{
    // Atributos o propiedades (variables)
    public $color =  "Rojo";
    public $marca =  "Ferrari";
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;
    
    // Metodos, son acciones que hace el objeto (antes funciones)
    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        return $this->color =  $color;
    }

    public function acelerar(){
        return $this->velocidad++;
    }

    public function frenar(){
        return $this->velocidad--;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
}// Fin definición clase

// Crear un objeto o instanciar loa clase
$coche = new Coche();

var_dump($coche);

// usar los métodos

echo "Velocidad: " . $coche->getVelocidad() . "<br>";

echo "El coche originalmente era " . $coche->color . "<br>";
$coche->setColor("Amarillo");
echo "El coche ahora es " . $coche->getColor() . "<br>";

echo "La velocida inicial del coche era " . $coche->velocidad . "<br>";
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
echo "La velocida ahora es de " . $coche->getvelocidad() . "<br>";
$coche->frenar();
$coche->frenar();
$coche->frenar();
$coche->frenar();
$coche->frenar();
echo "Y ahora frenamos a " . $coche->getvelocidad() . "<br>";

$coche2 = new Coche();
var_dump($coche);
var_dump($coche2);
$coche2->setModelo("Gallardo");
var_dump($coche2);
?>
</div>
