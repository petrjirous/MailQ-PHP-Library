<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class SmsResultEntity extends BaseEntity
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
	private $result;

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $url;

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 * @return SmsResultEntity
	 */
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getResult()
	{
		return $this->result;
	}

	/**
	 * @param string $result
	 * @return SmsResultEntity
	 */
	public function setResult($result)
	{
		$this->result = $result;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
	}

	/**
	 * @param string $url
	 * @return SmsResultEntity
	 */
	public function setUrl($url)
	{
		$this->url = $url;
		return $this;
	}


}
