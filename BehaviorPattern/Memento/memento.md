# [Memento](https://refactoring.guru/es/design-patterns/memento) (Recuerdo) 💾

Memento es un patrón de diseño de comportamiento que te permite guardar y restaurar el estado previo de un objeto sin revelar los detalles de su implementación.

> *(..)El patrón sugiere almacenar la copia del estado del objeto en un objeto especial llamado memento. Los contenidos del memento no son accesibles para ningún otro objeto excepto el que lo produjo. Otros objetos deben comunicarse con mementos utilizando una interfaz limitada que pueda permitir extraer los metadatos de la instantánea (tiempo de creación, el nombre de la operación realizada, etc.), pero no el estado del objeto original contenido en la instantánea.*

**Interface**

- `Memento.php`: Plantilla con metodos de acceso a metadatos.

**Clases**

- `ConcreteMemento.php`: Implementa `Memento` interface, encargado de manejar la infraestructura de un Memento
- `Originador.php`: Clase que tiene los **estados**
- `Cuidador.php`: Clase cliente que realizara las acciones sobre un `Originador`


## Ejecución
`php DemoMemento.php`

## Salida
```BASH

Originador: Mi estado actual es: Super-duper-mega-puper-hiper-guper. 

 Cuidador: Guardando el estado del Originador.
Originador: Haciendo algo importante.
Originador: Mi estado ha cambiado a: pmeYUMQfWPBIRDirwsvyHLounxjGlF. 

 Cuidador: Guardando el estado del Originador.
Originador: Haciendo algo importante.
Originador: Mi estado ha cambiado a: BUgPmvYEeNliRxGTyLdSCpZWoIMDtz. 

 Cuidador: Guardando el estado del Originador.
Originador: Haciendo algo importante.
Originador: Mi estado ha cambiado a: gurnKNBYRvlLQjwmIyVFksTcJDUSMf.

 Cliente: Mostramos historial.
Cuidador: Aqui esta la lista de los mementos:
2025-10-04 04:56:44 / ( Super-dup .. )
2025-10-04 04:56:44 / ( pmeYUMQfW .. )
2025-10-04 04:56:44 / ( BUgPmvYEe .. )
Cliente: Ahora hacemos un rollback:
Cuidador: Restaurando estado a BUgPmvYEeNliRxGTyLdSCpZWoIMDtz
Originador: Mi estado ha sido restaurado a BUgPmvYEeNliRxGTyLdSCpZWoIMDtz.

 Cliente: Mostramos historial otra vez.
Cuidador: Aqui esta la lista de los mementos:
2025-10-04 04:56:44 / ( Super-dup .. )
2025-10-04 04:56:44 / ( pmeYUMQfW .. )