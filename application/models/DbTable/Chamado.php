<?php

class Application_Model_DbTable_Chamado extends Zend_Db_Table_Abstract
{
    protected $_name = 'chamados';
    protected $_dependentTables = array(
        "Application_Model_DbTable_Interacao",
    );

    protected $_referenceMap = array(
        "User" => array(
            "refTableClass" => "Application_Model_DbTable_User",
            "refColumns" => "id",
            "columns" => array("user_id")
        )
    );

    public function insert(array $data) {
        $date = new Zend_Date();
        $data["created_at"] = $date->toString("YYYY-MM-dd hh:mm:ss");
        parent::insert($data);
    }
}

