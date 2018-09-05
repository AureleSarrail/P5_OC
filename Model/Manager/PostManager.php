<?php

namespace Model\Manager;

use \Model\Entity\Post;

class PostManager extends Model
{
    public function getPosts()
    {
        $dataBase = $this->dbConnect();
        $result = $dataBase->query('select a.PostId,a.Title,a.Head,a.Image,a.Content,a.LastModif,
                                    a.CreatDate,a.UserId,b.Username 
                                    from post a,user b
                                    where a.UserId = b.UserId
                                    order by a.postid desc limit 10');
        $posts = [];
        while ($data = $result->fetch(\PDO::FETCH_ASSOC)) {
            $post = new Post();
            $post->hydrate($data);
            $Posts[] = $post;
        }
        return $Posts;
    }

    public function onePost($postId)
    {
        $dataBase = $this->dbConnect();
        $query = $dataBase->prepare('select a.PostId,a.Title,a.Head,a.Image,a.Content,
                                    a.LastModif,a.CreatDate,a.UserId,b.Username 
                                    from post a, user b
                                    where a.UserId = b.UserId
                                    and a.PostId = ?');
        $query->execute(array($postId));
        $data = $query->fetch(\PDO::FETCH_ASSOC);
        $post = new Post();
        $post->hydrate($data);
        return $post;
    }

    public function insertPost($title, $head, $image, $content, $userId, $username)
    {
        $dataBase = $this->dbConnect();
        $data = compact("title", "head", "image", "content", "userId", "username");
        $post = new Post();
        $post->hydrate($data);
        $insert = $dataBase->prepare('insert into post (title,head,image,content,LastModif,creatdate,userid) 
                                    values (?,?,?,?,CURRENT_DATE,CURRENT_DATE,?)');
        $insert->execute(array($post->getTitle(),
            $post->getHead(),
            $post->getImage(),
            $post->getContent(),
            $post->getUserId()));
    }

    public function updatePost($postId, $title, $head, $image, $content)
    {
        $dataBase = $this->dbConnect();
        $data = compact("postId", "title", "head", "image", "content");
        $post = new Post();
        // return $data;
        $post->hydrate($data);
        $update = $dataBase->prepare('update post
                                      set title = ?, head = ?, image = ?, content = ?, LastModif = CURRENT_DATE
                                      where postid = ?');
        $update->execute(
            array(
                $post->getTitle(),
                $post->getHead(),
                $post->getImage(),
                $post->getContent(),
                $post->getpostId()
            )
        );
        return $postId;
    }

    public function deletePost($postId)
    {
        $dataBase = $this->dbConnect();
        $delete = $dataBase->prepare('delete from post where postId = ?');
        $delete->execute(array($postId));
    }
}
