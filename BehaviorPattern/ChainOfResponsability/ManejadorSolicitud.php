<?php

/**
 * The Handler interface declares a method for building the chain of handlers.
 * It also declares a method for executing a request.
 */
abstract class ManejadorSolicitud
{

    protected ?ManejadorSolicitud $manejadorSolicitud = null;

    /**
     * setSiguiente
     * @param ManejadorSolicitud $siguiente
     * @return void
     */
    // Returning a handler from here will let us link handlers in a
    // convenient way like this:
    public function setSiguiente(ManejadorSolicitud $siguiente): ManejadorSolicitud
    {
        $this->manejadorSolicitud = $siguiente;

        return $this->manejadorSolicitud;
    }

    public function manejador(string $request): ?string
    {
        if($this->manejadorSolicitud){
            return $this->manejadorSolicitud->manejador($request);
        }

        return null;
    }

}