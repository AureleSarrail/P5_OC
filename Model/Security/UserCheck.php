<?php
namespace Model\Security;

use Model\Manager\Model;

class UserCheck extends Model
{
	public function testExist($mail)
	{
		$Db = $this->dbConnect();
		$query = $Db->prepare('select count(*) as nb
							   from user
							   where mail = ?');
		$query->execute(array($mail));
		$result = $query->fetch();
		$count = $result[0];
		return $count;
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
}