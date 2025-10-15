<?php

include_once "DataProcessor.php";
/**
 * Clase que vamos a decorar
 */
class BasicDataProcessor implements DataProcessor
{
    function process($data): string
    {
        return "Datos básicos procesados: $data.";
    }
}