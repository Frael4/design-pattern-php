<?php

/**
* El Target define la interfaz específica del dominio que utiliza el código del cliente.
*/
class Target
{
    function request(): string {
        return "Target: El comportamiento por defecto de Target. \n";
    }
}