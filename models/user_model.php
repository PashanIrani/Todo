<?php

class User
{
    private $firstName;
    private $lastName;
    private $email;
    private $password;

    public function getFristName($name)
    {
        this.$firstName = $name;
    }

    public function getLastName($name)
    {
        this.$lastName = $name;
    }

    public function setFristName()
    {
        return $firstName;
    }

    public function setLastName()
    {
        return $lastName;
    }

    public function getEmail($email)
    {
        this.$email = $name;
    }

    public function getPassword($pwd)
    {
        this.$password = $pwd;
    }

    public function setEmail()
    {
        return $email;
    }

    public function setPassword()
    {
        return $password;
    }
}
