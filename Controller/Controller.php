
<?php

require_once('Model/Model.php');

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
}