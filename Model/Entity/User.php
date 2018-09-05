<?php
namespace Model\Entity;

use Model\Entity\Entity;

class User extends Entity
{
    private $userId;
    private $name;
    private $firstName;
    private $username;
    private $mail;
    private $rights;
    private $password;

    // GETTERS

    public function getUserId()
    {
        return $this->userId;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function getRights()
    {
        return $this->rights;
    }

    public function getPassword()
    {
        return $this->password;
    }

    // SETTERS

    public function setUserId($userId)
    {
        $this->userId = (int) $userId;
    }

    public function setName($name)
    {
        if (is_string($name)) {
            $this->name = $name;
        }
    }

    public function setFirstName($firstName)
    {
        if (is_string($firstName)) {
            $this->firstName = $firstName;
        }
    }

    public function setUsername($username)
    {
        if (is_string($username)) {
            $this->username = $username;
        }
    }

    public function setMail($mail)
    {
        if (is_string($mail)) {
            $this->mail = $mail;
        }
    }

    public function setRights($rights)
    {
        $this->rights = (int) $rights;
    }

    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
}
