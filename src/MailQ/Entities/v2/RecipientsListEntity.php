<?php

namespace MailQ\Entities\v2;

use MailQ\Entities\BaseEntity;

class RecipientsListEntity extends BaseEntity {

      
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
    private $description;
    /**
     * @in
     * @out
     * @var integer 
     */
    private $recipients;
    /**
     * @in
     * @out
     * @var integer 
     */
    private $unsubscribers;
    /**
     * @in
     * @out
     * @var bool 
     */
    private $formVisible;
    /**
     * @in
     * @out
     * @var array 
     */
    private $variables;
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

    public function getRecipients() {
        return $this->recipients;
    }

    public function getUnsubscribers() {
        return $this->unsubscribers;
    }

    public function getFormVisible() {
        return $this->formVisible;
    }

    public function getVariables() {
        return $this->variables;
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

    public function setRecipients($recipients) {
        $this->recipients = $recipients;
    }

    public function setUnsubscribers($unsubscribers) {
        $this->unsubscribers = $unsubscribers;
    }

    public function setFormVisible($formVisible) {
        $this->formVisible = $formVisible;
    }

    public function setVariables($variables) {
        $this->variables = $variables;
    }

    public function setCompany(LinkEntity $company) {
        $this->company = $company;
    }
    
    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }





}
