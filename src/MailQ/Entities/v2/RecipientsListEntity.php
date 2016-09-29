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
    private $variables = [];
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
     * @return RecipientsListEntity
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
     * @return RecipientsListEntity
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return RecipientsListEntity
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * @param int $recipients
     * @return RecipientsListEntity
     */
    public function setRecipients($recipients)
    {
        $this->recipients = $recipients;
        return $this;
    }

    /**
     * @return int
     */
    public function getUnsubscribers()
    {
        return $this->unsubscribers;
    }

    /**
     * @param int $unsubscribers
     * @return RecipientsListEntity
     */
    public function setUnsubscribers($unsubscribers)
    {
        $this->unsubscribers = $unsubscribers;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isFormVisible()
    {
        return $this->formVisible;
    }

    /**
     * @param boolean $formVisible
     * @return RecipientsListEntity
     */
    public function setFormVisible($formVisible)
    {
        $this->formVisible = $formVisible;
        return $this;
    }

    /**
     * @return array
     */
    public function getVariables()
    {
        return $this->variables;
    }

    /**
     * @param array $variables
     * @return RecipientsListEntity
     */
    public function setVariables($variables)
    {
        $this->variables = $variables;
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
     * @return RecipientsListEntity
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }
    
    





}
