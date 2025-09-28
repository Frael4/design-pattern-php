# [Template Method](https://refactoring.guru/es/design-patterns/template-method)

Template Method es un patrón de diseño de comportamiento que define el esqueleto de un algoritmo en la superclase pero permite que las subclases sobrescriban pasos del algoritmo sin cambiar su estructura.

> El patrón Template Method sugiere que dividas un algoritmo en una serie de pasos, conviertas estos pasos en métodos y coloques una serie de llamadas a esos métodos dentro de un único método plantilla.

La funcion `runTemplate()` de la clase abstracta `TemplateMethod` es la **clave** para este patrón.

```PHP
 public function runTemplate()
{
    echo $this->operacionUno($this->cliente);
    echo $this->operacionDos($this->cliente);
    echo $this->operacionTres($this->cliente);
}
```

**Clases abstractas**
- `TemplateMethod.php`: Contiene los metodos y el método plantilla
- `Credito.php`: Extiende de `TemplateMethod`

**Clases**
- `Cliente.php`
- `CreditoPersonal.php`: Extiende de `Credito`
- `CreditoHipotecario.php`: Extiende de `Credito`

## Ejecución
`php DemoTemplateMethod.php`

## Salida

```
Mi nombre es: Arturo
Operaciones con el credito personal
Credito Personal: Arturo - Operacion 1
Credito Personal: Arturo - Operacion 2
Credito Personal: Arturo - Operacion 3
Operaciones con el credito hipotecario
Credito Hipotecario: Arturo - Operacion 1
Credito Hipotecario: Arturo - Operacion 2
Credito Hipotecario: Arturo - Operacion 3
```