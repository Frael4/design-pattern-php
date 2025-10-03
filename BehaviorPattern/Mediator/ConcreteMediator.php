<?php

include_once "Mediator.php";
include_once "Component1.php";
include_once "Component2.php";

class ConcreteMediator implements Mediator {

    private Component1 $component1;

    private Component2 $component2;

    function __construct(Component1 $c1, Component2 $c2){
        $this->component1 = $c1;
        $this->component1->setMediator($this);

        $this->component2 = $c2;
        $this->component2->setMediator($this);
    }

    /**
     * Summary of notify
     * @param object $sender
     * @param string $event
     * @return void
     */
    function notify(object $sender, string $event): void{

        //echo isset($sender) ? "Hola ":  " Adios";

        if($event == "A"){
            echo "Mediator reacts on A and triggers following operations: \n";
            $this->component2->doC();
        }

        if($event == "D"){
            echo "Mediator reacts on D and triggers following operations: \n";
            $this->component1->doB();
            $this->component2->doC();
        }
    }
}