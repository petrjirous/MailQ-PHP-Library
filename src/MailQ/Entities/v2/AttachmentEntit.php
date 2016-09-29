<?php

namespace MailQ\Entities\v2;

class AttachmentEntity extends \MailQ\Entities\BaseEntity
{

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $displayName;

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $link;

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $mimeType;

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $source;

	/**
	 * @return string
	 */
	public function getDisplayName()
	{
		return $this->displayName;
	}

	/**
	 * @param string $displayName
	 * @return AttachmentEntity
	 */
	public function setDisplayName($displayName)
	{
		$this->displayName = $displayName;
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
	 * @return AttachmentEntity
	 */
	public function setLink($link)
	{
		$this->link = $link;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getMimeType()
	{
		return $this->mimeType;
	}

	/**
	 * @param string $mimeType
	 * @return AttachmentEntity
	 */
	public function setMimeType($mimeType)
	{
		$this->mimeType = $mimeType;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSource()
	{
		return $this->source;
	}

	/**
	 * @param string $source
	 * @return AttachmentEntity
	 */
	public function setSource($source)
	{
		$this->source = $source;
		return $this;
	}
    

}
