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
    <h1>CLASES ABSTRACTAS</h1>
    <hr/>
<?php
    // Una clase abstracta no se puede instanciar ni hacer objetos con ella pero si sirve para heredar de ella y puede tener funcionalidad
    abstract class Ordenador{

        public $encendido;

        abstract public function encender();// El método abstracto se define en la clase hija

        public function apagar(){
            $this->encendido = False;

        }

    }

    class PcAsus extends Ordenador{
        public $software;

        public function arrancarSoftware(){
            $this->software = True;
        }

        public function encender()
        {
            $this->encendido = True;
        }
    }

    $ordenador = new PcAsus();
    $ordenador->arrancarSoftware();
    $ordenador->encender();
    $ordenador->apagar();
    var_dump($ordenador);


?>

</div>