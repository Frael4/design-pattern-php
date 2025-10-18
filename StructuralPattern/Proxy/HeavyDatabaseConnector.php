<?php

include_once "DataAccess.php";

/**
 * Objeto pesado
 */
class HeavyDatabaseConnector implements DataAccess
{
    function __construct()
    {
        // Duerme 2 segundos
        sleep(2);
        echo "Conexión  a la BD establecida. \n";
    }

    function getData()
    {
        return "Datos sensibles del sistema.\n";
    }
}