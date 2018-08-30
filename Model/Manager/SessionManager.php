<?php
namespace Model\Manager;

class SessionManager
{
    public function defineSession($username,$rights,$userId)
    {
        $_SESSION['username'] = $username;
        $_SESSION['rights'] = $rights;
        $_SESSION['userId'] = $userId;
    }
}
