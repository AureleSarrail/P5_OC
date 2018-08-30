<?php
namespace Model\Entity;
use Model\Entity\Entity;

class Comment extends Entity
{
    private $idCom;
    private $content;
    private $creationDate;
    private $status;
    private $username;
    private $postId;

    // GETTERS

    public function getIdCom()
    {
        return $this->idCom;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getCreationDate()
    {
        return $this->creationDate;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPostId()
    {
        return $this->postId;
    }

    // SETTERS

    public function setIdCom($idCom)
    {
        $this->idCom = (int) $idCom;
    }

    public function setContent($content)
    {
        if(is_string($content))
        {
            $this->content = $content;
        }
    }

    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
    }

    public function setStatus($status)
    {
        $this->status = (int) $status;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPostId($postId)
    {
        $this->postId = (int) $postId;
    }
}