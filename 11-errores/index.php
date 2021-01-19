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
    <h1>CAPTURANDO ERRORES</h1>
    <hr/>
<?php

// Capturar excepciones, en código susceptible a errores
try {
    if(isset($_GET['id'])){
        echo "<h1>El parámetro es: {$_GET['id']}</h1>";
    }else{
        throw new Exception('Faltan parámetros por la url.');
    }

}catch(Exception $e){
    echo "Ha habido un error " . $e->getMessage();
}finally{
    echo "<br>Todo correcto";
}

?>

</div>