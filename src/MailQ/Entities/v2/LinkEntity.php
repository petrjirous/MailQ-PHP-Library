<?php

namespace MailQ\Entities\v2;

class LinkEntity extends \MailQ\Entities\BaseEntity
{

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $id;

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $link;

	/**
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param string $id
	 * @return LinkEntity
	 */
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getLink()
	{
		return $this->link;
	}

	/**
	 * @param string $link
	 * @return LinkEntity
	 */
	public function setLink($link)
	{
		$this->link = $link;
		return $this;
	}
    

}
