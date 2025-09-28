<?php

include_once('TemplateClass.php');

abstract class Credito extends TemplateMethod
{
    protected abstract function operacionUno(Cliente $cliente);
}
