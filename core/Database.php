<?php


namespace app\core;


class Database
{
    public \PDO $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO($dns,$user,$password);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
    }

}
