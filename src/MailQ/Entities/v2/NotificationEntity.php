<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class NotificationEntity extends BaseEntity
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
	private $subject;

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $sendAs;

	/**
	 * @in
	 * @out
	 * @var string
	 */
	private $appliedSenderEmail;

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
	 * @return NotificationEntity
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
	 * @return NotificationEntity
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
	 * @return NotificationEntity
	 */
	public function setCode($code)
	{
		$this->code = $code;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSubject()
	{
		return $this->subject;
	}

	/**
	 * @param string $subject
	 * @return NotificationEntity
	 */
	public function setSubject($subject)
	{
		$this->subject = $subject;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSendAs()
	{
		return $this->sendAs;
	}

	/**
	 * @param string $sendAs
	 * @return NotificationEntity
	 */
	public function setSendAs($sendAs)
	{
		$this->sendAs = $sendAs;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAppliedSenderEmail()
	{
		return $this->appliedSenderEmail;
	}

	/**
	 * @param string $appliedSenderEmail
	 * @return NotificationEntity
	 */
	public function setAppliedSenderEmail($appliedSenderEmail)
	{
		$this->appliedSenderEmail = $appliedSenderEmail;
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
	 * @return NotificationEntity
	 */
	public function setText($text)
	{
		$this->text = $text;
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
	 * @return NotificationEntity
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
	 * @return NotificationEntity
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
	 * @return NotificationEntity
	 */
	public function setCompany($company)
	{
		$this->company = $company;
		return $this;
	}
    

}
