<?php
namespace Controller;

use Controller\MainController;
use Model\Manager\SessionManager;
use Model\Security\Security;
use Model\Manager\UserManager;

class UserController extends MainController
{
    public function createAccountView()
    {
        require_once('Views/createAccountView.php');
    }

    public function createUser($firstname, $name, $username, $mail, $password)
    {
        $userSecurity = new Security();
        $testExist = $userSecurity->testExist($mail);
        if ($testExist == 1) {
            header('Location: Views/createAccountView.php?erreur=1');
        }
        
        if ($testExist == 0) {
            $userMan = new UserManager();
            $userMan->createUser($firstname, $name, $username, $mail, $password);
            $this->connect($mail);
        }
    }

    public function connectionCheck($mail, $password)
    {
        $userSecurity = new Security();
        $testExist = $userSecurity->testExist($mail);
        if ($testExist == 1) {
            $dbPass = $userSecurity->checkPassword($mail);
            if (password_verify($password, $dbPass)) {
                $this->connect($mail);
            }
        }
    }

    public function connect($mail)
    {
        $userMod = new UserManager();
        $user = $userMod->getUser($mail);
        $session = new SessionManager();
        $session->defineSession($user->getUsername(), $user->getRights(), $user->getUserId());
        require_once('Views/home.php');
    }

    public function deconnection()
    {
        $_SESSION = array();
        session_destroy();
        $this->homeView();
    }

    public function getUsers()
    {
        $userMod = new UserManager();
        $users = $userMod->getUsers();
        require_once('Views/adminUsers.php');
    }

    public function deleteUser($userId)
    {
        $userMod = new UserManager();
        $userMod->deleteUser($userId);
        header('Location: index.php?action=userAdmin');
    }

    public function userDetails($userId)
    {
        $userMod = new UserManager();
        $user = $userMod->userDetails($userId);
        require_once('Views/userDetails.php');
    }

    public function mail($name, $firstname, $mailContent, $mail)
    {
        $userMod = new UserManager();
        $mail = $userMod->mail($name, $firstname, $mailContent, $mail);
        require_once('Views/home.php');
    }

    public function isAdmin()
    {
        $userSecurity = new Security();
        if ($userSecurity->isAdmin()) {
            return true;
        }
    }
}
