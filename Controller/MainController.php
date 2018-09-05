<?php
namespace Controller;

use Model\Manager\PostManager;
use Model\Manager\CommentManager;
use Model\Manager\UserManager;
use Model\Security\Security;

class MainController
{
    public function homeView()
    {
        require('Views/home.php');
    }

    public function connectionPage()
    {
        require('Views/connect.php');
    }

    public function contactUs()
    {
    	require_once('Views/contactUs.php');
    }
}
