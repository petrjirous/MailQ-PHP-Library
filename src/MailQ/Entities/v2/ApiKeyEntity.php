<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class ApiKeyEntity extends BaseEntity
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
	 * @var integer
	 */
	private $apiKey;

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 * @return ApiKeyEntity
	 */
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getApiKey()
	{
		return $this->apiKey;
	}

	/**
	 * @param int $apiKey
	 * @return ApiKeyEntity
	 */
	public function setApiKey($apiKey)
	{
		$this->apiKey = $apiKey;
		return $this;
	}

	


}
