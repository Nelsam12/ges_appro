<?php

namespace Core;

use PDO;

class Model
{
    protected string $dns = "mysql:host=localhost;dbname=ges_appro";
    protected string $user = "root";
    protected string $pass = "root";
    protected \PDO|null $pdo = null;
    protected string $table;

    protected function openConnection()
    {
        if ($this->pdo == null) {
            $this->pdo = new PDO($this->dns, $this->user, $this->pass);
        }
    }

    protected function closeConnection()
    {
        if ($this->pdo != null) {
            $this->pdo = null;
        }
    }

    public function getAll()
    {
        $sql = "SELECT * FROM `$this->table`";
        return $this->executeSelect($sql);
    }

    protected function executeSelect(string $sql, bool $fetch = false)
    {
        return $fetch ? $this->pdo->query($sql)->fetch(\PDO::FETCH_ASSOC) : $this->pdo->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
    }
}
