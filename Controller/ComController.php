<?php
namespace Controller;

use Model\Manager\CommentManager;

class ComController extends MainController
{
    public function insertCom($postId, $content, $userId)
    {
        $comManager = new CommentManager();
        $comManager->insertCom($postId, $content, $userId);
        // $alert = 'Le commentaire est bien enregistré, il est en attente de validation.';
        header('Location: index.php?action=onePost&postId=' . $postId);
    }

    public function getAwaitingComments()
    {
        $comManager = new CommentManager();
        $comments = $comManager->getAwaitingComments();
        require('Views/adminCom.php');
    }

    public function validCom($comId)
    {
        $comManager = new CommentManager();
        $comments = $comManager->validCom($comId);
        header('Location: index.php?action=adminCom');
    }

    public function deleteCom($comId)
    {
        $comManager = new CommentManager();
        $comments = $comManager->deleteCom($comId);
        header('Location: index.php?action=adminCom');
    }
}
