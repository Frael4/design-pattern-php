<?php

include_once "Memento.php";
include_once "ConcreteMemento.php";

/**
 * El Originador contiene un estado importante que puede cambiar con el tiempo. 
 * También define un método para guardar el estado dentro de un memento y otro método para
 * restaurarlo desde él.
 */
class Originador
{

    /**
     * @var string for simplicity, el estado del Originador es almacenado
     * en una sola variable
     */
    private $state;

    function __construct(string $state)
    {
        $this->state = $state;
        echo "Originador: Mi estado actual es: {$this->state}. \n";
    }

    function doSomething(): void
    {
        echo "Originador: Haciendo algo importante. \n";
        $this->state = $this->generateRamdonString(30);
        echo "Originador: Mi estado ha cambiado a: {$this->state}. \n";
    }

    /**
     * La lógica de negocio del Originador puede afectar su estado interno. Por lo tanto,
     * el cliente debe realizar una copia de seguridad del estado 
     * antes de ejecutar los métodos de la lógica de negocio mediante el método save().
     */
    private function generateRamdonString(int $length = 10)
    {
        return substr(
            str_shuffle(
                str_repeat(
                    $x = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
                    ceil($length / strlen($x))
                )
            ),
            1,
            $length
        );
    }

    /**
     * Guarda el estado actual dentro de un Memento
     * @return ConcreteMemento
     */
    function save(): Memento
    {
        return new ConcreteMemento($this->state);
    }

    /**
     * Restaura el estado del Originador desde un objeto Memento
     * @param Memento $memento
     * @return void
     */
    function restore(Memento $memento): void
    {
        $this->state = $memento->getState();
        echo "Originador: Mi estado ha sido restaurado a {$this->state}. \n";
    }
}