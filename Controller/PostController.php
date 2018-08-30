<?php
namespace Controller;

use Controller\MainController;

Class PostController extends MainController
{
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

    function insertPost($title,$head,$image,$content,$userId,$username,$rights)
    {
        $postMan = new PostManager();
        $postMan->insertPost($title,$head,$image,$content,$userId,$username);
        // $_GET['action'] = 'listPost';
        header('Location: index.php?action=listPost');
    }

    function creationPostPage()
    {
        require_once('Views/CreationPost.php');
    }
}