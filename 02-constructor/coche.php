<?php
// Programación orientada a objetos

// Definir una clase m0olde para crear más objetos de tipo coche con características parecidas

class Coche{
    // Atributos o propiedades (variables)
    // public podemos accder a el desde cualquier lugar, dntro de la clase, dentro de clases que
    // hereden de esa clase y fuera de la clase
    public $color;

    // protected podemos accder a él desde la clase que lo define y desde clases que hereden de esta clase
    protected $marca;

    // private solo se puede accder desde esta clase
    private $modelo;

    public $velocidad;
    public $caballaje;
    public $plazas;
    
    // Constructor, normalmente es el primero en deifnirse
    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas){
        $this->color = $color;
        $this->marca =  $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;

    }
    
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

    public function getModelo($modelo){
        return $this->modelo =  $modelo;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function getMarca(){
        return $this->marca;
    }

    // Si no definimos el tipo de dato que pasamos por parametro podriamos poner cualquier dato,
    // pero al decir que queremos que nos pasen un objeto de tipo coche php nos dará un error, 
    // no entra en el if.

    public function mostrarInformacion(Coche $miObjeto){
        if(is_object($miObjeto)){
        $informacion = "<h1>Información del coche </h1>";
        $informacion .= "Color: " . $miObjeto->color . "<br>";
        $informacion .= "Modelo: " . $miObjeto->modelo . "<br>";
        $informacion .= "Velocidad: " . $miObjeto->velocidad . "<br>";
        }else {
            $informacion ="Tú dato es: " . $miObjeto;
        }
        return $informacion;
    }
    
}// Fin definición clase

?>