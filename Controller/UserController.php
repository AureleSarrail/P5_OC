<?php
namespace Controller;

use Controller\MainController;

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
            require_once('Views/createAccountView.php?erreur=1');
        }
        else
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
        $_SESSION['username'] = $user->getUsername();
        $_SESSION['rights'] = $user->getRights();
        $_SESSION['userId'] = $user->getUserId();
        require_once('Views/Home.php');
    }

    function deconnection()
    {
        $_SESSION = array();
        session_destroy();
        $this->homeView();
    }
}