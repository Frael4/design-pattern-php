<?php

include_once "FormElement.php";

class InputField implements FormElement
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    function render(): string
    {
        return "<input type='text' name='{$this->name}'>";
    }
}