<?php

class Application_Model_User
{
private $_id; //segun la regla para declarar una variable $ luego_ y el nombre
private $_nombre;
private $_apellido;
private $_rol;
private $_correo;

function __construct($id, $nombre, $apellido, $rol, $correo) {
    $this->_id = $id;
    $this->_nombre = $nombre;
    $this->_apellido = $apellido;
    $this->_rol = $rol;
    $this->_correo = $correo;
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

public function getApellido() {
    return $this->_apellido;
}

public function setApellido($apellido) {
    $this->_apellido = $apellido;
}

public function getRol() {
    return $this->_rol;
}

public function setRol($rol) {
    $this->_rol = $rol;
}

public function getCorreo() {
    return $this->_correo;
}

public function setCorreo($correo) {
    $this->_correo = $correo;
}

}

