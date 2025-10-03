<?php

class Component2 extends BaseComponent
{
    function doC(): void
    {
        echo "Component 2 does C. \n";
        $this->mediator->notify($this, "C");
    }

    function doD(): void
    {
        echo "Component 2 does D. \n";
        $this->mediator->notify($this, "D");
    }
}
