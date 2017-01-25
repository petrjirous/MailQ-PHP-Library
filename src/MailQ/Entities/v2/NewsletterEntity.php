<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class NewsletterEntity extends BaseEntity {

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
    private $senderEmail;

    /**
     * @in
     * @out
     * @var string 
     */
    private $status;

    /**
     * @in
     * @out
     * @var \DateTime 
     */
    private $from;

    /**
     * @in
     * @out
     * @var \DateTime 
     */
    private $to;

    /**
     * @in
     * @out
     * @var bool 
     */
    private $automaticTime;
	
	/**
     * @in
     * @out
     * @var bool 
     */
    private $unlimited;

    /**
     * @in
     * @out
     * @var integer 
     */
    private $recipientsListId;
	
	/**
     * @in
     * @out
     * @var integer 
     */
    private $dataPersistence;

    /**
     * @in
     * @out
     * @var string 
     */
    private $campaign;

	/**
     * @in
     * @out
     * @var string 
     */
    private $csvUrl;
	
    /**
     * @in
     * @out
     * @var string 
     */
    private $templateUrl;

    /**
     * @in
     * @out
     * @var string 
     */
    private $unsubscribeTemplateUrl;

    /**
     * @in
     * @out
     * @var AttachmentEntity
     * @collection 
     */
    private $attachments;

    /**
     * @in
     * @out
     * @var LinkEntity 
     */
    private $company;
	
	/**
	 * @in
     * @out
	 * @var string 
	 */
	private $text;

	/**
	 * @return null|string
	 */
	public function getFrom() {
		if ($this->from != null) {
			return $this->from->format(DATE_ATOM);
		}
		else {
			return null;
		}
	}

	/**
	 * @return \DateTime
	 */
	public function getFromAsDateTime() {
		return $this->from;
	}

	/**
	 * @return null|string
	 */
	public function getTo() {
		if ($this->to != null) {
			return $this->to->format(DATE_ATOM);
		}
		else {
			return null;
		}
	}

	/**
	 * @return \DateTime
	 */
	public function getToAsDateTime() {
		return $this->to;
	}

	/**
	 * @param $from
	 * @return NewsletterEntity
	 */
	public function setFrom($from)
	{
		if (is_string($from)) {
			$this->from = \DateTime::createFromFormat(DATE_ATOM, $from);
		} elseif ($from instanceof \DateTime) {
			$this->from = $from;
		}
		return $this;
	}

	/**
	 * @param $to
	 * @return NewsletterEntity
	 */
	public function setTo($to)
	{
		if (is_string($to)) {
			$this->to = \DateTime::createFromFormat(DATE_ATOM, $to);
		} elseif ($to instanceof \DateTime) {
			$this->to = $to;
		}
		return $this;
	}


	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 * @return NewsletterEntity
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
	 * @return NewsletterEntity
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
	 * @return NewsletterEntity
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
	 * @return NewsletterEntity
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
	 * @return NewsletterEntity
	 */
	public function setSendAs($sendAs)
	{
		$this->sendAs = $sendAs;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSenderEmail()
	{
		return $this->senderEmail;
	}

	/**
	 * @param string $senderEmail
	 * @return NewsletterEntity
	 */
	public function setSenderEmail($senderEmail)
	{
		$this->senderEmail = $senderEmail;
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
	 * @return NewsletterEntity
	 */
	public function setStatus($status)
	{
		$this->status = $status;
		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isAutomaticTime()
	{
		return $this->automaticTime;
	}

	/**
	 * @param boolean $automaticTime
	 * @return NewsletterEntity
	 */
	public function setAutomaticTime($automaticTime)
	{
		$this->automaticTime = $automaticTime;
		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isUnlimited()
	{
		return $this->unlimited;
	}

	/**
	 * @param boolean $unlimited
	 * @return NewsletterEntity
	 */
	public function setUnlimited($unlimited)
	{
		$this->unlimited = $unlimited;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getRecipientsListId()
	{
		return $this->recipientsListId;
	}

	/**
	 * @param int $recipientsListId
	 * @return NewsletterEntity
	 */
	public function setRecipientsListId($recipientsListId)
	{
		$this->recipientsListId = $recipientsListId;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getDataPersistence()
	{
		return $this->dataPersistence;
	}

	/**
	 * @param int $dataPersistence
	 * @return NewsletterEntity
	 */
	public function setDataPersistence($dataPersistence)
	{
		$this->dataPersistence = $dataPersistence;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCampaign()
	{
		return $this->campaign;
	}

	/**
	 * @param string $campaign
	 * @return NewsletterEntity
	 */
	public function setCampaign($campaign)
	{
		$this->campaign = $campaign;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCsvUrl()
	{
		return $this->csvUrl;
	}

	/**
	 * @param string $csvUrl
	 * @return NewsletterEntity
	 */
	public function setCsvUrl($csvUrl)
	{
		$this->csvUrl = $csvUrl;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTemplateUrl()
	{
		return $this->templateUrl;
	}

	/**
	 * @param string $templateUrl
	 * @return NewsletterEntity
	 */
	public function setTemplateUrl($templateUrl)
	{
		$this->templateUrl = $templateUrl;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getUnsubscribeTemplateUrl()
	{
		return $this->unsubscribeTemplateUrl;
	}

	/**
	 * @param string $unsubscribeTemplateUrl
	 * @return NewsletterEntity
	 */
	public function setUnsubscribeTemplateUrl($unsubscribeTemplateUrl)
	{
		$this->unsubscribeTemplateUrl = $unsubscribeTemplateUrl;
		return $this;
	}

	/**
	 * @return AttachmentEntity
	 */
	public function getAttachments()
	{
		return $this->attachments;
	}

	/**
	 * @param AttachmentEntity $attachments
	 * @return NewsletterEntity
	 */
	public function setAttachments($attachments)
	{
		$this->attachments = $attachments;
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
	 * @return NewsletterEntity
	 */
	public function setCompany($company)
	{
		$this->company = $company;
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
	 * @return NewsletterEntity
	 */
	public function setText($text)
	{
		$this->text = $text;
		return $this;
	}





}
