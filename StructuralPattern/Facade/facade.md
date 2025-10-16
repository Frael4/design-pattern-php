# [Facade](https://refactoring.guru/es/design-patterns/facade) Fachada 🏛️

![alt](https://refactoring.guru/images/patterns/content/facade/facade.png?id=1f4be17305b6316fbd548edf1937ac3b)

Facade es un patrón de diseño estructural que proporciona una interfaz simplificada a una biblioteca, un framework o cualquier otro grupo complejo de clase.

### Relaciones con otros patrones

- `Facade` define una nueva interfaz para objetos existentes, mientras que Adapter intenta hacer que la interfaz existente sea utilizable. Normalmente Adapter sólo envuelve un objeto, mientras que `Facade` trabaja con todo un subsistema de objetos.

- Abstract Factory puede servir como alternativa a `Facade` cuando tan solo deseas esconder la forma en que se crean los objetos del subsistema a partir del código cliente.

- Flyweight muestra cómo crear muchos pequeños objetos, mientras que `Facade` muestra cómo crear un único objeto que represente un subsistema completo.

- `Facade` y Mediator tienen trabajos similares: ambos intentan organizar la colaboración entre muchas clases estrechamente acopladas.

- `Facade` define una interfaz simplificada a un subsistema de objetos, pero no introduce ninguna nueva funcionalidad. El propio subsistema no conoce la fachada. Los objetos del subsistema pueden comunicarse directamente.
Mediator centraliza la comunicación entre componentes del sistema. Los componentes conocen únicamente el objeto mediador y no se comunican directamente.
Una clase fachada a menudo puede transformarse en una Singleton, ya que un único objeto fachada es suficiente en la mayoría de los casos.

- `Facade` es similar a Proxy en el sentido de que ambos pueden almacenar temporalmente una entidad compleja e inicializarla por su cuenta. Al contrario que `Facade`, Proxy tiene la misma interfaz que su objeto de servicio, lo que hace que sean intercambiables.

**Clases**

- `DatabaseFacade.php`: Clase que cumple de fachada.
- `DatabaseConnection.php`
- `QueryBuilder.php`
- `Logger.php`

## Ejecución
`php DemoFacade.php`

## Salida
```BASH
[LOG] Consulta ejecutada: SELECT * FROM users WHERE status = 'active'.
Ejecutando: SELECT * FROM users WHERE status = 'active'.
Conexión cerrada.