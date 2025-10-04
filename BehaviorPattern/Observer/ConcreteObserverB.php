<?php

class ConcreteObserverB implements \SplObserver
{

    private $name;
    function __construct()
    {
        $this->name = "Observer B";
    }

    function getName()
    {
        return $this->name;
    }

    public function update(\SplSubject $splSubject): void
    {
        // var_dump($splSubject);
        if ($splSubject->state == 0 || $splSubject->state >= 2) {
            echo "ConcreteObserverB: Reaccionó al evento. \n";
        }
    }
}