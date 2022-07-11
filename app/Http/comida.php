<?php

namespace App;

class Comida
{
    private $nombre;
    public $precio;

    // getters y setters
    
public function getNombre ()
{
    return $this->nombre;
}

public function setNombre($nombre)
{
    $this->nombre = $nombre;
}

// constructor

public function __construct() {
    $this->nombre = "s/n";
    $this->precio = 0;
}
// funciones    
}