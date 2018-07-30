<?php

require_once('Controller.php');


if(isset($_GET['action']))
{
	if (isset($_GET['postId']))
	{
		if ($_GET['action'] == 'onePost')
		{
		onePost($_GET['postId']);
		}
	}
	elseif ($_GET['action'] == 'listPost')
	{
		listPost();
	}
}
else
{
	homeView();
}

