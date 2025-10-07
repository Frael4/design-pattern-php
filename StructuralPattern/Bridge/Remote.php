<?php

include_once "Device.php";

/**
 * 
 */
abstract class Remote
{
    protected Device $device;

    function __construct(Device $device)
    {
        $this->device = $device;
    }

    abstract function powerOn(): void;
    abstract function powerOff(): void;
}