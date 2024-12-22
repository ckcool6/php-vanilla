<?php

class QueryBuild
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function selectAll($table)
    {
        $statement  = $this->pdo->prepare(query: "select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}
