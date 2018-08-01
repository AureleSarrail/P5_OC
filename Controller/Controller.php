
<?php

require_once('Model/Model.php');

function homeView()
{
	require('Views/home.php');
}

function listPost()
{
	$mod = new Model();
	$posts = $mod->getPosts();
	require('Views/postsView.php');
}

function onePost($postId)
{
	$mod = new Model();
	$post = $mod->onePost($postId);
	$comments = $mod->getComments($postId);
	require('Views/onePostView.php');
}