<?php

namespace PanelAdministrador;

class Usuario{
    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "Administrador Belloch";
        $this->email = "administrador@outlook.com";
    }
}