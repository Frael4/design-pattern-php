<?php

class ConcreteObserverA implements SplObserver
{
    private $name;
    function __construct()
    {
        $this->name = "Observer A";
    }

    function getName()
    {
        return $this->name;
    }
    public function update(\SplSubject $splSubject): void
    {
        try {
            if ($splSubject->state < 3) {
                echo "ConcreteObserverA: Reaccionó al evento. \n";
            }
        } catch (\Exception $e) {
            echo "{$e->getMessage()}";
        }

    }
}