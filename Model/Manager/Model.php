<?php

namespace Model\Manager;

class Model
{
	protected function dbConnect()
	{
		$Db = new \PDO('mysql:host=localhost;dbname=Blog_asdev;charset=utf8','root','',array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
		return $Db;
	}
}
