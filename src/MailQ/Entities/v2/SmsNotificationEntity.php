<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class SmsNotificationEntity extends BaseEntity {

  
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

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getCode() {
        return $this->code;
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
