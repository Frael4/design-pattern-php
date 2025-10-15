<?php
include_once "ProcessorDecorator.php";

/**
 * Decorador concreto que añade Logging
 */
class LoggingDecorator extends ProcessorDecorator
{

    function process($data): string
    {
        echo "[LOG] Iniciando procesamiento de datos. \n";
        $result = parent::process($data);
        echo "[LOG] Procesamiento finalizado. \n";

        return $result;
    }
}