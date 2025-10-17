<?php

include_once "TreeType.php";

/**
 * Objeto Contextual (Mantiene el estado extrínseco)
 */
class Tree
{

    private $x;
    private $y;
    /**
     * @var TreeType
     */
    private $type;

    function __construct($x, $y, TreeType $type)
    {
        $this->x = $x;
        $this->y = $y;
        $this->type = $type;
    }

    function draw()
    {
        $this->type->draw($this->x, $this->y);
    }
}