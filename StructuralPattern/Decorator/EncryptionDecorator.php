<?php
include_once "ProcessorDecorator.php";

/**
 * Decorador concreto que añade encryptacion
 */
class EncryptionDecorator extends ProcessorDecorator
{
    function process($data): string
    {
        echo "[ENCRYPT] Cifrando los datos antes de procesar... \n";
        // Simulación: Invertir el string como "cifrado"
        $encryptedData = strrev($data);
        $result = parent::process($encryptedData);
        return $result;
    }
}