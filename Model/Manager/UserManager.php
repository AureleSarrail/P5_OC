<?php
namespace Model\Manager;

use Model\Entity\User;

class UserManager extends Model
{
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