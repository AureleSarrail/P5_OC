<?php
require_once('Post.php');

class model
{
	private function dbConnect()
	{
		$Db = new PDO('mysql:host=localhost;dbname=Blog_asdev;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		return $Db;
	}

	public function getPosts()
	{
		$Db = $this->dbConnect();
		$result = $Db->query('select a.PostId,a.Title,a.Head,a.Image,a.Content,a.LastModif,a.CreatDate,a.UserId,b.Username 
							  from post a,user b
							  where a.UserId = b.UserId
							  order by a.postid limit 10');
		$posts = [];
		while ($data = $result->fetch(PDO::FETCH_ASSOC))
		{
			$post = new post();
			$post->hydrate($data);
			$Posts[] = $post;
		}
		return $Posts;
	}
}