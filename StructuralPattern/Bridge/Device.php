<?php

/**
 * Interfaz de Implementación (el "Puente" o el "Cómo")
 */
interface Device
{
    function enable(): void;
    
    function disable(): void;

    function setChannel(int $number): void;
}