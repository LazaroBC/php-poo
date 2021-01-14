<?php

class Configuracion{
    // Propiedades y métodos estáticos, con estos no es necesario crear un objeto o instanciarlos para llamarlos
    public static $color;
    public static $newsLetter;
    public static $entorno;
    

    public static function getColor()
    {
        return self::$color;
    }

    public static function setColor($color)
    {
        self::$color = $color;
    }

    public static function getNewsLetter()
    {
        return self::$newsLetter;
    }

    public static function setNewsLetter($newsLetter)
    {
        self::$newsLetter = $newsLetter;
    }

    public static function getEntorno()
    {
        return self::$entorno;
    }

    public static function setEntorno($entorno)
    {
        self::$entorno = $entorno;
    }
}

?>