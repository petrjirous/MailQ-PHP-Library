<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class LogMessageEntity extends BaseEntity
{

	/**
	 * @in
	 * @out
	 * @var integer
	 */
	private $id;

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $title;

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $text;

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $type;

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $created;

	/**
	 * @in
	 * @out
	 * @var LinkEntity
	 */
	private $company;

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 * @return LogMessageEntity
	 */
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @param string $title
	 * @return LogMessageEntity
	 */
	public function setTitle($title)
	{
		$this->title = $title;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getText()
	{
		return $this->text;
	}

	/**
	 * @param string $text
	 * @return LogMessageEntity
	 */
	public function setText($text)
	{
		$this->text = $text;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @param string $type
	 * @return LogMessageEntity
	 */
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCreated()
	{
		return $this->created;
	}

	/**
	 * @param string $created
	 * @return LogMessageEntity
	 */
	public function setCreated($created)
	{
		$this->created = $created;
		return $this;
	}

	/**
	 * @return LinkEntity
	 */
	public function getCompany()
	{
		return $this->company;
	}

	/**
	 * @param LinkEntity $company
	 * @return LogMessageEntity
	 */
	public function setCompany($company)
	{
		$this->company = $company;
		return $this;
	}


}
