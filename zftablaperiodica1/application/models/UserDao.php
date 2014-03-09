<?php

class Application_Model_UserDao
{
    private $_listaUser;
    public function  __construct()
    {
      $this-> _listaUser= new ArrayObject();//hast aqui no hay relacion con el archivo user
      $value= new Application_Model_User(); // me instancio a user, va a user
      $value->setId(1);
      $value->setNombre('marcial');
      $value->setApellido('Huaraca taype');
      $value->setRol('invitado');
      $value->setCorreo('marcial@hotmail.com');
      $this->_listaUser->append($value); //  es para agregar una estructura a un array
      $this->_listaUser->append(new Application_Model_User(2, 'Pepe', 'Gonsales', 'infiltrado','Pepe@hotmail.com'));
      $this->_listaUser->append(new Application_Model_User(3, 'Maria', 'Alvarez', 'invitado','Maria@hotmail.com'));
      $this->_listaUser->append(new Application_Model_User(4, 'Lilia', 'Linda', 'alcaldesa','Lilia@hotmail.com'));
      $this->_listaUser->append(new Application_Model_User(5, 'Pedro', 'Caceres', 'invitado','Pedro@hotmail.com'));
      $this->_listaUser->append(new Application_Model_User(6, 'Pablo', 'Mariscal', 'invitado','Pablo@hotmail.com'));
      $this->_listaUser->append(new Application_Model_User(7, 'Vanesa', 'Ortega', 'infiltrada','Vanesa@hotmail.com'));
      $this->_listaUser->append(new Application_Model_User(8, 'Mariela', 'Atao', 'infiltrada','Mariela@hotmail.com'));
      $this->_listaUser->append(new Application_Model_User(9, 'Carmen', 'Alarcon', 'invitado','Carmen@hotmail.com'));
      $this->_listaUser->append(new Application_Model_User(10, 'Aurelio', 'Guisado', 'invitado','Aurelio@hotmail.com'));
      $this->_listaUser->append(new Application_Model_User(11, 'James', 'Centeno', 'invitado','James@hotmail.com'));
      $this->_listaUser->append(new Application_Model_User(12, 'Lola', 'Ancco', 'invitado','Lola@hotmail.com'));
      $this->_listaUser->append(new Application_Model_User(13, 'Yanet', 'Perez', 'infiltrada','Yanet@hotmail.com'));

    }
    public function listado()
    {
    return $this->_listaUser;
    }
    public function buscarPorId($id)
    {
        $result=null;
    foreach ($this->_listaUser as $value)
    {
        if ($id == $value->getId() )
        {
         $resul=$value;
         break;
        }
    }
    return $resul;
    }
 public function eliminar($id)
    {
    $resul=null;
    $this->_listaFiltro= new ArrayObject();
     foreach ($this->_listaUser as $value)
     {
      if($id != $value->getId())
        {
             $this->_listaFiltro->append($value);
        }
     }
    return $this->_listaFiltro;
    }
}


