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
    <h1>MÉTODO MÁGICO __destruct</h1>
    <hr/>
<?php

class Usuario{

    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "Lázaro Belloch";
        $this->email = "lazarete@outlook.com";
        echo "Creando el objeto creada <br>";
    }

    public function __toString()
    {
        return "Hola,  {$this->nombre}, está registrado como {$this->email}<br>";
    }
    public function __destruct()
    {
        echo "Destruyendo el objeto";
    }
}

$usuario = new Usuario();
echo $usuario->email . "<br>";
echo $usuario;
for ($i=0; $i<=20; $i+=2){
    echo $i .  "<br>";
}
?>

</div>