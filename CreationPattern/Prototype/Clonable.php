<?php
// Interface que define el contrato del prototipo.
interface Clonable
{
    /**
     * Define el método para crear una copia del objeto.
     * @return Clonable
     */
    public function clonar(): Clonable;
}