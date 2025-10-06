# [Adapter](https://refactoring.guru/es/design-patterns/adapter)

Adapter es un patrón de diseño estructural que permite la colaboración entre objetos con interfaces incompatibles.

*(...)Se trata de un objeto especial que convierte la interfaz de un objeto, de forma que otro objeto pueda comprenderla.*

> Utiliza la clase adaptadora cuando quieras usar una clase existente, pero cuya interfaz no sea compatible con el resto del código.

>  El patrón Adapter te permite crear una clase intermedia que sirva como traductora entre tu código y una clase heredada, una clase de un tercero o cualquier otra clase con una interfaz extraña.

**Clases**

- `Adapter.php`: El `Adapter` hace que la interfaz del `Adaptee` sea compatible con la interfaz del `Target`.
- `Adaptee.php`: El Adaptee contiene algún comportamiento útil, pero su interfaz es incompatible con el código de cliente existente.
- `Target.php`: Define la interfaz específica del dominio que utiliza el código del cliente.


## Ejecución
- `php DemoAdapter.php`

## Salida
```BASH
Cliente: Yo puedo trabajar bien con los objetos de Target. 
Target: El comportamiento por defecto de Target.


Cliente: La clase Adaptee tiene una interface rara, yo no la entiendo.
Adaptee: .eetpadA ed laicepse otneimatropmoC lE

Cliente: Pero yo puedo trabajar con ese via el Adapter.
Adapter: (TRADUCCION) El Comportamiento especial de Adaptee.