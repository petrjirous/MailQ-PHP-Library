<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class SmsEntity extends BaseEntity
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
	private $toNumber;

	/**
	 * @in
	 * @out
	 * @var array
	 */
	private $data;

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $state;

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $sendTimestamp;

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $message;

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 * @return SmsEntity
	 */
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getToNumber()
	{
		return $this->toNumber;
	}

	/**
	 * @param string $toNumber
	 * @return SmsEntity
	 */
	public function setToNumber($toNumber)
	{
		$this->toNumber = $toNumber;
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
	 * @return SmsEntity
	 */
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
	}

	/**
	 * @param string $state
	 * @return SmsEntity
	 */
	public function setState($state)
	{
		$this->state = $state;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSendTimestamp()
	{
		return $this->sendTimestamp;
	}

	/**
	 * @param string $sendTimestamp
	 * @return SmsEntity
	 */
	public function setSendTimestamp($sendTimestamp)
	{
		$this->sendTimestamp = $sendTimestamp;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getMessage()
	{
		return $this->message;
	}

	/**
	 * @param string $message
	 * @return SmsEntity
	 */
	public function setMessage($message)
	{
		$this->message = $message;
		return $this;
	}


}
