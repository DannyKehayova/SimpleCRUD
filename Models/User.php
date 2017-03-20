<?php


namespace Models;


class User
{
    private $id;

    private $name;

    private $firstName;

    private $secondName;

    private $thirdName;

    private $age;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getSecondName()
    {
        return $this->secondName;
    }

    public function getThirdName()
    {
        return $this->thirdName;
    }

    public function getAge()
    {
        return $this->age;
    }

}