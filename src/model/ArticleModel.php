<?php

namespace Model;

use Core\Model;

class ArticleModel extends Model
{
    public function __construct()
    {
        // Ouverture de la connection
        parent::openConnection();
        $this->table = 'article';
    }

    public function save($data) : int|false{
        extract($data);
        $sql = "INSERT INTO `article` (`libelle`, `qteStock`) VALUES ('$libelle', '$qteStock')";
        return $this->pdo->exec($sql);
    }

}
