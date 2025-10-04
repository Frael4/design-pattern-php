# [State](https://refactoring.guru/es/design-patterns/state)

Permite a un objeto alterar su comportamiento cuando su estado interno cambia, dando la apariencia de que el objeto ha cambiado de clase.

> Utiliza el patrón State cuando tengas un objeto que se comporta de forma diferente dependiendo de su estado actual, el número de estados sea enorme y el código específico del estado cambie con frecuencia.

**Clase abstracta**

- `State.php`

**Clases**
- `Context.php`
- `ConcreteStateA.php`: Implementa `State`
- `ConcreteStateB.php`: Implementa `State`

## Ejecución
`php DemoState.php`

## Salida
```BASH

Context: Transición a ConcreteStateA.
Context: Actual estado ConcreteStateA.
ConcreteStateA maneja la petición 1 .
ConcreteStateA quiere cambiar el estado del Context.
Context: Transición a ConcreteStateB.
Context: Actual estado ConcreteStateB.
ConcreteStateB maneja la petición 2 .
ConcreteStateB quiere cambiar el estado del Context.
Context: Transición a ConcreteStateA.
Context: Actual estado ConcreteStateA.