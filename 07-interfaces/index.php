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
    <h1>INTERFACES</h1>
    <hr/>
<?php

// En las interfaces se definen que métodos y que orden van aestar en una clase

interface Ordenador{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUsb();
}

class iMac implements Ordenador{ 
    private $modelo;

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }
    public function encender(){
        return "Encender";
    }
    public function apagar(){
        return "Apagar";
    }
    public function reiniciar(){
        return "Reiniciar";
    }
    public function desfragmentar(){
        return "Desfragmentar";
    }
    public function detectarUsb(){
        return "Detectar USB";
    }
        
}



$macintos = new iMac();
var_dump($macintos);
$macintos->setModelo("Mac Pro 2019");
echo $macintos->getModelo();
?>

</div>