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
	 * @in sendTimestamp
	 * @out sendTimestamp
	 * @var \DateTime
	 */
	private $sent;

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
	 * @return null|string
	 */
	public function getSent()
	{
		if ($this->sent != null) {
			return $this->sent->format(DATE_ATOM);
		} else {
			return null;
		}
	}

	/**
	 * @return \DateTime
	 */
	public function getSentAsDateTime()
	{
		return $this->sent;
	}


	/**
	 * @param $sent
	 * @return SmsEntity
	 */
	public function setSent($sent)
	{
		if (is_string($sent)) {
			$this->sent = \DateTime::createFromFormat(DATE_ATOM, $sent);
		} elseif ($sent instanceof \DateTime) {
			$this->sent = $sent;
		}
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
