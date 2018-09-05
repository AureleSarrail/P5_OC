<?php
session_start();

require('vendor/autoload.php');
use Controller\MainController;
use Controller\PostController;
use Controller\UserController;
use Controller\ComController;

$control = new MainController();
$userControl = new UserController();
$postControl = new PostController();
$comControl = new ComController();

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'onePost') {
        if (isset($_GET['postId'])) {
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
                $_POST['password']
            );
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
                    $_SESSION['rights']
                );
            }
        }
    } elseif ($_GET['action'] == 'modifyPost') {
        if (isset($_GET['postId'])) {
            $postControl->modifyPost($_GET['postId']);
        }
    } elseif ($_GET['action'] == 'postUpdated') {
        if (isset($_GET['postId']) &&
        isset($_POST['title']) &&
        isset($_POST['head']) &&
        isset($_POST['image']) &&
        isset($_POST['content'])) {
            $postControl->updatePost(
                $_GET['postId'],
                $_POST['title'],
                $_POST['head'],
                $_POST['image'],
                $_POST['content']
            );
        }
    } elseif ($_GET['action'] == 'deletePost') {
        if (isset($_GET['postId'])) {
            $postControl->deletePost($_GET['postId']);
        }
    } elseif ($_GET['action'] == 'insertCom') {
        if (isset($_POST['content']) &&
        isset($_GET['postId']) &&
        isset($_SESSION['userId'])) {
            echo('ici');
            $comControl->insertCom($_GET['postId'], $_POST['content'], $_SESSION['userId']);
        }
    } elseif ($_GET['action'] == 'adminCom') {
        if (isset($_SESSION['rights'])) {
            if ($_SESSION['rights'] == 1) {
                $comControl->getAwaitingComments();
            }
        }
    } elseif ($_GET['action'] == 'validCom') {
        if (isset($_GET['comId'])) {
            $comControl->validCom($_GET['comId']);
        }
    } elseif ($_GET['action'] == 'deleteCom') {
        if (isset($_SESSION['rights'])) {
            if ($_SESSION['rights'] == 1) {
                $comControl->deleteCom($_GET['comId']);
            }
        }
    } elseif ($_GET['action'] == 'userAdmin') {
        if (isset($_SESSION['rights'])) {
            if ($_SESSION['rights'] == 1) {
                $userControl->getUsers();
            }
        }
    } elseif ($_GET['action'] == 'deleteUser') {
        if (isset($_GET['userId'])) {
            if (isset($_SESSION['rights'])) {
                if ($_SESSION['rights'] == 1) {
                    $userControl->deleteUser($_GET['userId']);
                }
            }
        }
    } elseif ($_GET['action'] == 'userDetails') {
        if (isset($_GET['userId'])) {
            if (isset($_SESSION['rights'])) {
                if ($_SESSION['rights'] == 1) {
                    $userControl->userDetails($_GET['userId']);
                }
            }
        }
    } elseif ($_GET['action'] == 'contactUs') {
        $control->contactUs();
    }
} else {
    $control->homeView();
}
