# [Visitor](https://refactoring.guru/es/design-patterns/visitor)

Visitor es un patrón de diseño de comportamiento que te permite separar algoritmos de los objetos sobre los que operan

**Interface**

- `Visitor.php`: La interfaz de Visitor declara un conjunto de métodos de visita que corresponden a las clases de componentes.
- `Component.php`: La interfaz Component declara un método `accept()` que debe tomar la interfaz base del visitante como argumento

**Clases**

- `ConcreteVisitor1.php`: Implementa `Visitor`
- `ConcreteVisitor2.php`: Implementa `Visitor`
- `ConcreteComponentA.php`: Implementa `Component`
- `ConcreteComponentB.php`: Implementa `Component`

## Ejecución
`php DemoVisitor.php`

## Salida
```BASH
El código cliente funciona con todos los Visitors via base interface Visitor. 
A + ConcreteVisitor1. 
B + ConcreteVisitor1. 

Esto permite al mismo código cliente funcionar con diferentes tipos de Visitor.
A + ConcreteVisitor2.
B + ConcreteVisitor2.