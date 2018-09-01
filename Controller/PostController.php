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
        require_once('Views/creationPost.php');
    }

    public function modifyPost($postId)
    {
        $postMan = new PostManager();
        $post = $postMan->onePost($postId);
        require('Views/creationPost.php');
    }

    public function updatePost($postId, $title, $head, $image, $content)
    {
        $postMan = new PostManager();
        $postMan->updatePost($postId, $title, $head, $image, $content);
        header('Location: index.php?action=onePost&postId=' . $postId);
    }

    public function deletePost($postId)
    {
        $postMan = new PostManager();
        $postMan->deletePost($postId);
        header('Location: index.php?action=listPost');
    }
}
