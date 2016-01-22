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
     * @var integer 
     */
    private $recipientsListId;

    /**
     * @in
     * @out
     * @var string 
     */
    private $campaign;

    /**
     *
     * @var string 
     */
    private $templateUrl;

    /**
     *
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

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getCode() {
        return $this->code;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function getSendAs() {
        return $this->sendAs;
    }

    public function getSenderEmail() {
        return $this->senderEmail;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getFrom() {
        return $this->from->format('Y-m-d\TH:i:s.u');
    }

    public function getTo() {
        return $this->to->format('Y-m-d\TH:i:s.u');
    }
	
	public function getFromAsDateTime() {
        return $this->from;
    }

    public function getToAsDateTime() {
        return $this->to;
    }

    public function getAutomaticTime() {
        return $this->automaticTime;
    }

    public function getRecipientsListId() {
        return $this->recipientsListId;
    }

    public function getCampaign() {
        return $this->campaign;
    }

    public function getAttachments() {
        return $this->attachments;
    }

    public function getCompany() {
        return $this->company;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setCode($code) {
        $this->code = $code;
    }

    public function setSubject($subject) {
        $this->subject = $subject;
    }

    public function setSendAs($sendAs) {
        $this->sendAs = $sendAs;
    }

    public function setSenderEmail($senderEmail) {
        $this->senderEmail = $senderEmail;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function setFrom($from) {
        if (is_string($from)) {
            $this->from = \DateTime::createFromFormat('Y-m-d\TH:i:s.u', $from);
        } elseif ($from instanceof \DateTime) {
            $this->from = $from;
        }
    }

    public function setTo($to) {
        if (is_string($to)) {
            $this->to = \DateTime::createFromFormat('Y-m-d\TH:i:s.u', $to);
        } elseif ($to instanceof \DateTime) {
            $this->to = $to;
        }
    }

    public function setAutomaticTime($automaticTime) {
        $this->automaticTime = $automaticTime;
    }

    public function setRecipientsListId($recipientsListId) {
        $this->recipientsListId = $recipientsListId;
    }

    public function setCampaign($campaign) {
        $this->campaign = $campaign;
    }

    public function setAttachments($attachments) {
        $this->attachments = $attachments;
    }

    public function setCompany(LinkEntity $company) {
        $this->company = $company;
    }

    public function getTemplateUrl() {
        return $this->templateUrl;
    }

    public function getUnsubscribeTemplateUrl() {
        return $this->unsubscribeTemplateUrl;
    }

    public function setTemplateUrl($templateUrl) {
        $this->templateUrl = $templateUrl;
    }

    public function setUnsubscribeTemplateUrl($unsubscribeTemplateUrl) {
        $this->unsubscribeTemplateUrl = $unsubscribeTemplateUrl;
    }

}
