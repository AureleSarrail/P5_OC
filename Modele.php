<?php

class model
{
	private function DbConnect()
	{
		$Db = new PDO('mysql:host=localhost;dbname=Blog_asdev;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		return $Db;
	}

	public function getPosts()
	{
		$Db = $this->DbConnect();
		$result = $Db->query('select * from post order by postid limit 10');
		$Posts = [];
		while ($data = $result->fetch())
		{
			$post = new post();
			$post->hydrate($data);
			$Posts[] = $post;
		}
		return $Posts;
	}
}