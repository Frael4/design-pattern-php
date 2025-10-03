<?php
include_once "BaseComponent.php";

class Component1 extends BaseComponent
{
    function doA(): void
    {
        echo "Component 1 does A. \n";
        $this->mediator->notify($this, "A");
    }

    function doB(): void
    {
        echo "Component 1 does B. \n";
        $this->mediator->notify($this, "B");
    }
}
