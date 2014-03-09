<?php

class Application_Model_Elemento
{
private $_id; //segun la regla para declarar una variable $ luego_ y el nombre
private $_Nombre;
private $_Simbolo;
private $_Pesoatomico;
private $_Valencia;
private $_Tipo;
private $_Familia;

function __construct($id, $Nombre, $Simbolo, $Pesoatomico,  $Valencia, $Tipo, $Familia) {
   $this->_id = $id;
    $this->_Nombre = $Nombre;
    $this->_Simbolo = $Simbolo;
    $this->_Pesoatomico = $Pesoatomico;
    $this->_Valencia = $Valencia;
    $this->_Tipo = $Tipo;
    $this->_Familia = $Familia;
}

public function getId() {
    return $this->_id;
}

public function setId($id) {
    $this->_id = $id;
}
public function getNombre() {
    return $this->_Nombre;
}

public function setNombre($Nombre) {
    $this->_Nombre = $Nombre;
}
public function getSimbolo() {
    return $this->_Simbolo;
}

public function setSimbolo($Simbolo) {
    $this->_Simbolo = $Simbolo;
}

public function getPesoatomico() {
    return $this->_Pesoatomico;
}

public function setPesoatomico($Pesoatomico) {
    $this->_Pesoatomico = $Pesoatomico;
}
public function getValencia() {
    return $this->_Valencia;
}

public function setValencia($Valencia) {
    $this->_Valencia = $Valencia;
}

public function getTipo() {
    return $this->_Tipo;
}

public function setTipo($Tipo) {
    $this->_Tipo = $Tipo;
}

public function getFamilia() {
    return $this->_Familia;
}

public function setFamilia($Familia) {
    $this->_Familia = $Familia;
}

}

