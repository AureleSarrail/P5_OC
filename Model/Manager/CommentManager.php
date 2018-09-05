<?php
namespace Model\Manager;

use Model\Entity\Comment;

class CommentManager extends Model
{
    public function getValidComments($postId)
    {
        $dataBase = $this->dbConnect();
        $query = $dataBase->prepare('select a.IdCom,a.Content,a.CreationDate,a.Status,b.Username,a.PostId
                            from comment a,user b
                            where a.UserId = b.UserId
                            and a.PostId = ?
                            and status = 1');
        $query->execute(array($postId));
        $comments = [];
        while ($data = $query->fetch(\PDO::FETCH_ASSOC)) {
            $comment = new Comment();
            $comment->hydrate($data);
            $comments[] = $comment;
        }
        return $comments;
    }

    public function insertCom($postId, $content, $userId)
    {
        $dataBase = $this->dbConnect();
        $insert = $dataBase->prepare('insert into comment (content,CreationDate,status,userId,postId)
                                     values
                                     (?,CURRENT_DATE,2,?,?)');
        $com = new Comment();
        $data = compact("postId", "content", "userId");
        $com->hydrate($data);
        $insert->execute(array($com->getContent(), $com->getUserId(), $com->getPostId()));
        return $postId;
    }

    public function getAwaitingComments()
    {
        $dataBase = $this->dbConnect();
        $query = $dataBase->prepare('select a.IdCom,a.Content,a.CreationDate,a.Status,b.Username,a.PostId
                            from comment a,user b
                            where a.UserId = b.UserId
                            and status = 2');
        $query->execute();
        $comments = [];
        while ($data = $query->fetch(\PDO::FETCH_ASSOC)) {
            $comment = new Comment();
            $comment->hydrate($data);
            $comments[] = $comment;
        }
        return $comments;
    }

    public function validCom($comId)
    {
        $dataBase = $this->dbConnect();
        $update = $dataBase->prepare('update comment
                                      set status = 1
                                      where idcom = ?');
        $update->execute(array($comId));
    }

    public function deleteCom($comId)
    {
        $dataBase = $this->dbConnect();
        $update = $dataBase->prepare('delete from comment
                                      where idcom = ?');
        $update->execute(array($comId));
    }
}
