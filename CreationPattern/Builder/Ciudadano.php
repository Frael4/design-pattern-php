<?php

require_once("Persona.php");
/**
 * Ciudadano implementa interfaz Persona
 */
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

    /* Getters & Setters */
    public function setName($name)
    {
        $this->nombre = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
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

    /* Override de metodos heredados */

    public function comer()
    {
        return 'comiendo ....';
    }

    public function dormir()
    {
        return 'durmiendo ....';
    }
}
