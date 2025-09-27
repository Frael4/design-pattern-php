# [Prototype](https://refactoring.guru/es/design-patterns/prototype)

Permite copiar objetos existentes sin que el código dependa de sus clases.

> Un objeto que soporta la clonación se denomina prototipo. 

> 📌**Nota:** El núcleo del Patrón Prototype en PHP es el uso del operador clone y el método mágico `__clone()` (Deep Copy).

Para entendor mejor esto, realizamos un ejemplo con una copia tradicional superficial
La clase `CloneSuperficialExample.php` muestra la siguiente salida

```
Original Componente: Objeto Original
Original Componente: Componente Único
--- Resultado sin __clone() ---
Original Componente: Componente Modificado en la Copia
Copia Componente: Componente Modificado en la Copia
Original Componente: Componente Modificado en la Copia 2
Copia2 Componente: Componente Modificado en la Copia 2
```
Como se observa la clase no implementa el método `__clone()`, por lo cual el operador clone no tiene efecto en el momento de realizar la copia.


## Implementación real

**Interface**
- `Clonable.php`: Esta interface es la plantilla para que cualquier clase que implemente el metodo clonar

**Clase implementadora**
- `Usuario.php`: Implementa la interaface y sobreescribe el método `__clone()`

```PHP
public function __clone()
{
    // Clonación Profunda: Forzamos la copia de la propiedad de objeto.
    $this->direcciones = clone $this->direcciones;
    
    // Opcional: Reajustar valores para el nuevo objeto
    $this->direcciones->segunda = 'Calle 2 (Copia)';
}

```

## Ejecución
`php DemoPrototype.php`

## Salida
```
Original: Usuario: Stevkson, edad: 20 Direcciones: Calle 1, Calle 2
Clonado: Usuario: Stevkson, edad: 20 Direcciones: Calle 1, Calle 2 (Copia)

Original (Verificación): Usuario: Stevkson, edad: 20 Direcciones: Calle 1, Calle 2
Clonado (Modificado): Usuario: Stevkson, edad: 25 Direcciones: Calle 1, Calle 2 (Copia)
¿Son el mismo objeto? false
```
