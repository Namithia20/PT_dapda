<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClientRepository")
 */

class Client
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $surname;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $car_type;

    /**
     * @ORM\Column(type="integer")
     */
    private $car;

    /**
     * @ORM\Column(type="integer")
     */
    private $preference_call;


    /**
     * getter methods
     */
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


    /**
     * setter methods
     */
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