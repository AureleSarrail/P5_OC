<?php
require_once('Post.php');
require_once('Comment.php');

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

	public function onePost($postId)
	{
		$Db = $this->dbConnect();
		$result = $Db->query('select a.PostId,a.Title,a.Head,a.Image,a.Content,a.LastModif,a.CreatDate,a.UserId,b.Username 
							  from post a, user b
							  where a.UserId = b.UserId
							  and a.PostId = ' . $postId);
		$data = $result->fetch(PDO::FETCH_ASSOC);
		$post = new post();
		$post->hydrate($data);
		return $post;
	}

	public function getComments($postId)
	{
		$Db = $this->dbConnect();
		$query = $Db->query('select a.IdCom,a.Content,a.CreationDate,a.Status,b.Username,a.PostId
							from comment a,user b
							where a.UserId = b.UserId
							and a.PostId = ' . $postId);
		$comments = [];
		while ($data = $query->fetch(PDO::FETCH_ASSOC))
		{
			$comment = new comment();
			$comment->hydrate($data);
			$comments[] = $comment;
		}
		return $comments;
	}
}