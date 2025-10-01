# [Chain of Responsability](https://refactoring.guru/es/design-patterns/chain-of-responsibility)

 Permite pasar solicitudes a lo largo de una cadena de manejadores. Cada manejador decide si procesa la solicitud o si la pasa al siguiente.

 > El patrón sugiere que vincules esos manejadores en una cadena. Cada manejador vinculado tiene un campo para almacenar una referencia al siguiente manejador de la cadena. Además de procesar una solicitud, los manejadores la pasan a lo largo de la cadena. La solicitud viaja por la cadena hasta que todos los manejadores han tenido la oportunidad de procesarla.

El método `setSiguiente()` es el encargado de enlazar los manejadores

```PHP
public function setSiguiente(ManejadorSolicitud $siguiente): ManejadorSolicitud
{
    $this->manejadorSolicitud = $siguiente;

    return $this->manejadorSolicitud;
}
```

El uso de las cadenas se da el lado del cliente

 ```PHP
$monkey = new MonkeyManejador();
$squirrel = new SquirreManejador();
$dog = new DogManejador();

// Enlazamiento de los manejadores
$monkey->setSiguiente($squirrel)->setSiguiente($dog);

clientCode($monkey);
echo "\n";
// Enlazamiento de los manejadores
$squirrel->setSiguiente($monkey)->setSiguiente($dog);
clientCode($squirrel);
 ```

 **Clase abstracta**
 - `ManejadorSolicitud.php`: Base para los metodos de enlazado y manejador/doSomething

 **Clases implementadoras**
 - `MonkeyManejador.php`
 - `SquirreManejador.php`
 - `DogManejador.php`

 ## Ejecución

`php DemoChainOfResp.php`

## Salida

```
Client: Who wants a Nut?
  Squirrel: Yo comeré la Nut
Client: Who wants a Banana?
  Squirrel: Yo comeré la Nut
Client: Who wants a Banana?
  Monkey: Yo comeré la Banana
Client: Who wants a Cup of coffee?
  Cup of coffee was left untouched.
Client: Who wants a MeatBall?
  Dog: Yo comeré la MeatBall

Client: Who wants a Nut?
  Squirrel: Yo comeré la Nut
Client: Who wants a Banana?
  Monkey: Yo comeré la Banana
Client: Who wants a Cup of coffee?
  Cup of coffee was left untouched.
Client: Who wants a MeatBall?
  Dog: Yo comeré la MeatBall
```