<?php
session_start();

// require_once('Controller/Controller.php');
require('vendor/autoload.php');
use Controller\Controller;

$control = new Controller();

if(isset($_GET['action']))
{
	if (isset($_GET['postId']))
	{
		if ($_GET['action'] == 'onePost')
		{
			$control->onePost($_GET['postId']);
		}
	}
	elseif ($_GET['action'] == 'listPost')
	{
		$control->listPost();
	}
	elseif ($_GET['action'] == 'testConnect')
	{
		if (isset($_POST['mail']))
		{
			$test = $control->userExist($_POST['mail']);
			if (int($test) == 1)
			{
				$pass = $control->checkPassword($_POST['mail']);
				if (password_verify($_POST['password'],$pass))
				{
					$control->connect($_POST['mail']);
				}
			}
		}
	}
	elseif ($_GET['action'] == 'Connect')
	{
		$control->connectionPage();
	}
	elseif ($_GET['action'] == 'createPost')
	{
		if ($_SESSION['rights'] == 1)
		{
			$control->creationPostPage();
		}
	}
}
else
{
	$control->homeView();
}

