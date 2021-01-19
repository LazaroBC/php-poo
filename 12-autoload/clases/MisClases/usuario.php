<?php

namespace MisClases;

class Usuario{
    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "Lázaro Belloch";
        $this->email = "lazarete@outlook.com";
    }
}