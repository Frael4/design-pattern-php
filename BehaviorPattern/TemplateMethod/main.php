<?php
/* include('./Cliente.php');
include('./CreditoPersonal.php');

use Cliente;
use CreditoPersonal;

$cliente = new Cliente();
$cliente->setName("Arturo");
$credito = new CreditoPersonal($cliente);

$credito->runTemplate();
 */

use TemplateMethod as GlobalTemplateMethod;

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

class CreditoPersonal extends GlobalTemplateMethod {

    protected function operacionUno($value)
    {
        return "Credito Personal - Operacion 1 <br>";
    }

    protected function operacionDos($value)
    {
        return "Credito Personal - Operacion 2 <br>";
    }

    protected function operacionTres($value)
    {
        return "Credito Personal - Operacion 3 <br>";
    }
}

class Cliente{

    var $nombre = '';

    public function setName($value){
        $this->nombre = $value;
    }

    public function getName(){
        return $this->nombre;
    }
}

class Greet {

    public function saludar()
    {
        echo '<h4>Saludando ...</h4>';
    }
}



$var = new Greet();
$var->saludar();$cliente = new Cliente();
$cliente->setName("Arturo");
$credito = new CreditoPersonal($cliente);

$credito->runTemplate();