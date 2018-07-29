<?php

require_once('modele.php');
require_once('Control.php');

if(isset($_GET['action']))
{
	echo('action est défini');
}
else
{
	homeView();
}
