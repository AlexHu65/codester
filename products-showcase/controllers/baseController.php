<?php

require_once 'config/db.php';

class baseController
{

    public function getTemplate()
    {
        include './views/template.php';

    }

    protected static function getDatabase()
    {
        $db = new db();
        return $db->getConnection();

    }


}