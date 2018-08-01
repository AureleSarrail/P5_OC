<?php

require_once('Controller/Controller.php');
session_start();

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
			if ($test = 1)
			{
				$pass = $control->checkPassword($_POST['mail']);
				if (password_verify($_POST['password'],$pass))
				{
					$control->connect($_POST['mail']);
				}
				else
				{
					echo(password_hash($_POST['password'],PASSWORD_DEFAULT));
					echo(password_verify($pass,PASSWORD_DEFAULT));
				}
			}
		}
	}
	elseif ($_GET['action'] = 'Connect')
	{
		$control->connectionPage();
	}
}
else
{
	$control->homeView();
}

