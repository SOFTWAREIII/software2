<?php

class AdminController extends Zend_Controller_Action
{

    public function init()
    {
        $this->view->baseUrl=$this->getRequest()->getBaseUrl();
    }

    public function indexAction()
    {
        // action body
    }


}

