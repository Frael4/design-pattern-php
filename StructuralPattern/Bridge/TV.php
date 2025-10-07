<?php

include_once "Device.php";

/**
 * Implementacion de Device
 */
class TV implements Device
{

    function enable(): void
    {
        echo "TV: Encendida. \n";
    }

    function disable(): void
    {
        echo "TV: Apagada.\n";
    }

    function setChannel(int $number): void
    {
        echo "TV: Cambiado al canal {$number}. \n";
    }
}