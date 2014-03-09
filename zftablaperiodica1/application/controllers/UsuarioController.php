<?php
class UsuarioController extends Zend_Controller_Action
{

    private $_listado = null;

    private $_buscarPorId = null;

    public function init()
    {
          $this->view->baseUrl=$this->getRequest()->getBaseUrl();
          $this->_listado= new Application_Model_UserDao(); //se pone aqui para actualizar para todo
          $this->_buscarPorId= new Application_Model_UserDao();
    }

    public function indexAction()
    {
        // action body
    }

    public function listadoAction()
    {
        // action body  
       // var_dump($this-> _listado->listado()); //var_dump es para imprimr un array objeto ;imprime el metod listado de UserDao
        $this->view->listaUser=$this->_listado->listado();//despues
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
        if($id<14 && $id>0){
            $this->view->id=$id;
          $buscarPorId=new  Application_Model_UserDao();
          $user=$buscarPorId->buscarPorId($id);
          $this->view->listaUser=array($user);
          $this->render('listado');
        }else{
           $this->_redirect('usuario/listado'); //Tambien puede usarse $this->_forward('listado');
        }
        
    }

    public function eliminarAction()
    {
        // action body
         $id=$this->getRequest()->getParam("id",0);
         $user=new  Application_Model_UserDao();
         $resultado=$user->eliminar($id);
         $this->view->listaUser=$resultado;
         $this->render('listado');
         //echo $id;
    }

    public function modificarAction()
    {
        // action body
         $id=$this->getRequest()->getParam("id",0);
         $user=new  Application_Model_UserDao();
        // $resultado=$user->modificar($id);
         //$this->view->listaUser=$resultado;
         //$this->render('listado');
        echo $id;

    }


}











