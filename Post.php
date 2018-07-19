<?php
class Post
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

	// on fait ensuite les setters

	public function setPostId($PostId)
	{
		$this->postId = (int) $postId;
	}

	public function setUserId($UserId)
	{
		$this->userId = (int) $userId;
	}

	public function setTitle($Title)
	{
		if(is_string($Title))
		{
			$this->title = $title;
		}
	}

	public function setHead($Head)
	{
		if(is_string($Head))
		{
			$this->head = $Head;
		}
	}

	public function setImage($Image)
	{
		if(is_string($Image))
		{
			$this->_Image = $Image;
		}
	}

	public function setContent($Content)
	{
		if(is_string($Content))
		{
			$this->_Content = $Content;
		}
	}

	public function setLastModif($LastModif)
	{
		$this->_LastModif = $LastModif;
	}

	public function setCreatDate($CreatDate)
	{
		$this->_CreatDate = $CreatDate;
	}

	// enfin on prepare l'hydratation

	public function hydrate(array $data)
	{
		foreach($data as $key => $value)
		{
			$method = 'set'.ucfirst($key);
		}
	}


}