<?php

require_once('modele.php');

if(isset($_GET['action']))
{
	echo('action est défini');
}
else
{
	require_once('Home.php');	
}
