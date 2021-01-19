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
    <h1>MÉTODO MÁGICO __call</h1>
    <hr/>
<?php

class Persona{
    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct($nombre, $edad, $ciudad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;

    }

    public function __call($name, $arguments)
    {
        $prefix_metodo = substr($name,0,3);
        

        if ($prefix_metodo == "get"){
            $nombre_metodo = substr(strtolower($name), 3);

            if(!isset($this->$nombre_metodo)){
                return "El método no existe";
            }
            return $this->$nombre_metodo;
        }else{
            return "El método no existe";
        }

        
    }
    
}

$persona = new Persona("Lazaro", 52, "Valencia");
echo $persona->getNombre();
echo $persona->getEdad();
echo $persona->gotNombre();
echo $persona->getCasa();
?>

</div>