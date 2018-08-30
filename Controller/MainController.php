<?php
namespace Controller;

require('vendor/autoload.php');

use Model\Manager\PostManager;
use Model\Manager\CommentManager;
use Model\Manager\UserManager;
use Model\Security\Security;

class MainController
{
    function homeView()
    {
        require('Views/home.php');
    }

    function connectionPage()
    {
        require('Views/Connect.php');
    }  
}

