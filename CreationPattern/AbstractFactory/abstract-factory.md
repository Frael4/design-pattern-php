# [Fabrica Abstracta](https://refactoring.guru/es/design-patterns/abstract-factory)

Permite producir familias de objetos relacionados sin especificar sus clases concretas. Es una "fábrica de fábricas".

> En un programa bien diseñado cada clase es responsable tan solo de una cosa. Cuando una clase lidia con varios tipos de productos, puede ser que valga la pena extraer sus métodos de fábrica para ponerlos en una clase única de fábrica o una implementación completa del patrón Abstract Factory.

**Interfaces**
- `Boton.php`
- `Ventana.php`

**Clases implementadoras**
- `BotonWindows.php`
- `VentanaWindows.php`

**Interface Creadora**
- `GUIFactory.php`

**Clase creadora**
- `FabricaWindows.php`

## Ejecución

`php DemoAbstractFactory.php`

## Salida 

```
Pintando boton en Windows ✅
Mostrando ventana Windows .
```
