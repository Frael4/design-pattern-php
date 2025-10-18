<?php

include_once "DataAccess.php";
include_once "HeavyDatabaseConnector.php";

/**
 * Proxy
 */
class DataAccessProxy implements DataAccess
{
    /**
     * @var HeavyDatabaseConnector
     */
    private $realConnector = null;

    function getData()
    {
        if ($this->realConnector === null) {
            echo "Proxy: Carga diferida del objeto pesado... \n";
            $this->realConnector = new HeavyDatabaseConnector();
        }

        return $this->realConnector->getData();
    }
}