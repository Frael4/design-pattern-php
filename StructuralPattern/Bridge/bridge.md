# [Bridge](https://refactoring.guru/es/design-patterns/bridge) (Puente) 🌉

Bridge es un patrón de diseño estructural que te permite dividir una clase grande, o un grupo de clases estrechamente relacionadas, en dos jerarquías separadas (abstracción e implementación) que pueden desarrollarse independientemente la una de la otra.

> Utiliza el patrón Bridge cuando quieras dividir y organizar una clase monolítica que tenga muchas variantes de una sola funcionalidad (por ejemplo, si la clase puede trabajar con diversos servidores de bases de datos).

>  Utiliza el patrón cuando necesites extender una clase en varias dimensiones ortogonales (independientes).

*📌 Bridge suele diseñarse por anticipado, lo que te permite desarrollar partes de una aplicación de forma independiente entre sí. Por otro lado, Adapter se utiliza habitualmente con una aplicación existente para hacer que unas clases que de otro modo serían incompatibles, trabajen juntas sin problemas.*

**Interface**

- `Device.php`

**Abstract Classes**

- `Remote.php`: Recibe como párametro `Device`

**Clases**

- `ConcreteRemote.php`: Extiende de `Remote`
- `TV.php`: Implementa `Device`

## Ejecución
`php DemoBridge.php`

## Salida
```BASH
TV: Encendida. 
TV: Cambiado al canal 7.
Control: Silenciado el dispositivo.
TV: Apagada.
