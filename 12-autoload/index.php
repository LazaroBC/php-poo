<!DOCTYPE html>
<html lang="es">
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
    <h1  style="text-align:center">AUTOLOAD</h1>
    <hr/>
<?php
require_once 'autoload.php';
/*
$usuario = new Usuario();
echo $usuario->nombre;
echo "<br>";
echo $usuario->email;
echo "<br>";
$categoria = new Categoria();

echo $categoria->nombre;
echo "<br>";
echo $categoria->descripcion;
echo "<br>";
$entrada = new Entrada();
echo $entrada->titulo;
echo "<br>";
echo $entrada->fecha;
echo "<br>";
*/

// Espacios de nombres y paquetes
use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada;
use PanelAdministrador as PanelAdm;

class Principal {
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct() {
       $this->usuario= new Usuario();
       $this->categoria = new Categoria();
       $this->entrada = new Entrada();
    }
}

$principal = new Principal();
var_dump($principal->usuario);

$principal1 = new Principal();
var_dump($principal1->categoria);

$principal2 = new Principal();
var_dump($principal2->entrada);

$principal3 = new PanelAdministrador\Usuario(); // Se puede acceder de las dos maneras
var_dump($principal3);

$principal4 = new PanelAdm\Usuario();
var_dump($principal4);

?>

</div>