<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class SmsNotificationEntity extends BaseEntity
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
	private $name;

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $code;

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $template;

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $status;

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
	 * @return SmsNotificationEntity
	 */
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return SmsNotificationEntity
	 */
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCode()
	{
		return $this->code;
	}

	/**
	 * @param string $code
	 * @return SmsNotificationEntity
	 */
	public function setCode($code)
	{
		$this->code = $code;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTemplate()
	{
		return $this->template;
	}

	/**
	 * @param string $template
	 * @return SmsNotificationEntity
	 */
	public function setTemplate($template)
	{
		$this->template = $template;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}

	/**
	 * @param string $status
	 * @return SmsNotificationEntity
	 */
	public function setStatus($status)
	{
		$this->status = $status;
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
	 * @return SmsNotificationEntity
	 */
	public function setCompany($company)
	{
		$this->company = $company;
		return $this;
	}


}
