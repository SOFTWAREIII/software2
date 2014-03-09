<?php

class Application_Model_ElementoDao
{
    private $_listaElemento;
    public function  __construct()
    {
      $this-> _listaElemento= new ArrayObject();//hast aqui no hay relacion con el archivo user
      $value= new Application_Model_Elemento(); // me instancio a user, va a user
      $value->setId(1);
      $value->setNombre('Hidrogeno');
      $value->setSimbolo('H');
      $value->setPesoatomico('1.008');
      $value->setValencia('1');
      $value->setTipo('No Metal');
      $value->setFamilia('Alcalinos');
      $this->_listaElemento->append($value); //  es para agregar una estructura a un array
      $this->_listaElemento->append(new Application_Model_Elemento(2, 'Helio', 'He', '4.002', '0', 'No Metal','Gases Nobles'));
      $this->_listaElemento->append(new Application_Model_Elemento(3, 'Litio', 'Li', '6.94', '1', 'Metal','Alcalino'));
      $this->_listaElemento->append(new Application_Model_Elemento(4, 'Berilio', 'Be', '9.012', '2', 'Metal','Alcalino Terreos'));
      $this->_listaElemento->append(new Application_Model_Elemento(5, 'Boro', 'B', '10.81', '3', 'No Metal','Boroides'));
      $this->_listaElemento->append(new Application_Model_Elemento(6, 'Carbono', 'C', '12.011', '2, 4, -4', 'No Metal','Carbonoides'));
      $this->_listaElemento->append(new Application_Model_Elemento(7, 'Nitrogeno', 'N', '14.01', '1,3,5', 'No Metal','Nitrogenoides'));
      $this->_listaElemento->append(new Application_Model_Elemento(8, 'Oxigeno', 'O', '15.999', '-1, -2', 'No Metal','Calcogenos'));
      $this->_listaElemento->append(new Application_Model_Elemento(9, 'Fluor', 'F', '18.99', '-1', 'No Metal','Halogenos'));
      $this->_listaElemento->append(new Application_Model_Elemento(10, 'Neon', 'Ne', '20.18', '0', 'Nometal','Gases Nobles'));
      $this->_listaElemento->append(new Application_Model_Elemento(11, 'Sodio', 'Na', '22.99', '1', 'Metal','Alcalino'));
      $this->_listaElemento->append(new Application_Model_Elemento(12, 'Magnesio', 'Mg', '24.31', '2', 'Metal','Alcalino Terreos'));
      $this->_listaElemento->append(new Application_Model_Elemento(13, 'Aluminio', 'Al', '26.98', '3', 'Metaloide','Boroides'));
      $this->_listaElemento->append(new Application_Model_Elemento(14, 'Carbono', 'C', '12.011', '2, 4, -4', 'No Metal','Carbonoides'));
      $this->_listaElemento->append(new Application_Model_Elemento(15, 'Nitrogeno', 'N', '14.01', '1,3,5', 'No Metal','Nitrogenoides'));
      $this->_listaElemento->append(new Application_Model_Elemento(16, 'Oxigeno', 'O', '15.999', '-1, -2', 'No Metal','Calcogenos'));
      $this->_listaElemento->append(new Application_Model_Elemento(17, 'Fluor', 'F', '18.99', '-1', 'No Metal','Halogenos'));
      $this->_listaElemento->append(new Application_Model_Elemento(18, 'Neon', 'Ne', '20.18', '0', 'Nometal','Gases Nobles'));
      $this->_listaElemento->append(new Application_Model_Elemento(19, 'Sodio', 'Na', '22.99', '1', 'Metal','Alcalino'));
      $this->_listaElemento->append(new Application_Model_Elemento(20, 'Magnesio', 'Mg', '24.31', '2', 'Metal','Alcalino Terreos'));
      $this->_listaElemento->append(new Application_Model_Elemento(21, 'Aluminio', 'Al', '26.98', '3', 'Metaloide','Boroides'));
      $this->_listaElemento->append(new Application_Model_Elemento(22, 'Carbono', 'C', '12.011', '2, 4, -4', 'No Metal','Carbonoides'));
      $this->_listaElemento->append(new Application_Model_Elemento(23, 'Nitrogeno', 'N', '14.01', '1,3,5', 'No Metal','Nitrogenoides'));
      $this->_listaElemento->append(new Application_Model_Elemento(24, 'Oxigeno', 'O', '15.999', '-1, -2', 'No Metal','Calcogenos'));
      $this->_listaElemento->append(new Application_Model_Elemento(25, 'Fluor', 'F', '18.99', '-1', 'No Metal','Halogenos'));
      $this->_listaElemento->append(new Application_Model_Elemento(26, 'Neon', 'Ne', '20.18', '0', 'Nometal','Gases Nobles'));

  }
    public function listado()
    {
    return $this->_listaElemento;
    }
    public function buscarPorId($id)
    {
        $result=null;
    foreach ($this->_listaElemento as $value)
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
     foreach ($this->_listaElemento as $value)
     {
      if($id != $value->getId())
        {
             $this->_listaFiltro->append($value);
        }
     }
    return $this->_listaFiltro;
    }
}


