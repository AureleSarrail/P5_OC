<?php
namespace Model\Manager;

Class SessionManager
{
	function defineSession($username,$rights,$userId)
	{
		$_SESSION['username'] = $username;
		$_SESSION['rights'] = $rights;
		$_SESSION['userId'] = $userId;
	}
}