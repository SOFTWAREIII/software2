<?php
class ContenidoController extends Zend_Controller_Action
{

    private $_listado = null;

    private $_buscarPorId = null;

    public function init()
    {
          $this->view->baseUrl=$this->getRequest()->getBaseUrl();
          $this->_listado= new Application_Model_ContenidoDao();
          $this->_buscarPorId= new Application_Model_ContenidoDao();
    }

    public function indexAction()
    {
        // action body
    }

    public function listadoAction()
    {
        // action body
       // var_dump($this-> _listado->listado()); //var_dump es para imprimr un array objeto ;imprime el metod listado de UserDao
        $this->view->listaContenido=$this->_listado->listado();//despues
    }

    public function nuevoAction()
    {
        // action body
    }

    public function buscarporidAction()
    {
        //$id=$this->getRequest()->getParam("txtId");
        //$this->view->id=$id;
        //if($id<14 && $id>0)                            //el id va desde 1 hasta 13, en caso contrario vota un mensaje
        //{
          //  $this->listaUser=$this->_buscarPorId->buscarPorId($id);
            //$this->view->listaUser= array($this->listaUser); //almaceno los datos de la busqueda por id en un array
            //$this->render('listado');                     //dirrecciono la vista listado.phtml, donde esta la tabla
        //}
        $id=$this->getRequest()->getParam("txtId");
        if($id<20 && $id>0){
            $this->view->id=$id;
          $buscarPorId=new  Application_Model_ContenidoDao();
          $Contenido=$buscarPorId->buscarPorId($id);
          $this->view->listaContenido=array($Contenido);
          $this->render('listado');
        }else{
           $this->_redirect('Contenido/listado'); //Tambien puede usarse $this->_forward('listado');
        }

    }

    public function eliminarAction()
    {
        // action body
         $id=$this->getRequest()->getParam("id",0);
         $Contenido=new  Application_Model_ContenidoDao();
         $resultado=$Contenido->eliminar($id);
         $this->view->listaContenido=$resultado;
         $this->render('listado');
         //echo $id;
    }

    public function modificarAction()
    {
        // action body
         $id=$this->getRequest()->getParam("id",0);
         $Contenido=new  Application_Model_ContenidoDao();
        // $resultado=$user->modificar($id);
         //$this->view->listaUser=$resultado;
         //$this->render('listado');
        echo $id;

    }


}
