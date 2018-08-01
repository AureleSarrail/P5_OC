
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

	function UserExist($mail)
	{
		$userMod = new UserManager();
		$exist = $userMod->testExist($mail);
		return $exist;
	}

	function checkPassword($mail)
	{
		$userMod = new UserManager();
		$pass = $userMod->checkPassword($mail);
		return $pass;
	}

	function connect($mail)
	{
		$userMod = new UserManager();
		$user = $userMod->getUser($mail);
		$_SESSION['username'] = $user->getUsername();
		$_SESSION['rights'] = $user->getRights();
		require_once('Views/Home.php');
	}
}