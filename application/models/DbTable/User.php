<?php

class Application_Model_DbTable_User extends Zend_Db_Table_Abstract
{
    protected $_name = 'users';
    protected $_dependentTables = array(
        "Application_Model_DbTable_Chamado",
        "Application_Model_DbTable_Interacao",
    );

    public function insert(array $data) {
        $data["password"] = sha1($data["password"]);
        parent::insert($data);
    }
}

