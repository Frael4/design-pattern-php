# [Composite](https://refactoring.guru/es/design-patterns/composite)

Composite es un patrón de diseño estructural que te permite componer objetos en estructuras de árbol y trabajar con esas estructuras como si fueran objetos individuales.

> El patrón Composite te proporciona dos tipos de elementos básicos que comparten una interfaz común: hojas simples y contenedores complejos. Un contenedor puede estar compuesto por hojas y por otros contenedores. Esto te permite construir una estructura de objetos recursivos anidados parecida a un árbol.

> *Otro ejemplo [Patron Composite PHP Ejemplo](https://refactoring.guru/es/design-patterns/composite/php/example)*

**Interface**

- `FormElement.php`: Interface Composite

**Clases**

- `InputField`: Implementa `FormElement`
- `Fieldset`: Implementa `FormElement`

## Ejecución
`php DemoComposite.php`

## Salida
```HTML
<fieldset>
    <legend>Formulario Contacto</legend>
        <input type='text' name='name'>
        <fieldset>
            <legend>Dirección</legend>
                <input type='text' name='street'>
                <input type='text' name='city'>
        </fieldset>
        <input type='text' name='email'>
</fieldset>