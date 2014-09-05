<?php

class Application_Model_DbTable_Interacao extends Zend_Db_Table_Abstract
{
    protected $_name = 'interacoes';
    protected $_dependentTables = array(
    );

    protected $_referenceMap = array(
        "User" => array(
            "refTableClass" => "Application_Model_DbTable_User",
            "refColumns" => "id",
            "columns" => array("user_id")
        ),
        "Chamado" => array(
            "refTableClass" => "Application_Model_DbTable_Chamado",
            "refColums" => "id",
            "columns" => array("chamado_id"),
            "onDelete" => self::CASCADE
        )
    );

    public function insert(array $data) {
        $date = new Zend_Date();
        $data["created_at"] = $date->toString("YYYY-MM-dd hh:mm:ss");
        parent::insert($data);
    }
}

