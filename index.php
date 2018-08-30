<?php
session_start();

require('vendor/autoload.php');
use Controller\MainController;
use Controller\PostController;
use Controller\UserController;

$control = new MainController();
$userControl = new UserController();
$postControl = new PostController();

if (isset($_GET['action'])) {
    if (isset($_GET['postId'])) {
        if ($_GET['action'] == 'onePost') {
            $postControl->onePost($_GET['postId']);
        }
    } elseif ($_GET['action'] == 'listPost') {
        $postControl->listPost();
    } elseif ($_GET['action'] == 'testConnect') {
        if (isset($_POST['mail']) && (isset($_POST['password']))) {
            $userControl->connectionCheck($_POST['mail'], $_POST['password']);
        }
    } elseif ($_GET['action'] == 'Connect') {
        $control->connectionPage();
    } elseif ($_GET['action'] == 'deconnect') {
        $userControl->deconnection();
    } elseif ($_GET['action'] == 'createPost') {
        if ($_SESSION['rights'] == 1) {
            $postControl->creationPostPage();
        }
    } elseif ($_GET['action'] == 'createAccount') {
        $userControl->createAccountView();
    } elseif ($_GET['action'] == 'createUser') {
        if (isset($_POST['firstName']) &&
            isset($_POST['name']) &&
            isset($_POST['username']) &&
            isset($_POST['mail']) &&
            isset($_POST['password'])) {
            $userControl->createUser(
                $_POST['firstName'],
                $_POST['name'],
                $_POST['username'],
                $_POST['mail'],
            $_POST['password']);
        }
    } elseif ($_GET['action'] == 'postCreated') {
        if (isset($_POST['title']) &&
            isset($_POST['head']) &&
            isset($_POST['image']) &&
            isset($_POST['content'])) {
            if (isset($_SESSION['userId']) &&
            isset($_SESSION['username']) &&
            isset($_SESSION['rights'])) {
                $postControl->insertPost(
                    $_POST['title'],
                    $_POST['head'],
                    $_POST['image'],
                    $_POST['content'],
                    $_SESSION['userId'],
                    $_SESSION['username'],
                $_SESSION['rights']);
            }
        }
    } elseif ($_GET['action'] == 'modifyPost') {
        echo('là');
        if (isset($_GET['postId'])) {
            echo ('on est là');
            $postControl->modifyPost($_GET['postId']);
        }
    }
} else {
    $control->homeView();
}
