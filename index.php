<?php

require_once('Controller/Controller.php');

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

