<?php

/**
 * The Base Component provides the basic functionality of storing a mediator's
 * instance inside component objects.
 */
class BaseComponent
{

    protected $mediator;

    function __construct(Mediator $mediator = null)
    {
        $this->mediator = $mediator;
    }

    /**
     * Setea el Mediator
     * @param Mediator $mediator
     * @return void
     */
    function setMediator(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }
}