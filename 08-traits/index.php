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
    <h1>TRAITS</h1>
    <hr/>
<?php

trait Utilidades{
    public function mostrarNombre(){
        echo "<h1> El nombre es " . $this->nombre;
    }
}
class Coche{
    public $nombre;
    public $marca;

    use Utilidades;
}

class Persona{
    public $nombre;
    public $apellidos;
    use Utilidades;
}

class VideJuego{
    public $nombre;
    public $anyo;
    use Utilidades;
}

$coche = new Coche();
$persona = new Persona();
$videoJuego = new VideJuego();
$coche->nombre =  "Ferrari";
$coche->mostrarNombre();
$persona->nombre =  "Amparo";
$persona->mostrarNombre();
$videoJuego->nombre =  "Conan Exiles";
$videoJuego->mostrarNombre();

// necesitamos un metodo igual para las tres clases pero las clases no tienen que heredar unas de otras


?>


</div>