<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class RecipientEntity extends BaseEntity
{


	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $email;

	/**
	 * @in
	 * @out
	 * @var array
	 */
	private $data;

	/**
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * @param string $email
	 * @return RecipientEntity
	 */
	public function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getData()
	{
		return $this->data;
	}

	/**
	 * @param array $data
	 * @return RecipientEntity
	 */
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}
    

}
