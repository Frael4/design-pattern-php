# [Strategy](https://refactoring.guru/es/design-patterns/strategy)

Define una familia de algoritmos y los hace intercambiables. (Este es el tercero que ya te proporcioné, aquí está de nuevo por completitud).

> Utiliza el patrón Strategy cuando quieras utiliza distintas variantes de un algoritmo dentro de un objeto y poder cambiar de un algoritmo a otro durante el tiempo de ejecución.

**Interface**

- `Strategy.php`: La interfaz Strategy declara operaciones comunes a todas las versiones compatibles de algún algoritmo

**Clases**

- `Context.php`: El contexto define la interfaz de interés para los clientes
- `ConcreteStrategyA.php`
- `ConcreteStrategyB.php`

## Ejecución
`php DemoStrategy.php`

## Salida
```BASH
Cliente: Estrategia esta configurada a ordenamiento normal.
Context: Ordenando el array usando la ConcreteStrategyA. 
 a,b,c,d,e

Cliente: Estrategia esta configurada a ordenamiento inverso.
Context: Ordenando el array usando la ConcreteStrategyB.
 e,d,c,b,a