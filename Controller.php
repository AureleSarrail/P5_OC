
<?php

require_once('Modele.php');

function homeView()
{
	require('home.php');
}

function listPost()
{
	$mod = new model();
	$posts = $mod->getPosts();
	require('postsView.php');
}