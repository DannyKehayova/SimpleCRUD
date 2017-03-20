<?php


namespace Services;


use Data\IndexViewData;
use Models\AllUsersViewData;

interface UserServiceInterface
{
    public function register($username, $password,$firstName,$secondName,$thirdName,$age): bool;

    public function exists($username): bool;

    public function login($username, $password);

    /**
     * @return AllUsersViewData[]|\Generator
     */
    public function findAll();

    public function editUser($id,$name,$firstName,$secondName,$thirdName,$age);

    public function deleteUser($id);
    /**
     * @return \Models\IndexViewData
     */
    public function getIndexViewData();
}