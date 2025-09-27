<?php

ini_set('display_errors', 1);

require_once("Ciudadano.php");

// Clase Constructora
class CiudadanoBuilder
{

    public Ciudadano $_ciudadano;

    public function __construct($id, $nick)
    {
        $this->_ciudadano = new Ciudadano($id, $nick);
    }

    public function name($name)
    {
        $this->_ciudadano->setName($name);

        return $this;
    }

    public function age($age)
    {
        $this->_ciudadano->setAge($age);

        return $this;
    }

    public function sex($sex)
    {
        $this->_ciudadano->setSex($sex);

        return $this;
    }

    public function phone($phone)
    {
        $this->_ciudadano->setPhone($phone);

        return $this;
    }

    public function build()
    { // Metodo que construye el Objeto
        return $this->_ciudadano;
    }
}

$builder = new CiudadanoBuilder(1, 'Juan');

$builder->sex('Masculino')->build();
// Objeto builder
var_dump($builder);

echo "Instancia de ciudadano \n";
$ciudadano = $builder->sex('Masculino')->age(25)->name("Arturo")->phone("0939262241")->build();
var_dump($ciudadano);

echo($ciudadano->comer());
echo "\n";
echo($ciudadano->dormir());

