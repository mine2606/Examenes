<?php

require_once ("persona.php");
require_once ("cliente.php");


class Pedido {
    private $fecha;
    private $importe; 

    public function __construct ($fecha, $importe){                
        $this->fecha = $fecha;
        $this->importe = $importe;
    }

       

    /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    


    /**
     * Get the value of pTotal
     */ 
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set the value of pTotal
     *
     * @return  self
     */ 

    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    


    
}