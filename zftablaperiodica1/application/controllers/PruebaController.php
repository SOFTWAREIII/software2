<?php

class PruebaController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
        $this->view->baseUrl=$this->getRequest()->getBaseUrl();
    }

    public function indexAction()
    {
        // action body
    }

    public function sumaAction()
    {
        // action body
        //$A=$_POST["txtvalora"];   esto es para trabajar solo con la vista e imprimeindo los valores de a y b
         //$B=$_POST["txtvalorb"];
        //echo  $A."-".$B;

        $A=$this->getRequest()->getParam("TXTA");
        $B=$this->getRequest()->getParam("TXTB");


        $operacion= new Application_Model_Operacion();//me hey instanciado al modelo llamado operacion

        $this->view->M=$A; //para que se quede en la tabla el numero que ingresas o los valores
        $this->view->N=$B;

         //$this->view->suma=$A+$B;         estos dos se utiliza para trabajar con la vista y  controlador
         // $this->view->producto=$A*$B;

        $this->view->suma=$operacion->suma($A, $B);  //estas dos se utiliza para trabajar la vista el controlador y el modelo
        $this->view->producto=$operacion->producto($A, $B);
        $this->render("index");   //render EJECUTA LOS anteriores como la suma y producto y lo envia a la vista
    }


}



