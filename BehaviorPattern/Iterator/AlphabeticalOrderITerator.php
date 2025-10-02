<?php

class AlphabeticalOrderITerator implements Iterator {

    /**
     * Coleccion de palabras
     * @var 
     */
    private $collection;

    /**
     * Almacena la actual posicion traversal
     * @var int
     */
    private $position = 0;

    /**
     * Indica la dirección traversal
     * @var 
     */
    private $reverse = false;

    function __construct($collection, $reverse = false){
        $this->collection = $collection;
        $this->reverse = $reverse;
    }

    function current(): mixed{
        return $this->collection->getItems()[$this->position];
    }

    function key(): mixed{
        return $this->position;
    }

    function next(): void{
        $this->position = $this->position + ($this->reverse ? -1 : 1);
    }

    function rewind(): void{
        $this->position = $this->reverse ? count($this->collection->getItems()) - 1 : 0;
    }

    function valid(): bool{
        return isset($this->collection->getItems()[$this->position]);
    }
}