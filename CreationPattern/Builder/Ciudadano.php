<?php

class Ciudadano extends Persona
{

    private $id;

    private $nombre;

    private $age;

    private $sex;

    private $phone;

    public function __construct($id, $nombre)
    {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public function setName($name)
    {
        $this->nombre = $name;
    }

    public function setAge($name)
    {
        $this->age = $name;
    }

    public function setSex($name)
    {
        $this->sex = $name;
    }

    public function setPhone($name)
    {
        $this->phone = $name;
    }

    public function getName()
    {
        return $this->nombre;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSex()
    {
        return $this->sex;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getId()
    {
        return $this->id;
    }

    public function comer()
    {
        return 'comiendo ....';
    }

    public function dormir()
    {
        return 'durmiendo ....';
    }
}
