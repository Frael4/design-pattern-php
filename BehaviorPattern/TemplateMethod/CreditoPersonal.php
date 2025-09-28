<?php
include_once('Credito.php');

class CreditoPersonal extends Credito {

    protected function operacionUno(Cliente $cliente)
    {
        return "Credito Personal: {$cliente->getName()} - Operacion 1 \n";
    }

    protected function operacionDos(Cliente $cliente)
    {
        return "Credito Personal: {$cliente->getName()} - Operacion 2 \n";
    }

    protected function operacionTres(Cliente $cliente)
    {
        return "Credito Personal: {$cliente->getName()} - Operacion 3 \n";
    }
}