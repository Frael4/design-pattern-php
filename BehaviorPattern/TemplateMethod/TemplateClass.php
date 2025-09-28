<?php

/**
 * @api TemplateMethod
 * 
 * Esta clase sirve como base o modelo del conjunto de procesos
 * que se realizara
 * 
 */
abstract class TemplateMethod{

    private Cliente $cliente;

    function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    // Metodo Plantilla, es el metodo clave de este patron, ya que sera encargado de ejecutar
    // todos los metodos que conllevan el proceso del algoritmo
    public function runTemplate()
    {
        echo $this->operacionUno($this->cliente);
        echo $this->operacionDos($this->cliente);
        echo $this->operacionTres($this->cliente);
    }

    // Protegido solo para que sea usado por el Template
    protected abstract function operacionUno(Cliente $cliente);
    
    // Protegido solo para que sea usado por el Template
    protected abstract function operacionDos(Cliente $cliente);

    // Protegido solo para que sea usado por el Template
    protected abstract function operacionTres(Cliente $cliente);

}