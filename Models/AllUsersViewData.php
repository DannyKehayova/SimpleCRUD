<?php
/**
 * Created by PhpStorm.
 * User: Danny
 * Date: 20.3.2017 г.
 * Time: 11:59
 */

namespace Models;


class AllUsersViewData
{
    private $id;

    private $name;

    private $firstName;

    private $secondName;

    private $thirdName;

    private $age;

    private $regOn;

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

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getSecondName()
    {
        return $this->secondName;
    }

    /**
     * @return mixed
     */
    public function getThirdName()
    {
        return $this->thirdName;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }




}