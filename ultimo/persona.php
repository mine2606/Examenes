<?php


require_once ("cliente.php");
require_once ("pedido.php");

class Persona {
    private $nombre;
    private $edad;

    public function __construct ($nombre, $edad){        
        $this->nombre = $nombre;
        $this->edad = $edad;   
           
    }

    

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of edad
     */ 
    public function getedad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */ 
    public function setedad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    
}