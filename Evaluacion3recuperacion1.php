<?php

class Persona {
    var $nombre;
    var $edad;


    function __construct ($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }



    function setNombre ($nombre) {
        $this->$nombre = $nombre;

    }

    function getNombre () {
        return $this->nombre;

    } 

    function setEdad ($edad) {
        $this->$edad = $edad;

    }



    function getEdad () {
        return $this->edad;

    }



    function mostrar () {
        echo "Soy ".$this->nombre." y tengo ".$this->edad." años.<br>";

    }


}

<?php

require_once ("Persona.php");


Class Jugador extends Persona (){
    var $numPartido;


    function __construct ($nombre, $edad, $numPartido)
        parent::__construct ($nombre, $edad);
        $this->numPartido = $numPartido;
    }

    function setNumPartidos ($numPartidos) {
        $this->numPartidos = $numPartidos;

    }

    function getNumPartidos () {
        return $this->numPartidos;

    }

    function mostrar() {
        parent::mostrar();
        echo "Ha jugado " . $this->getNumPartidos() . " partidos";
    }

    $a = new Persona("Claudio",22);
    $b = new Persona ("Fran", 26);
    $c = new Jugador ("Raul",24,100);
    $d = new Jugador ("Maradona",25,102);
    $vector = array ($a,$b,$c,$d);


    for ($i=0; $i < count($vector); $i++) { 
        $vector[$i]->mostrar();
    
    }
    
}
    







