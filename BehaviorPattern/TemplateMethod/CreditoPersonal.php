<?php

class CreditoPersonal extends Credito {

    protected function operacionUno($value)
    {
        return "Credito Personal - Operacion 1";
    }

    protected function operacionDos($value)
    {
        return "Credito Personal - Operacion 2";
    }

    protected function operacionTres($value)
    {
        return "Credito Personal - Operacion 3";
    }
}