<?php

namespace Model;

use Core\Model;

class UserModel extends Model
{
    public function __construct()
    {
        // Ouverture de la connection
        parent::openConnection();
        $this->table = 'user';

    }


    public function getUserByLoginAndPassword(string $login, string $password)
    {
        $sql = "SELECT * FROM `$this->table` WHERE `login` LIKE '$login' AND `password` LIKE '$password'";
        return parent::executeSelect($sql, true);
    }
}
