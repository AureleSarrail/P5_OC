<?php

namespace Model\Manager;

require('vendor/autoload.php');
use \Model\Entity\Post;


class PostManager extends Model
{
    public function getPosts()
    {
        $Db = $this->dbConnect();
        $result = $Db->query('select a.PostId,a.Title,a.Head,a.Image,a.Content,a.LastModif,a.CreatDate,a.UserId,b.Username 
                              from post a,user b
                              where a.UserId = b.UserId
                              order by a.postid limit 10');
        $posts = [];
        while ($data = $result->fetch(\PDO::FETCH_ASSOC))
        {
            $post = new Post();
            $post->hydrate($data);
            $Posts[] = $post;
        }
        return $Posts;
    }

    public function onePost($postId)
    {
        $Db = $this->dbConnect();
        $query = $Db->prepare('select a.PostId,a.Title,a.Head,a.Image,a.Content,a.LastModif,a.CreatDate,a.UserId,b.Username 
                              from post a, user b
                              where a.UserId = b.UserId
                              and a.PostId = ?');
        $query->execute(array($postId));
        $data = $query->fetch(\PDO::FETCH_ASSOC);
        $post = new Post();
        $post->hydrate($data);
        return $post;
    }

    public function insertPost($title,$head,$image,$content,$userId,$username)
    {
        $Db = $this->dbConnect();
        $data = compact("title","head","image","content","userId","username");
        $post = new Post();
        $post->hydrate($data);
        $insert = $Db->prepare('insert into post (title,head,image,content,LastModif,creatdate,userid) values (?,?,?,?,CURRENT_DATE,CURRENT_DATE,?)');
        $insert->execute(array($post->getTitle(),$post->getHead(),$post->getImage(),$post->getContent(),$post->getUserId()));
    }
}
