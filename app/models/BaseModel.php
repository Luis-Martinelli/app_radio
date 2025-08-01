<?php

namespace app\Models;

use app\System\Database;

abstract class BaseModel
{
    public $db;

    public function db_connect()
    {
        $options = [
            'host' => MYSQL_HOST,
            'database' => MYSQL_DATABASE,
            'username' => MYSQL_USERNAME,
            'password' => MYSQL_PASSWORD, 
        ];
        $this->db = new Database($options);
    }

    public function query($sql = "", $params = [])
    {
        return $this->execute_query($sql, $params);
    }
}