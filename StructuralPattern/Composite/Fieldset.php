<?php
include_once "FormElement.php";

/**
 * Clase concreta
 */
class Fieldset implements FormElement
{
    private $children = [];
    private $title;

    function __construct($title)
    {
        $this->title = $title;
    }

    function add(FormElement $element)
    {
        $this->children[] = $element;
    }

    /**
     * El método clave: itera y delega la renderización a sus hijos
     * @return string
     */
    function render(): string
    {
        $output = "<fieldset><legend>$this->title</legend>";

        foreach ($this->children as $child) {
            $output .= $child->render();
        }
        $output .= "</fieldset>";

        return $output;
    }
}