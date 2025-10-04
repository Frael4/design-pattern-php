<?php

class Sujeto implements \SplSubject
{

    /**
     * @var \SplObjectStorage, lista de subscriptores
     */
    private $observers;

    /**
     * @var int Estado del Sujeto
     */
    public $state;

    function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    function attach(\SplObserver $observer): void
    {
        echo "Sujeto: Adjunta un {$observer->getName()} \n";
        $this->observers->attach($observer);
    }

    function detach(\SplObserver $observer): void
    {
        $this->observers->detach($observer);
        echo "Sujeto: Desadjunta un Observer .\n";
    }

    /**
     * Desencadena una notificación en cada subscriptor
     * @return void
     */
    function notify(): void
    {
        echo "\nSujeto: Notificando a Observers... \n";
        // var_dump($this->observers);
        foreach($this->observers as $observer) {
            echo "Notificando a: " . get_class($observer) . " (" . $observer->getName() . ")\n";
            $observer->update($this);
        }
    }

    function someBusinessLogic(): void {
        echo "\nSujeto: Estoy haciendo algo importante. \n";
        // Genera un entero random entre 0 y 10
        $this->state = rand(0, 10);

        echo "Sujeto: Mi estado ha sido cambiado a {$this->state}. \n";
        // Notificamos a los subcriptores
        $this->notify();
    }
}