<?php
namespace Controller;

require('vendor/autoload.php');

use Model\Manager\PostManager;
use Model\Manager\CommentManager;
use Model\Manager\UserManager;
use Model\Security\UserCheck;

class Controller
{
    function homeView()
    {
        require('Views/home.php');
    }

    function listPost()
    {
        $postMod = new PostManager();

        $posts = $postMod->getPosts();

        require('Views/postsView.php');
    }

    function onePost($postId)
    {
        $postMod = new PostManager();
        $comMod = new CommentManager();

        $post = $postMod->onePost($postId);
        $comments = $comMod->getComments($postId);

        require('Views/onePostView.php');
    }

    function connectionPage()
    {
        require('Views/Connect.php');
    }

    function UserCheck($mail,$password)
    {
        $userSecurity = new UserCheck();
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

    function creationPostPage()
    {
        require_once('Views/CreationPost.php');
    }
}