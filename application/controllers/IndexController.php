<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        //action body
        $usuario = new Application_Model_DbTable_User();
        $userx = $usuario->find(1)->current();

        $chamados = $userx->findApplication_Model_DbTable_Chamado();
        $this->view->userx = $userx;
        $this->view->chamados = $chamados;
    }

}

