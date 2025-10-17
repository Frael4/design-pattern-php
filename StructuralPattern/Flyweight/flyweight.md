# [Flyweight](https://refactoring.guru/es/design-patterns/flyweight) (Peso Ligero) 🦋

![alt](https://refactoring.guru/images/patterns/cards/flyweight-mini.png?id=422ca8d2f90614dce810a8812c626698)

El patrón Flyweight se usa para minimizar el uso de memoria al compartir datos entre un gran número de objetos similares. El estado compartido se llama intrínseco (Flyweight), mientras que el estado único se llama extrínseco.

> Puedes implementar nodos de hoja compartidos del árbol Composite como Flyweights para ahorrar memoria RAM.

> Flyweight muestra cómo crear muchos pequeños objetos, mientras que Facade muestra cómo crear un único objeto que represente un subsistema completo.

**Clases**

- `TreeType`: Mantiene el estado *intrínseco*, que es compartido
- `TreeFactory`: Gestiona y reutiliza las instancias
- `Tree`: Mantiene el estado *extrínseco*

## Ejecución
`php DemoFlyweight.php`

## Salida
```BASH
Creando nuevo tipo de árbol (Flyweight): Roble, Verde oscuro .
Creando nuevo tipo de árbol (Flyweight): Pino, Verde brillante .      
Dibujando árbol con textura Roble y color Verde oscuro en (10, 50) .  
Dibujando árbol con textura Pino y color Verde brillante en (11, 51) .
Dibujando árbol con textura Roble y color Verde oscuro en (12, 52) .  