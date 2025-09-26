<?php

// Clase Constructora
class CiudadanoBuilder {

    public Ciudadano $_ciudadano;

    public function __construct($id, $nick)
    {
        $this->_ciudadano = new Ciudadano($id, $nick);
    }

    public function name($name){
        $this->_ciudadano->setName($name);

        return $this;
    }

    public function age($age){
        $this->_ciudadano->setName($age);

        return $this;
    }

    public function sex($sex){
        $this->_ciudadano->setName($sex);

        return $this;
    }

    public function phone($phone){
        $this->_ciudadano->setName($phone);

        return $this;
    }

    public function build(){ // Metodo que construye el Objeto
        return $this->_ciudadano;
    }
}

$builder = new CiudadanoBuilder(1,'Juan');

echo $builder->sex('Masculino')->build();
var_dump($builder);
echo "Hola mundo";
