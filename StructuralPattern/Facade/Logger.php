<?php

class Logger
{
    function logQuery($sql)
    {
        return "[LOG] Consulta ejecutada: $sql.";
    }
}