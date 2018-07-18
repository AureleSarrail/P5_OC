<?
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


}