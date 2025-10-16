<?php

include_once "DatabaseConnection.php";
include_once "QueryBuilder.php";
include_once "Logger.php";

/**
 * Fachada de Database
 */
class DatabaseFacade
{
    private $connection;
    private $builder;
    private $logger;

    function __construct($config)
    {
        $this->connection = new DatabaseConnection();
        $this->builder = new QueryBuilder();
        $this->logger = new Logger();
        $this->connection->connect($config);
    }

    function fetchAllUsers($condition = "1=1")
    {
        $sql = $this->builder->select("users");
        $sql = $this->builder->where($sql, $condition);

        $output = $this->logger->logQuery($sql);
        $output .= "\nEjecutando: $sql. \n";

        return $output;
    }

    public function close()
    {
        return $this->connection->disconnect();
    }
}