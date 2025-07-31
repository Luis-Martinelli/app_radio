<?php

namespace app\Models;

use app\Models\BaseModel;

class Agents extends BaseModel
{
   public function check_login($username, $password)
   {
        //check if the login is valid
        $parms = [
            ':username' => $username
        ];

        //check if there is a user in the database
        $this->db_conect();
        $results = $this->query(
            "SELECT id, password FROM "
        );
   }
}