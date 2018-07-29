<?php

require_once('Controller.php');

if(isset($_GET['action']))
{
	if ($_GET['action'] = 'listPost')
	{
		listPost();
	}
	else
		if (isset($_GET['postID']) AND ($_GET['action'] = 'onePost'))
		{
			onePostView($_GET['postId']);
		}
}
else
{
	homeView();
}
