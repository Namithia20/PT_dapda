<?php

namespace App\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;

class Client
{
    protected $name;
    protected $surname;
    protected $phone;
    protected $email;
    protected $car_type;
    protected $car;
    protected $preference_call;

   /* public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('phone', new Assert\Regex(array(
            'pattern' => '^[679]\d{9}$',
            'htmlPattern' => '^[679]\d{9}$',
            'match' => false,
            'message' => 'Indique un numero valido'
        )));
    }*/

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getCarType()
    {
        return $this->car_type;
    }

    public function getCar()
    {
        return $this->car;
    }

    public function getPreferenceCall()
    {
        return $this->preference_call;
    }


    public function setName($_name)
    {
        $this->name = $_name;
    }

    public function setSurname($_surname)
    {
        $this->surname = $_surname;
    }

    public function setPhone($_phone)
    {
        $this->phone = $_phone;
    }

    public function setEmail($_email)
    {
        $this->email = $_email;
    }

    public function setCarType($_car_type)
    {
        $this->car_type = $_car_type;
    }

    public function setCar($_car)
    {
        $this->car = $_car;
    }

    public function setPreferenceCall($_preference_call)
    {
        $this->preference_call = $_preference_call;
    }
}