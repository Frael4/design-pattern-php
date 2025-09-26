<?php
use Cliente;

abstract class TemplateMethod{

    function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function runTemplate()//Metodo que corre las funciones privadas
    {
        # code...
        echo $this->operacionUno($this->cliente);
        echo $this->operacionDos($this->cliente);
        echo $this->operacionTres($this->cliente);
    }

    /**
     * @
     */
    protected abstract function operacionUno($value);//Protegido solo para que sea usado por el Template

    /**
     * 
     */
    protected abstract function operacionDos($value);//Protegido solo para que sea usado por el Template

    /**
     * 
     */
    protected abstract function operacionTres($value);//Protegido solo para que sea usado por el Template

}