<?php

class Application_Model_DbTable_Chamado extends Zend_Db_Table_Abstract
{

    protected $_name = 'chamados';
    protected $_referenceMap = array(
        "User" => array(
            "refTableClass" => "Application_Model_DbTable_User",
            "refColumns" => "id",
            "columns" => array("user_id")
        )
    );

}

