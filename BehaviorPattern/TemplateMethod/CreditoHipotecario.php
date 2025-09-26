<?php

class CreditoHipotecario extends Credito {

    protected function operacionUno($value)
    {
        return "Credito Hipotecario - Operacion 1";
    }

    protected function operacionDos($value)
    {
        return "Credito Hipotecario - Operacion 2";        
    }

    protected function operacionTres($value)
    {
        return "Credito Hipotecario - Operacion 3";
    }
}