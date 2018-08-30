<?php
namespace Model\Manager;

use Model\Entity\Comment;

class CommentManager extends Model
{
	public function getComments($postId)
	{
		$Db = $this->dbConnect();
		$query = $Db->prepare('select a.IdCom,a.Content,a.CreationDate,a.Status,b.Username,a.PostId
							from comment a,user b
							where a.UserId = b.UserId
							and a.PostId = ?');
		$query->execute(array($postId));
		$comments = [];
		while ($data = $query->fetch(\PDO::FETCH_ASSOC))
		{
			$comment = new Comment();
			$comment->hydrate($data);
			$comments[] = $comment;
		}
		return $comments;
	}
}