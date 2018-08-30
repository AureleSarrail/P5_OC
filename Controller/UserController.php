<?php
namespace Controller;

use Controller\MainController;
use Model\SessionManager;

Class UserController extends MainController
{
    function createAccountView()
    {
        require_once('Views/createAccountView.php');
    }

    function createUser($firstname,$name,$username,$mail,$password)
    {
        $userSecurity = new Security();
        $testExist = $userSecurity->testExist($mail);
        if ($testExist == 1)
        {
            header('Location: Views/createAccountView.php?erreur=1');
        }
        
        if ($testExist == 0)
        {
            $userMan = new UserManager();
            $userMan->createUser($firstname,$name,$username,$mail,$password);
            $this->connect($mail);
        }
    }

    function connectionCheck($mail,$password)
    {
        $userSecurity = new Security();
        $testExist = $userSecurity->testExist($mail);
        if ($testExist == 1)
        {
            $dbPass = $userSecurity->checkPassword($mail);
            if (password_verify($password,$dbPass))
            {
                $this->connect($mail);
            }
        }

    }

    function connect($mail)
    {
        $userMod = new UserManager();
        $user = $userMod->getUser($mail);
        $session = new SessionManager();
        $session->defineSession($user->getUsername(),$user->getRights(),$user->getUserId());
        require_once('Views/Home.php');
    }

    function deconnection()
    {
        $_SESSION = array();
        session_destroy();
        $this->homeView();
    }
}