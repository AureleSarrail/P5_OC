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
		if (isset($_POST['mail']) && (isset($_POST['password'])))
		{
			$control->userCheck($_POST['mail'],$_POST['password']);
		}
	}
	elseif ($_GET['action'] == 'Connect')
	{
		$control->connectionPage();
	}
	elseif ($_GET['action'] == 'deconnect')
	{
		$control->deconnection();
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

