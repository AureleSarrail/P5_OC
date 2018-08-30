<?php

namespace Model\Entity;

use Model\Entity\Entity;

class Post extends Entity
{
    
    // d'abord les attributs

    private $postId;
    private $userId;
    private $title;
    private $head;
    private $image;
    private $content;
    private $lastModif;
    private $creatDate;
    private $creator;

    // ensuite les méthodes
    // je commence par les getters

    public function getPostId()
    {
        return $this->postId;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getHead()
    {
        return $this->head;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getLastModif()
    {
        return $this->lastModif;
    }

    public function getCreatDate()
    {
        return $this->creatDate;
    }

    public function getUsername()
    {
        return $this->username;
    }

    // on fait ensuite les setters

    public function setPostId($postId)
    {
        $this->postId = (int) $postId;
    }

    public function setUserId($userId)
    {
        $this->userId = (int) $userId;
    }

    public function setTitle($title)
    {
        if(is_string($title))
        {
            $this->title = $title;
        }
    }

    public function setHead($head)
    {
        if(is_string($head))
        {
            $this->head = $head;
        }
    }

    public function setImage($image)
    {
        if(is_string($image))
        {
            $this->image = $image;
        }
    }

    public function setContent($content)
    {
        if(is_string($content))
        {
            $this->content = $content;
        }
    }

    public function setLastModif($lastModif)
    {
        $this->lastModif = $lastModif;
    }

    public function setCreatDate($creatDate)
    {
        $this->creatDate = $creatDate;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

}