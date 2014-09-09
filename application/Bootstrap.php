<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    public function _initViews() {
        $this->bootstrap("view");
        $view = $this->getResource("view");
        $view->doctype("XHTML1_TRANSITIONAL");
        Zend
    }

}

