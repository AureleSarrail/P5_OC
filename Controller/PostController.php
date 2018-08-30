<?php
namespace Controller;

use Controller\MainController;
use Model\Manager\PostManager;
use Model\Manager\CommentManager;

class PostController extends MainController
{
    public function listPost()
    {
        $postMod = new PostManager();

        $posts = $postMod->getPosts();

        require('Views/postsView.php');
    }

    public function onePost($postId)
    {
        $postMod = new PostManager();
        $comMod = new CommentManager();

        $post = $postMod->onePost($postId);
        $comments = $comMod->getComments($postId);

        require('Views/onePostView.php');
    }

    public function insertPost($title, $head, $image, $content, $userId, $username, $rights)
    {
        $postMan = new PostManager();
        $postMan->insertPost($title, $head, $image, $content, $userId, $username);
        // $_GET['action'] = 'listPost';
        header('Location: index.php?action=listPost');
    }

    public function creationPostPage()
    {
        require_once('Views/CreationPost.php');
    }

    public function modifyPost($postId)
    {
        $postMan = new PostManager();
        $postMan->onePost($postId);

        $this->creationPostPage();
    }
}
