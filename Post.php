<?php
class post
{
	
	// d'abord les attributs

	private $PostId;
	private $UserId;
	private $Title;
	private $Head;
	private $Image;
	private $Content;
	private $LastModif;
	private $CreatDate;

	// ensuite les méthodes
	// je commence par les getters

	public function getPostId
	{
		return $this->_PostId;
	}

	public function getUserId
	{
		return $this->_UserId;
	}

	public function getTitle
	{
		return $this->_Title;
	}

	public function getHead
	{
		return $this->_Head;
	}

	public function getImage
	{
		return $this->_Image;
	}

	public function getContent
	{
		return $this->_Content;
	}

	public function getLastModif
	{
		return $this->_LastModif;
	}

	public function getCreatDate
	{
		return $this->_CreatDate;
	}

	// on fait ensuite les setters

	public function setPostId($PostId)
	{
		$this->_PostId = (int) $PostId;
	}

	public function setUserId($UserId)
	{
		$this->_UserId = (int) $UserId;
	}

	public function setTitle($Title)
	{
		if(is_string($Title))
		{
			$this->_Title = $Title;
		}
	}

	public function setHead($Head)
	{
		if(is_string($Head))
		{
			$this->_Head = $Head;
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