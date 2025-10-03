# [Mediator](https://refactoring.guru/es/design-patterns/mediator)

Permite reducir las dependencias caóticas entre objetos forzándolos a colaborar únicamente a través de un objeto mediador.

>  Utiliza el patrón Mediator cuando resulte difícil cambiar algunas de las clases porque están fuertemente acopladas a un puñado de otras clases.
>  Utiliza el patrón cuando no puedas reutilizar un componente en un programa diferente porque sea demasiado dependiente de otros componentes.

**Interface**

- `Mediator.php`: Esqueleto del patrón, incluye el método de notificar.

**Clases**

- `ConcreteMediator`: Implementa la interfaz, y pone en marcha toda la lógica.
- `BaseComponent.php`
- `Component1.php`
- `Component2.php`


## Ejecución
`php DemoMediator.php`

## Salida

```BASH
Cliente desencadena operación A.
Component 1 does A.
Mediator reacts on A and triggers following operations:
Component 2 does C.

Cliente desencadena operación D.
Component 2 does D.
Mediator reacts on D and triggers following operations:
Component 1 does B.
Component 2 does C.
