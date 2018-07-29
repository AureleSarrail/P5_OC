
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

function onePost($postId)
{
	$mod = new model();
	$post = $mod->onePost($postId);
	require('onePostView.php');
}