<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class NotificationEntity extends BaseEntity {
        
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

    public function getAppliedSenderEmail() {
        return $this->appliedSenderEmail;
    }

    public function getText() {
        return $this->text;
    }

    public function getTemplate() {
        return $this->template;
    }

    public function getStatus() {
        return $this->status;
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

    public function setAppliedSenderEmail($appliedSenderEmail) {
        $this->appliedSenderEmail = $appliedSenderEmail;
    }

    public function setText($text) {
        $this->text = $text;
    }

    public function setTemplate($template) {
        $this->template = $template;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function setCompany(LinkEntity $company) {
        $this->company = $company;
    }


    
}
