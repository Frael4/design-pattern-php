<?php
include_once "AlphabeticalOrderITerator.php";

class WordsCollection implements IteratorAggregate {

    private $items = [];

    function getItems(){
        return $this->items;
    }

    function addItem($item){
        $this->items[] = $item;
    }

    function getIterator(): Traversable{
        return new AlphabeticalOrderITerator($this);
    }

    function getReverseIterator(): mixed {
        return new AlphabeticalOrderITerator($this, true);
    }
}
