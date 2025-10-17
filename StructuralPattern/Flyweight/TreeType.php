<?php
/**
 * Flyweight (El estado intrínseco, que es compartido)
 */
class TreeType
{

    private $texture;
    private $color;

    function __construct($texture, $color)
    {
        $this->texture = $texture;
        $this->color = $color;
    }

    function draw($x, $y)
    {
        echo "Dibujando árbol con textura {$this->texture} y color {$this->color} en ($x, $y) .\n";
    }
}