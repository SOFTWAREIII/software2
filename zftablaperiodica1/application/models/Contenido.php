<?php

class Application_Model_Contenido
{
private $_id; //segun la regla para declarar una variable $ luego_ y el nombre
private $_nombre;

function __construct($id, $nombre) {
    $this->_id = $id;
    $this->_nombre = $nombre;
}

public function getId() {
    return $this->_id;
}

public function setId($id) {
    $this->_id = $id;
}

public function getNombre() {
    return $this->_nombre;
}

public function setNombre($nombre) {
    $this->_nombre = $nombre;
}

}







