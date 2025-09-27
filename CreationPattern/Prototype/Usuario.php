<?php

include_once("Clonable.php");

class Usuario implements Clonable
{
    private string $nombre;
    private int $age;
    
    // Opcional: una propiedad de objeto para demostrar la clonación profunda
    private stdClass $direcciones;

    public function __construct(string $nombre, int $age)
    {
        $this->nombre = $nombre;
        $this->age   = $age;
        //
        $this->direcciones = new stdClass();
        $this->direcciones->primera = 'Calle 1';
        $this->direcciones->segunda = 'Calle 2';
    }
    
    // Método implementado de la interfaz. Llama al operador 'clone' de PHP.
    public function clonar(): Clonable
    {
        // En PHP, simplemente usamos el operador 'clone' para iniciar el proceso.
        return clone $this;
    }

    /**
     * El método mágico __clone() es donde se asegura la "Deep Copy"
     * de cualquier propiedad que sea un objeto (como 'propiedadCompleja').
     */
    public function __clone()
    {
        // Clonación Profunda: Forzamos la copia de la propiedad de objeto.
        $this->direcciones = clone $this->direcciones;
        
        // Opcional: Reajustar valores para el nuevo objeto
        $this->direcciones->segunda = 'Calle 2 (Copia)';
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setAge(int $age): void{
        $this->age = $age;
    }

    public function __toString(): string
    {
        return "Usuario: {$this->nombre}, edad: {$this->age} Direcciones: {$this->direcciones->primera}, {$this->direcciones->segunda}";
    }
}