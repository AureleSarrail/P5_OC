<?php

require_once('Controller.php');

if(isset($_GET['action']))
{
	if ($_GET['action'] = 'listPost')
	{
		listPost();
	}
}
else
{
	homeView();
}
