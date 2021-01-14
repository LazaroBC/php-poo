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
    <h1>HERENCIA</h1>
    <hr/>
<?php
require_once 'clases.php';

$persona = new Persona();
var_dump($persona);
$informatico = new Informatico();
var_dump($informatico);

//$informatico->setAltura(1.75);
//$informatico->sabeLenguajes("HTML, CSS, Java, PHP, JS, React");
var_dump($informatico);

$tecnico = new TecnicoRedes();
var_dump($tecnico);
?>

</div>