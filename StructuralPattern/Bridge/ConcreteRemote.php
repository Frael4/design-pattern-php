<?php

include_once "Remote.php";

/**
 * 
 */
class ConcreteRemote extends Remote
{

    function powerOn(): void
    {
        $this->device->enable();
    }

    function powerOff(): void
    {
        $this->device->disable();
    }

    public function mute()
    {
        echo "Control: Silenciado el dispositivo. \n";
    }
}