<?php

class DatabaseConnection
{
    function connect($config)
    {
        return "Conexión a {$config['host']} establecida.\n";
    }

    function disconnect()
    {
        return "Conexión cerrada.\n";
    }
}