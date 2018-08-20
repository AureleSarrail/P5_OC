<?php
namespace Model\Manager;

use Model\Entity\User;

class UserManager extends Model
{
	public function testExist($mail)
	{
		$Db = $this->dbConnect();
		$query = $Db->prepare('select count(*) as nb
							   from user
							   where mail = ?');
		$query->execute(array($mail));
		return $query;
	}


	public function checkPassword($mail)
	{
		$Db = $this->dbConnect();
		$query = $Db->prepare('select password
							   from user
							   where mail = ?');
		$query->execute(array($mail));
		$data = $query->fetch(\PDO::FETCH_ASSOC);
		foreach ($data as $key => $value) 
		{
			$pass = $value;
		}
		return $pass;
	}

	public function getUser($mail)
	{
		$Db = $this->dbConnect();
		$query = $Db->prepare('select userid,name,firstname,username,mail,rights
							   from user
							   where mail = ?');
		$query->execute(array($mail));
		$data = $query->fetch(\PDO::FETCH_ASSOC);
		$user = new User();
		$user->hydrate($data);
		return $user;
	}
}