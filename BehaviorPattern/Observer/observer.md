# [Observer]()

Define un mecanismo de suscripción para notificar a varios objetos sobre cualquier evento. (Este es otro que ya te proporcioné, aquí está de nuevo por completitud).

> Utiliza el patrón Observer cuando los cambios en el estado de un objeto puedan necesitar cambiar otros objetos y el grupo de objetos sea desconocido de antemano o cambie dinámicamente.

> Utiliza el patrón cuando algunos objetos de tu aplicación deban observar a otros, pero sólo durante un tiempo limitado o en casos específicos.



> 📌 *Nota: `private $state` me estaba dando problemas, pero el error no se imprimia, averiguar porque*

**Clases**
- `Sujeto.php`: Implementa \SplSubject
- `ConcreteObserverA.php`: Implementa \SplObserver
- `ConcreteObserverB.php`: Implementa \SplObserver

## Ejecución
`php DemoObserver.php`

## Salida
```BASH

Sujeto: Adjunta un Observer A
Sujeto: Adjunta un Observer B

Sujeto: Estoy haciendo algo importante. 
Sujeto: Mi estado ha sido cambiado a 8.

Sujeto: Notificando a Observers...
Notificando a: ConcreteObserverA (Observer A)
Notificando a: ConcreteObserverB (Observer B)
ConcreteObserverB: Reaccionó al evento.

Sujeto: Estoy haciendo algo importante.
Sujeto: Mi estado ha sido cambiado a 7.

Sujeto: Notificando a Observers...
Notificando a: ConcreteObserverA (Observer A)
Notificando a: ConcreteObserverB (Observer B)
ConcreteObserverB: Reaccionó al evento.

Sujeto: Estoy haciendo algo importante.
Sujeto: Mi estado ha sido cambiado a 9.

Sujeto: Notificando a Observers...
Notificando a: ConcreteObserverA (Observer A)
Notificando a: ConcreteObserverB (Observer B)
ConcreteObserverB: Reaccionó al evento.